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
        $news = Rooms::where('accept',1)
               ->where('deleted_at',0)
               ->orderBy('created_at', 'DESC')
               ->paginate(9);
        return view('theme.home',['new'=>$news]);
    }

    public function ajax($idDistrict)
    {
        $wardAjax=Wards::where('id_district',$idDistrict)->get();
        foreach ($wardAjax as $wardAjaxs) {
            echo "<option value='".$wardAjaxs->id."'>".$wardAjaxs->wardName."</option>";
        }
    }
}
