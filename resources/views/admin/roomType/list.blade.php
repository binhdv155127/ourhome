@extends('admin.layout.master')

@section('title')
  trang chủ
@endsection

@section('content')
 <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Danh sách loại phòng </h6>
                <a href="admin/roomtype/new">
                    <h6 class="m-0 font-weight-bold text-primary" style="margin: -5px 890px !important;width: 80px;">Thêm mới </h6>
                </a>
            </div>
            <div class="card-body">
                @if(session('thongbao'))
                    <div class="alert bg-success" style="color: white;">
                        <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                        <span class="">Well done!</span>  {{session('thongbao')}}
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Loại phòng</th>
                                <th style="width: 130px;">Chỉnh sửa</th>
                                <th style="width: 130px;">Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roomType as $key=>$item)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$item->type}}</td>
                                <td>
                                    <a href="admin/roomtype/edit/{{$item->id}}"><i class="fa fa-toggle-on"></i> Chỉnh sửa</a>
                                </td>
                                <td>
                                    <a href="admin/roomtype/del/{{$item->id}}"><i class="fa fa-ban"></i>Xóa</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
 <!-- /.container-fluid -->
@endsection