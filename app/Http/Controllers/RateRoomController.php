<?php

namespace App\Http\Controllers;

use App\RateRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\RoomUsed;
use Redirect;

class RateRoomController extends Controller
{
    
    public function index(Request $req)
    {
        
        $RoomUsed = RoomUsed::where('id_user',Auth::user()->id)->where('id_room',$req->id_room)->get();
        $RateRoom = new RateRoom;
        $RateRoom->id_roomused = $RoomUsed[0]->id;
        $RateRoom->point = $req->point;
        $RateRoom->content = $req->content;
        $RateRoom->save();

        return Redirect::back();
    }

}
