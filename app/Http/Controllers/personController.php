<?php

namespace App\Http\Controllers;

use App\Rooms;
use App\RoomCare;
use App\RoomUsed;
use App\User;
use App\Service\RateService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class personController extends Controller
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
    public function user($id)
    {
        $person = User::where('id', $id)->get();
        $rooms = Rooms::where('id_user', $id)->with(['users'])->get();
        $dataRate = $this->rateService->getInformationRate('userRate', $id, config('ourhome.limit'));

        return view('theme.infor', [
            'person' => $person,
            'rooms' => $rooms,
            'rates' => $dataRate['rates'],
            'getUserNames' => $dataRate['getUserNames'],
            'avgPoint' => $dataRate['avgPoint'],
        ]);
    }

    public function rate($id)
    {
        $person = User::where('id', $id)->first();
        $dataRate = $this->rateService->getInformationRate('userRate', $id);

        return view('theme.rate', [
            'person' => $person,
            'rates' => $dataRate['rates'],
            'getUserNames' => $dataRate['getUserNames'],
            'avgPoint' => $dataRate['avgPoint'],
        ]);
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
        if (Auth::check()) {
            return redirect('/');
        } else {
            return view('theme.login');
        }

    }

    public function postlogin(Request $request)
    {
        $this->validate($request,
            [
                'email' => 'required',
                'password' => 'required|max:32',
            ],
            [
                'email.required' => 'bạn chưa nhập email',
                'password.required' => 'bạn chưa nhập password',
                'password.min' => ' password không được nhỏ hơn 3 kt',
                'password.max' => ' password không được lớn hơn 32 kt',
            ]);


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/');
        } else {
            return redirect('login')->with('thongbao', 'dang nhập ko thành công xin kiểm tra lại');
        }
    }

    public function logOut()
    {
        Auth::logout();

        return redirect('login');
    }

    public function register()
    {
        return view('theme.register');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request,
            [
                'email' => 'required',
                'name' => 'required',
                'password' => 'required|max:32',
                're-password' => 'required|same:password',
            ],
            [
                'email.required' => 'bạn chưa nhập email',
                'name.required' => 'bạn chưa nhập tên',
                'password.required' => 'bạn chưa nhập password',
                'password.min' => ' password không được nhỏ hơn 3 kt',
                'password.max' => ' password không được lớn hơn 32 kt',
                're-password.required' => 'bạn chưa nhập lại password',
                're-password.same' => 'mật khẩu nhập không khớp',
            ]);
        $data = $request->only(['email', 'password', 'name']);
        $data['password'] = Hash::make($data['password']);
        User::create($data);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/');
        }
    }
}
