<?php

namespace App\Http\Controllers;

use App\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function getList(){
      $Service = Services::where('deleted_at',0)->paginate(5);
      return view('admin.roomService.list',compact('Service'));
    }

    public function getNewServices(){
      return view('admin.roomService.new');
    }

    public function postNewServices(Request $request){
       $this->validate($request,
        [
            'service'=>'required|min:3|max:100|unique:services,service'
        ],
        [
            'service.required'=>'Bạn chưa nhập',
            'service.unique'=>'Tên đã tồn tại',
            'service.min'=>'Tên phài dài từ 3 đến 100 kí tự',
            'service.max'=>'Tên phài dài từ 3 đến 100 kí tự',
        ]);

        $service = new Services;
        $service->service=$request->service;
        $service->deleted_at=0;
        $service->save();
        return redirect('admin/roomservice/list')->with('thongbao','Thêm thành công');
    }

    public function getEditServices($id){
      $service = Services::find($id);
      return view('admin.roomService.edit',compact('service'));
    }

    public function postEditServices(Request $request,$id){
        $this->validate($request,
        [
            'service'=>'min:3|max:100'
        ],
        [
            'service.min'=>'Tên phài dài từ 3 đến 100 kí tự',
            'service.max'=>'Tên phài dài từ 3 đến 100 kí tự',
        ]);
      $service = Services::find($id);
      $service->service=$request->service;
      $service->save();
      return redirect('admin/roomservice/list')->with('thongbao','Đã sửa thành công');
    }

    public function Delete($id){
      $service = Services::find($id);
      $service->deleted_at = 1;
      $service->save();
      return redirect('admin/roomservice/list')->with('thongbao','Đã xóa dịch vụ phòng');
    }
}
