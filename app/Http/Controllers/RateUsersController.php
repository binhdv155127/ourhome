<?php

namespace App\Http\Controllers;

use App\rate_users;
use App\Rooms;
use App\RoomUsed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect;

class RateUsersController extends Controller
{
    public function index(Request $req)
    {
        if(Auth::user()){
            $checkRoom = Rooms::where('id_user',Auth::user()->id)->get();

            for ($i=0; $i < count($checkRoom) ; $i++) { 
                $RoomUsed = RoomUsed::where('id_user',$req->user_id)->where('id_room',$checkRoom[$i]->id)->get();
            }  
        }
        $RateUser = new rate_users;
        $RateUser->id_roomused = $RoomUsed[0]->id;
        $RateUser->point = $req->point;
        $RateUser->content = $req->content;
        $RateUser->save();

        return Redirect::back();
    }
}
