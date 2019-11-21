<?php

namespace App\Http\Controllers;

use App\RoomCare;
use Illuminate\Http\Request;

class RoomCareController extends Controller
{
    public function care(Request $request)
    {
        $data = $request->all();
        if (isset($data['id_user']) && isset($data['id_room']) && !isset($data['status'])) {
            $idRoomCare = RoomCare::create($data)->id;
        }
        if (isset($data['status'])) {
            RoomCare::where('id', $data['idRoomCare'])->update(['status' => 1]);
            return 200;
        }
        return response($idRoomCare, 200);
    }
}
