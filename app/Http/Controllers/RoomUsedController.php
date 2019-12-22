<?php

namespace App\Http\Controllers;

use App\RoomUsed;
use App\RoomCare;
use Illuminate\Http\Request;
use Redirect;

class RoomUsedController extends Controller
{
    
    public function index(Request $request,$id)
    {
        $RoomCare = RoomCare :: where('id_user',$id)->where('id_room',$request->id_room)->first();
        $RoomCare->status = 2;
        $RoomCare->save();

        return redirect('user/meeting/'.$request->id_user);
        
    }

    public function rent(Request $request,$id)
    {
        $RoomCare = RoomCare :: where('id_user',$id)->where('id_room',$request->id_room)->first();
        $RoomCare->status = 3;
        $RoomCare->save();


        $RoomUsed = new RoomUsed;
        $RoomUsed->id_user = $request->id_user;
        $RoomUsed->id_room = $request->id_room;
        $RoomUsed->status = 1;
        $RoomUsed->save();

        return Redirect::back();
    }

}
