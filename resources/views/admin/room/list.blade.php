@extends('admin.layout.master')

@section('title')
  trang chủ
@endsection

@section('content')
 <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Danh sách các phòng ở ghép</h6>
            </div>
            <div class="card-body">
                <h6>Các Tài khoản được liệt kê tại đây. Dữ liệu đang cập nhật</h6>
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
                                <th>Tiêu đề</th>
                                <th>Loại phòng</th>
                                <th>Tình trạng</th>
                                <th>Chỉnh sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($room as $key=>$item)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>
                                    <a href="room/{{$item->id}}">{{$item->title}}</a>
                                </td>
                                <td>{{$item->roomType->type}}</td>
                                <td>
                                    @if($item->status == 0)
                                        <span style="background-color: #5cb85c;color: white;padding: .2em .6em .3em;font-size: 75%;font-weight: 700;line-height: 1;text-align: center;white-space: nowrap;vertical-align: baseline;border-radius: .25em;">Đã kiểm duyệt</span>
                                    @elseif($item->status == 1)
                                        <span style="background-color: #d9534f;color: white;padding: .2em .6em .3em;font-size: 75%;font-weight: 700;line-height: 1;text-align: center;white-space: nowrap;vertical-align: baseline;border-radius: .25em;">Chờ Phê Duyệt</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-bars" aria-hidden="true"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right" style="padding: 15px;">
                                        @if($item->status == 0)
                                            <li><a href="admin/room/unapprove/{{$item->id}}"><i class="fa fa-toggle-on"></i> Bỏ kiểm duyệt</a></li>
                                        @elseif($item->status == 1)
                                            <li><a href="admin/room/approve/{{$item->id}}"><i class="fa fa-toggle-on"></i> Kiểm duyệt</a></li>
                                        @endif
                                        
                                        <li style="margin-top: 15px;"><a href="admin/room/del/{{$item->id}}"><i class="fa fa-ban"></i> Xóa</a></li>
                                    </ul>
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