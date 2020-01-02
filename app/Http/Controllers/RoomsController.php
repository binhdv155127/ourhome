<?php

namespace App\Http\Controllers;

use App\Rooms;
use Illuminate\Http\Request;
use App\User;
class RoomsController extends Controller
{
    public function getIndex(){
    	$user = User::select('id')->get();
    	$userRoom = Rooms::select('id_user')->distinct()->get();
    	$room = Rooms::select('id')->get();
    	$roomStatus = Rooms::select('id')->where('accept',1)->get();
        return view ('admin.pages.index',compact('user','userRoom','room','roomStatus'));
    }


    public function getList(){
    	$room = Rooms::where('deleted_at',0)
              ->orderBy('created_at', 'DESC')
              ->orderBy('accept', 'DESC')
              ->paginate(5);
        return view ('admin.room.list',compact('room'));
    }

    public function ApproveMotelroom($id){
      $room = Rooms::find($id);
      $room->accept = 1;
      $room->save();
      return redirect('admin/room/list')->with('thongbao','Đã kiểm duyệt bài đăng: '.$room->title);
    }

    public function UnApproveMotelroom($id){
      $room = Rooms::find($id);
      $room->accept = 0;
      $room->save();
      return redirect('admin/room/list')->with('thongbao','Đã bỏ kiểm duyệt bài đăng: '.$room->title);
    }

    public function Delroom($id){
      $room = Rooms::find($id);
      $room->deleted_at = 1;
      $room->save();
      return redirect('admin/room/list')->with('thongbao','Đã xóa bài đăng');
    }
}
