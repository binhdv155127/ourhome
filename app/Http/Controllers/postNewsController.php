<?php

namespace App\Http\Controllers;

use App\Rooms;
use App\Photo;
use App\Wards;
use Illuminate\Http\Request;

class postNewsController extends Controller
{
    public function new()
    {
        return view('theme.news');
    }

    public function postnew(Request $request)
    {
        $arrlatlng = array();
        $arrlatlng[] = $request->txtlat;
        $arrlatlng[] = $request->txtlng;
        $json_latlng = json_encode($arrlatlng,JSON_FORCE_OBJECT);

        dd($json_latlng);
    }
}
