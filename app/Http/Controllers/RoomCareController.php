<?php

namespace App\Http\Controllers;

use App\RoomCare;
use Illuminate\Http\Request;

class RoomCareController extends Controller
{
    public function care(Request $request)
    {
        $data = $request->only(['id_room','id_user']);
        $data['status'] = 1;
        RoomCare::create($data);
        return 200;
    }
}
