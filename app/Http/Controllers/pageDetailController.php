<?php

namespace App\Http\Controllers;

use App\RateRoom;
use App\Rooms;
use App\Photo;
use App\RoomUsed;
use App\User;
use App\Wards;
use Illuminate\Http\Request;
use App\Service\RateService;

class pageDetailController extends Controller
{
    protected $rateService;

    public function __construct(RateService $rateService)
    {
        $this->rateService = $rateService;
    }

    /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
    public function index($id) {
        $dataRate = $this->rateService->getInformationRate('roomRate', $id, config('ourhome.limit'));
        $detail = Rooms::find($id);
        $photos = Photo::where('id_room', $id)->first();
        $photos1 = Photo::where('id_room', $id)->get();
        $recent = Rooms::orderBy('id', 'desc')->take(3)->get();
        $relevant = Rooms::where('id_district', $detail->id_district)->take(2)->get();

        return view('theme.detail', [
            'detail' => $detail,
            'photos' => $photos,
            'photos1' => $photos1,
            'recent' => $recent,
            'relevant' => $relevant,
            'rates' => $dataRate['rates'],
            'getUserNames' => $dataRate['getUserNames'],
            'avgPoint' => $dataRate['avgPoint'],
        ]);
    }

    public function search(Request $request)
    {
        if (!empty($request->price)) {
            $price = explode('-', $request->price);
        } else {
            $price = [0, 999999999];
        }
        $a = $price[0];
        $b = $price[1];

        if (!empty($request->area)) {
            $area = explode('-', $request->area);
        } else {
            $area = [0, 999999999];
        }
        $c = $area[0];
        $d = $area[1];

        if (!empty($request->types) || !empty($request->district) || !empty($request->ward) || !empty($request->price) || !empty($request->area)) {
            $findRoom = Rooms::where('id_roomtype', $request->types)
                ->orWhere('id_district', $request->district)
                ->orWhere('id_ward', $request->ward)
                ->whereBetween('price', [$a, $b])->paginate(6);
            //-> whereBetween('area',[$c,$d])
        } else {
            $findRoom = Rooms::paginate(5);
        }

        return view('theme.search', compact('findRoom'));

    }


    public function user()
    {
        return view('theme.infor');
    }

    public function rate($id)
    {
        $detail = Rooms::find($id);
        $dataRate = $this->rateService->getInformationRate('roomRate', $id);

        return view('theme.rateRoom', [
            'detail' => $detail,
            'rates' => $dataRate['rates'],
            'getUserNames' => $dataRate['getUserNames'],
            'avgPoint' => $dataRate['getUserNames'],
        ]);
    }

}
