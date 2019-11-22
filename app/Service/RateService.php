<?php

namespace App\Service;

use App\RateRoom;
use App\Rooms;
use App\Photo;
use App\RoomUsed;
use App\User;
use App\Wards;
use Illuminate\Http\Request;

class RateService
{
    /**
     * Get information rate user and room.
     * @param $relation
     * @param $id
     * @param $limit
     *
     */

    public function getInformationRate($relation, $id, $limit = '')
    {
        if ($limit === '') {
            $rates = RoomUsed::with($relation)->where('id_room', $id)->orderBy('id', 'DESC')->get();
        } else {
            $rates = RoomUsed::with($relation)->where('id_room', $id)->orderBy('id', 'DESC')->limit($limit)->get();
        }
        $users = User::all();
        $getUserNames = [];
        $totalPoint = 0;
        $total = 0;
        foreach ($users as $value) {
            $getUserNames[$value->id]['name'] = $value->name;
            $getUserNames[$value->id]['avatar'] = $value->avatar;
        }
        foreach ($rates as $key => $rate) {
            foreach ($rate->$relation as $keyRoom => $roomRate) {
                $rates[$key]->$relation[$keyRoom]['name'] = $getUserNames[$rate->id_user]['name'];
                $rates[$key]->$relation[$keyRoom]['avatar'] = $getUserNames[$rate->id_user]['avatar'];
                $totalPoint += $roomRate->point;
                $total++;
            }
        }
        $avgPoint = number_format($totalPoint/$total, 1);

        return [
            'rates' => $rates,
            'getUserNames' => $getUserNames,
            'avgPoint' => $avgPoint,
        ];
    }
}