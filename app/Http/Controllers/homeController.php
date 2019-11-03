<?php

namespace App\Http\Controllers;

use App\Rooms;
use App\Wards;
use Illuminate\Http\Request;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = Rooms::all();
        return view('theme.home',['new'=>$news]);
    }
}
