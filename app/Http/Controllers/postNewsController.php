<?php

namespace App\Http\Controllers;

use Imagick;
use Illuminate\Support\Str;
use App\Rooms;
use App\Photo;
use App\RoomType;
use App\ServiceRoom;
use App\Services;
use App\Wards;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class postNewsController extends Controller
{
    public function new()
    {
        $roomType = RoomType::all();
        $service = Services::all();
        return view('theme.news',compact('roomType','service'));
    }

    public function postnew(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'txtaddress' => 'required',
            'txtprice' => 'required',
            'txtacreage' => 'required',
            'description' => 'required',
            ],
            [
            'txttitle.required' => 'Nhập tiêu đề bài đăng',
            'txtaddress.required' => 'Nhập địa chỉ phòng trọ',
            'txtprice.required' => 'Nhập giá thuê phòng trọ',
            'txtarea.required' => 'Nhập diện tích phòng trọ',
            'description.required' => 'Nhập mô tả ngắn cho phòng trọ'
        ]);



        $rooms = new Rooms;
        $rooms->title = $request->title;
        $rooms->price = $request->txtprice;
        $rooms->area = $request->txtaddress;
        $rooms->numberpeople = $request->numberpeople;
        $rooms->status = 0;
        $rooms->discription = $request->description;

        $arrlatlng = array();
        $arrlatlng[] = $request->txtlat;
        $arrlatlng[] = $request->txtlng;
        $json_latlng = json_encode($arrlatlng,JSON_FORCE_OBJECT);

        $rooms->latlng = $json_latlng;
        $rooms->slugs = Str::slug($request->title, '-');
        $rooms->acreage = $request->txtacreage;
        $rooms->id_user = Auth::user()->id;
        $rooms->id_roomtype = $request->roomType;
        $rooms->id_province = 1;
        $rooms->id_district = $request->district1;
        $rooms->id_ward = $request->ward1;
        $rooms->accept = 0;
        $rooms->deleted_at = 0;

        $rooms->save();

       if ($request->hasFile('hinhanh')) {
        $arr_images = array();
        $inputfile =  $request->file('hinhanh');
        foreach ($inputfile as $filehinh) {
           $namefile = "phongtro-".Str::random(5)."-".$filehinh->getClientOriginalName();
           while (file_exists('theme/img/bg-img'.$namefile)) {
             $namefile = "phongtro-".Str::random(5)."-".$filehinh->getClientOriginalName();
           }
          $arr_images[] = $namefile;
          $filehinh->move('theme/img/bg-img',$namefile);
        }
        $photo1 = $arr_images;
        } else {
            $photo1 = '';
        }

        $name = $photo1;
        for($i = 0; $i < count($name); $i++){
            $photo = new Photo;
            $photo->name = $name[$i];
            $rooms->photo()->save($photo);
        }

        $services = $request->tienich;
        $rooms->service()->attach($services);

       return redirect('/')->with('thongbao','them thành công');
    }
}
