@extends('theme.layout.index')
@section('content')
 <!-- **** Breadcrumb Area Start **** -->
 <div class="breadcrumb-area bg-img bg-overlay-3 wow fadeInUp" data-wow-delay="200ms" style="background-image: url(theme/img/bg-img/30.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Đánh giá</li>
                        </ol>
                    </nav>
                    <h2 class="page-title">Thông tin tài khoản</h2>
                </div>
            </div>
        </div>
    </div>
 </div>
    <!-- **** Breadcrumb Area End **** -->
<br>
<br>
<br>

<!-- Page Content -->
<div class="container">
    <!-- slider -->
    <div class="row carousel-holder">
        <div class="col-md-3"></div>
        <div class="col-md-6" style="border: 1px solid #00800030;
        padding-top: 20px;
        margin-bottom: 55px;
        padding-bottom: 20px;">
        <div class="panel-heading" style="font-weight: bold;font-size: 23px;width: 570px;margin-left: -16px;background-color: #92c800;padding: 10px 0 6px 160px;margin-top: -20px;"> <h4 style=" color: white;">Thông tin tài khoản</h4> </div>
            <div class="panel panel-default" style="margin-top: 25px;">

                    <div class="panel-body">
                    @if(count($errors)>0)
                    <div class="alert bg-danger" style="color: white;">
                        <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                        <span class="text-semibold">Lỗi!</span><br>
                        @foreach($errors->all() as $err)
                        {{$err}}<br>
                        @endforeach
                    </div>
                    @endif
                    @if(session('thongbao'))
                    <div class="alert bg-success" style="color: white;">
                        <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                        <span class="text-semibold">Well done!</span>  {{session('thongbao')}}
                    </div>
                    @endif
                    <form action="modifyinfor/{{$user->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label>Họ Tên:</label>
                            <input type="text" class="form-control" placeholder="Họ tên" name="name" value="{{$user->name}}" required="">
                        </div>
                        <br>
                        <div>
                            <label>Email:</label>
                            <input type="email" readonly="" class="form-control" placeholder="Email" name="email"  value="{{$user->email}}">
                        </div>
                        <br>
                        <div>
                            <label>Số điện thoại:</label>
                            <input type="phonenumber" class="form-control" placeholder="Số điện thoại" name="phonenumber" value="{{$user->phonenumber}}" required="">
                        </div>
                        <div>
                            <label>Địa chỉ:</label>
                            <input type="text" class="form-control" placeholder="Địa chỉ" name="address" value="{{$user->phonenumber}}" required="">
                        </div>
                        <br>
                        <div>
                            <label>Ngày sinh:</label>
                            <input type="date" class="form-control" placeholder="Ngày sinh" name="birthday"  value="{{$user->birthday}}" required="">
                        </div>
                        <br>
                        <div>
                            <label>Giới tính:</label>
                            <br>
                            <select name="gender" id="" class="form-control">
                                <option value="1">Nam</option>
                                <option value="0">Nữ</option>
                            </select>
                        </div>
                        <br>
                        <br>
                        <div>
                            <input type="checkbox" id="changePassword" name="changePassword" >
                            <label>Đặt lại mật khẩu:</label>
                            <input type="password" class="form-control password" name="password" disabled="">
                        </div>
                        <br>
                        <div>
                            <label>Nhập lại mật khẩu:</label>
                            <input type="password" class="form-control password" name="repassword" disabled="">
                        </div>
                        <br>
                        <div>
                            <label>Avarta:</label>
                            <input type="file" class="form-control " name="avatar">
                        </div>
                        <br>
                        <div>
                            <label>Thông tin cá nhân:</label>
                            <textarea class="form-control" name="content" id="demo" cols="30" rows="10" required="" >{{$user->content}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-success" style=" margin-top: 20px; padding: 10px 40px;margin-left: 200px;">Sửa</button>
                    </form>
                    </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
    <!-- end slide -->
</div>
<!-- end Page Content -->
@endsection
@section('script')
    <script>
       $(document).ready(function(){
           $("#changePassword").change(function(){
                if($(this).is(":checked"))
                {
                    $(".password").removeAttr('disabled');
                }
                else{
                    $(".password").attr('disabled','');
                }
           });
       });
    </script>
@endsection