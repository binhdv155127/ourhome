<?php

namespace App\Http\Controllers;

use App\Rooms;
use App\RoomCare;
use App\RoomUsed;
use App\User;
use App\rate_users;
use App\Service\RateService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Mail;
use App\Mail\Schedulemail;

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
        $rooms = Rooms::where('id_user', $id)->with(['users1','room_used'])->get();
        $dataRate = $this->rateService->getInformationRate('userRate', $id, 'id_user', config('ourhome.limit'));

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
        $dataRate = $this->rateService->getInformationRate('userRate', $id, 'id_user');

        if(Auth::user()){
            $checkRoom = Rooms::where('id_user',Auth::user()->id)->get();
            for ($i=0; $i < count($checkRoom) ; $i++) { 
                $checkRateRoom = RoomUsed::where('id_user',$id)->where('id_room',$checkRoom[$i]->id)->get();
            }  
        }else{
            $checkRateRoom = [];
        }
        
        if(count($checkRateRoom)>0){
            $checkRateRoom2 = rate_users::where('id_roomused',$checkRateRoom[0]->id)->get();
        }else{
            $checkRateRoom2 = [];
        }
        return view('theme.rate', [
            'person' => $person,
            'rates' => $dataRate['rates'],
            'getUserNames' => $dataRate['getUserNames'],
            'avgPoint' => $dataRate['avgPoint'],
            'checkRateRoom' => $checkRateRoom,
            'checkRateRoom2' => $checkRateRoom2,
        ]);
    }

    public function update($id)
    {
        $user = User::find($id);
        return view('theme.modifyinfor',['user'=>$user]);
    }

    public function postUpdate(Request $request,$id)
    {
        $this->validate($request,[
          'name' => 'required',
          'phonenumber' => 'required',
          'birthday' => 'required',
          'avatar' => 'required',
          'content' => 'required'
        ],[
          'name.required' => 'Vui lòng nhập đầy đủ Họ Tên',
          'phonenumber.required' => 'Vui lòng nhập số điện thoại',
          'birthday.required' => 'Vui lòng nhập ngày sinh',
          'avatar.required' => 'Vui lòng chọn ảnh làm avatar',
          'content.required' => 'Vui lòng nhập mô tả'
        ]);
          $user = User::find($id);
          $user->name = $request->name;
          $user->phonenumber = $request->phonenumber;
          $user->birthday = $request->birthday;
          $user->gender = $request->gender;
          $user->address = $request->address;
          $user->content = $request->content;
          $user->updated_at = Carbon::now();

        if($request->password != ''){
            $this->validate($request,[
              'password' => 'min:3|max:32',
              'repassword' => 'same:password',
            ],[
              'password.min' => 'password phải lớn hơn 3 và nhỏ hơn 32 kí tự',
              'password.max' => 'password phải lớn hơn 3 và nhỏ hơn 32 kí tự',
              'repassword.same' => 'Nhập lại mật khẩu không đúng',
              'repassword.required' => 'Vui lòng nhập lại mật khẩu',
            ]);
            $user->password = Hash::make($request->password);
        }
        $user->save();
        return redirect('modifyinfor/'.$id)->with('thongbao','Bạn đã cập nhật thông tin thành công');
    }


    public function meet($id)
    {
        $user = User::find($id);
        return view('theme.meeting',compact('user'));
    }

    public function postMeet(Request $req, $id)
    {
        $maildetail = [];
        $maildetail['mail'] = $req->mail;
        $maildetail['name'] = $req->name;
        $maildetail['schedule'] = $req->schedule;
        $maildetail['address'] = $req->address;
        $maildetail['content'] = $req->content;
        $maildetail['emailSend'] = Auth::user()->email;
        $maildetail['nameSend'] = Auth::user()->name;
        $maildetail['phone'] = Auth::user()->phonenumber;
        $maildetail['address1'] = Auth::user()->phonenumber;
        Mail::to($req->mail)->send(new Schedulemail($maildetail));
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
                'password.min' => ' password không được nhỏ hơn 3 kí tự',
                'password.max' => ' password không được lớn hơn 32 kí tự',
                're-password.required' => 'bạn chưa nhập lại password',
                're-password.same' => 'mật khẩu nhập không khớp',
            ]);
        $data = $request->only(['email', 'password', 'name','slugs','deleted_at','auth']);
        $data['password'] = Hash::make($data['password']);
        $data['slugs'] = Str::slug($data['name'], '-');
        $data['deleted_at'] = 0;
        $data['auth'] = 0;
        User::create($data);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/');
        }
    }
}
