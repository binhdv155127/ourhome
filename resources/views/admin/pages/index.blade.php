@extends('admin.layout.master')

@section('title')
  trang chủ
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Chào mừng bạn đến với Trang quản trị Ourhome</h6>
    </div>
    <div class="card-body">
        <!-- Quick stats boxes -->
        <div class="row">
            <div class="col-lg-4">

                <!-- Members online -->
                <div class="panel bg-teal-400" style="background-color: #26A69A;border-color: #26A69A;color: #fff;    border-radius: 10px;">
                    <div class="panel-body" style="padding: 20px;">
                        <h3 class="no-margin">{{ $user->count() }}</h3>
                        Thành viên đăng ký
                        <div class=""> {{$userRoom->count()}} thành viên đăng bài</div>
                    </div>
                    <div class="container-fluid">
                        <div id="members-online"></div>
                    </div>
                </div>
                <!-- /members online -->

            </div>

            <div class="col-lg-4">

                <!-- Motelroom -->
                <div class="panel bg-pink-400" style="background-color: #EC407A;border-color: #26A69A;color: #fff;    border-radius: 10px;">
                    <div class="panel-body" style="padding: 20px;">
                        <h3 class="no-margin">{{$roomStatus->count()}}</h3>
                        Phòng trọ đã duyệt
                        <div class="">trên tổng số {{$room->count()}} phòng trọ đã đăng</div>
                    </div>

                    <div id="server-load"></div>
                </div>
                <!-- /current server load -->

            </div>

            <div class="col-lg-4">

                <!-- Today's report -->
                <a href="admin/room/list">
                    <div class="panel bg-blue-400" style="background-color: #29B6F6;border-color: #26A69A;color: #fff;    border-radius: 10px;">
                        <div class="panel-body" style="padding: 20px;">
                            <h3 class="no-margin">{{$room->count()-$roomStatus->count()}}</h3>
                            Bài đăng 
                            <div class="">đang chờ phê duyệt</div>
                        </div>
                        <div id="today-revenue"></div>
                    </div>
                </a>
                <!-- /today's revenue -->

            </div>
        </div>
        <!-- /quick stats boxes -->
    </div>
</div>
@endsection
