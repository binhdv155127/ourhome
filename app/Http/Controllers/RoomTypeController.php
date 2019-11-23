<?php

namespace App\Http\Controllers;

use App\RoomType;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    public function getList(){
      $roomType = RoomType::where('deleted_at',0)->paginate(5);
      return view('admin.roomType.list',compact('roomType'));
    }

    public function getNewRoomType(){
      return view('admin.roomType.new');
    }

    public function postNewRoomType(Request $request){
       $this->validate($request,
        [
            'type'=>'required|min:3|max:100|unique:room_types,type'
        ],
        [
            'type.required'=>'Bạn chưa nhập',
            'type.unique'=>'Tên đã tồn tại',
            'type.min'=>'Tên phài dài từ 3 đến 100 kí tự',
            'type.max'=>'Tên phài dài từ 3 đến 100 kí tự',
        ]);

        $type = new RoomType;
        $type->type=$request->type;
        $type->save();
        return redirect('admin/roomtype/list')->with('thongbao','Thêm thành công');
    }

    public function getEditRoomType($id){
      $type = RoomType::find($id);
      return view('admin.roomType.edit',compact('type'));
    }

    public function postEditRoomType(Request $request,$id){
        $this->validate($request,
        [
            'type'=>'min:3|max:100'
        ],
        [
            'type.min'=>'Tên phài dài từ 3 đến 100 kí tự',
            'type.max'=>'Tên phài dài từ 3 đến 100 kí tự',
        ]);
      $type = RoomType::find($id);
      $type->type=$request->type;
      $type->save();
      return redirect('admin/roomtype/list')->with('thongbao','Đã sửa thành công');
    }

    public function Delete($id){
      $type = RoomType::find($id);
      $type->deleted_at = 1;
      $type->save();
      return redirect('admin/roomtype/list')->with('thongbao','Đã xóa loại phòng');
    }
}
