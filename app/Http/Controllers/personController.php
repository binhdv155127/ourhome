<?php

namespace App\Http\Controllers;

use App\Rooms;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class personController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function user($id)
    {
        $person = User::where('id',$id)->get();
        $rooms = Rooms::where('id_user',$id)->get();
        return view('theme.infor',compact('person','rooms'));
    }

    public function rate($id)
    {
        return view('theme.rate');
    }

    public function update($id)
    {
        return view('theme.modifyinfor');
    }


    public function meet()
    {
        return view('theme.meeting');
    }
    public function login()
    {
        if(Auth::check()){
            return redirect('/');
        }else{
            return view('theme.login');
        }

    }
    public function postlogin(Request $request)
    {
        $this->validate($request,
            [
                'email'=>'required',
                'password'=>'required|max:32',
            ],
            [
                'email.required'=>'bạn chưa nhập email',
                'password.required'=>'bạn chưa nhập password',
                'password.min'=>' password không được nhỏ hơn 3 kt',
                'password.max'=>' password không được lớn hơn 32 kt',
            ]);


        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('/');
        }else{
            return redirect('login')->with('thongbao','dang nhập ko thành công xin kiểm tra lại');
        }
    }

    public function logOut(){
        Auth::logout();
        return redirect('login');
    }
}
