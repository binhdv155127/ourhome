<?php

namespace App\Http\Controllers;

use App\Rooms;
use App\Photo;
use App\Wards;
use Illuminate\Http\Request;

class pageDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $detail = Rooms::find($id);
        $photos = Photo::where('id_room',$id)->first();
        $photos1 = Photo::where('id_room',$id)->get();
        return view('theme.detail',['detail'=>$detail,'photos'=>$photos,'photos1'=>$photos1]);
    }
}
