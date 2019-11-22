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
     * @return array
     */

    public function getInformationRate($relation, $id, $limit = '')
    {
        if ($limit == '') {
            $rates = RoomUsed::with($relation)->where('id_room', $id)->get();
            $avgPoint = $this->getTotalAvg($rates, $relation);
        } else {
            $rates = RoomUsed::with($relation)->where('id_room', $id)->limit($limit)->get();
            $rateAll = RoomUsed::with($relation)->where('id_room', $id)->get();
            $avgPoint = $this->getTotalAvg($rateAll, $relation);
        }
        $users = User::all();
        $getUserNames = [];
        foreach ($users as $value) {
            $getUserNames[$value->id]['name'] = $value->name;
            $getUserNames[$value->id]['avatar'] = $value->avatar;
        }

        return [
            'rates' => $rates,
            'getUserNames' => $getUserNames,
            'avgPoint' => $avgPoint,
        ];
    }

    /**
     * Get total average star.
     *
     * @param $relation
     * @param $rates
     *
     * @return float
     */
    public function getTotalAvg($rates, $relation)
    {
        $totalPoint = 0;
        $total = 0;
        $avgPoint = 0;
        foreach ($rates as $key => $rate) {
            foreach ($rate->$relation as $keyRoom => $roomRate) {
                $totalPoint += $roomRate->point;
                $total++;
            }
        }
        if ($total != 0) {
            $avgPoint = number_format($totalPoint/$total, 1);
        }

        return $avgPoint;
    }
}