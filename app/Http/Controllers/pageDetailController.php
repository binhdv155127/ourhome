<?php

namespace App\Http\Controllers;

use App\RateRoom;
use App\Rooms;
use App\Photo;
use App\RoomUsed;
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
        $recent = Rooms::orderBy('id','desc')->take(3)->get();
        $relevant = Rooms::where('id_district',$detail->id_district)->take(2)->get();
        $rate = RoomUsed::with('roomRate')->where('id_room', $id)->first();

        return view('theme.detail',['detail'=>$detail,'photos'=>$photos,'photos1'=>$photos1,'recent'=>$recent,'relevant'=>$relevant, 'rate' => $rate]);
    }

    public function search(Request $request){
        if(!empty($request->price)){
            $price = explode('-', $request->price);
        } else {
            $price = [0,999999999];
        }
        $a = $price[0];
        $b = $price[1];

        if(!empty($request->area)){
            $area = explode('-', $request->area);
        } else {
            $area = [0,999999999];
        }
        $c = $area[0];
        $d = $area[1];

        if(!empty($request->types)||!empty($request->district)||!empty($request->ward)||!empty($request->price)||!empty($request->area)){
            $findRoom = Rooms::where('id_roomtype',$request->types)
                        -> orWhere('id_district',$request->district)
                        -> orWhere('id_ward',$request->ward)
                        -> whereBetween('price',[$a,$b])->paginate(6);
                        //-> whereBetween('area',[$c,$d])
        } else {
            $findRoom = Rooms::paginate(5);
        }

        return view('theme.search',compact('findRoom'));

    }


    public function user()
    {
        return view('theme.infor');
    }
    public function rate($id)
    {
        return view('theme.rateRoom');
    }
}
