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

                    <form action="nguoidung" method="POST">
                        @csrf
                        <div>
                            <label>Họ Tên:</label>
                            <input type="text" class="form-control" placeholder="họ tên" name="name" value="">
                        </div>
                        <br>
                        <div>
                            <label>Email:</label>
                            <input type="email" class="form-control" placeholder="Email" name="email"  value="">
                        </div>
                        <br>
                        <div>
                            <label>Số điện thoại:</label>
                            <input type="phonenumber" class="form-control" placeholder="Số điện thoại" name="email"  value="">
                        </div>
                        <br>
                        <div>
                            <label>Ngày sinh:</label>
                            <input type="date" class="form-control" placeholder="ngày sinh" name="email"  value="">
                        </div>
                        <br>
                        <div>
                            <label>Giới tính:</label>
                            <br>
                            <select name="" id="">
                                <option value="">Nam</option>
                                <option value="">Nữ</option>
                            </select>
                        </div>
                        <br>
                        <br>
                        <div>
                            {{-- <input type="checkbox" name="changePassword" id="changePassword"> --}}
                            <label>Đặt lại mật khẩu:</label>
                            <input type="password" class="form-control password" name="password" >
                        </div>
                        <br>
                        <div>
                            <label>Nhập lại mật khẩu:</label>
                            <input type="password" class="form-control password" name="passwordAgain" >
                        </div>
                        <br>
                        <div>
                            <label>Avarta:</label>
                            <input type="file" class="form-control password" name="passwordAgain" >
                        </div>
                        <br>
                        <div>
                            <label>Thông tin cá nhân:</label>
                            <textarea class="form-control" name="" id="demo" cols="30" rows="10"></textarea>
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
