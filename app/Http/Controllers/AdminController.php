<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Rooms;
use App\Photo;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
	  public function getLogin(){
      if(Auth::check()){
          return redirect('admin/dashboard');
      }else{
          return view('admin.login');
      }
    }
    public function postLogin(Request $request){
    	$request->validate([
   			'email' => 'required',
   			'password' => 'required',
   			
   		],[
   			'email.required' => 'Vui lòng nhập tài khoản',
   			'password.required' => 'Vui lòng nhập mật khẩu'
   			
   		]);
   		if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('admin/dashboard');
    	}
    	else 
    		return redirect('admin/login')->with('thongbao','Đăng nhập không thành công');
    }

    public function getList(){
      $user = User::paginate(5);
      return view('admin.user.list',compact('user'));
    }

    public function getUpdateUser($id){
      $user = User::find($id);
      return view('admin.user.edit',['user'=>$user]);
    }


    public function postUpdateUser(Request $request,$id){
      $this->validate($request,[
          'name' => 'required'
        ],[
          'name.required' => 'Vui lòng nhập đầy đủ Họ Tên'
        ]);
      $user = User::find($id);
      $user->name = $request->name;
      $user->auth = $request->auth;
      $user->deleted_at = $request->deleted_at;

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
      return redirect('admin/user/edit/'.$id)->with('thongbao','Chỉnh sửa thành công tài khoản '.$request->username.' .');
    }

    public function DeleteUser($id){
      $user = User::find($id);
      $user->deleted_at = 1;
      $user->save();
      return redirect('admin/user/list')->with('thongbao','Đã xóa người dùng khỏi danh sách');
    }

    public function logout(){
        Auth::logout();
      return redirect('admin/login');
    }
}
