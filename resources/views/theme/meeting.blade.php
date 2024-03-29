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
                    <h2 class="page-title">Trang tạo lịch hẹn</h2>
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
        <div class="col-md-2"></div>
        <div class="col-md-8" style="border: 1px solid #00800030;
        padding-top: 20px;
        margin-bottom: 55px;
        padding-bottom: 20px;">
        <div class="panel-heading" style="font-weight: bold;font-size: 23px;width: 760px;margin-left: -16px;background-color: #92c800;padding: 10px 0 6px 255px;margin-top: -20px;">
            <h4 style=" color: white;">Đặt lịch hẹn gặp</h4>
        </div>
            <div class="panel panel-default" style="margin-top: 25px;">

                    <div class="panel-body">

                    <form action="nguoidung" method="POST">
                        @csrf
                        <div>
                            <label>Tiêu đề:</label>
                            <input type="text" class="form-control" placeholder="Tiêu đề" name="name" value="">
                        </div>
                        <br>
                        <div>
                            <label>Lịch hẹn gặp:</label>
                            <input type="datetime-local" class="form-control" placeholder="địa chỉ" name="email"  value="">
                        </div>
                        <br>
                        <div>
                            <label>Nội dung:</label>
                            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success" style=" margin-top: 20px; padding: 10px 40px;margin-left: 290px;">Gửi</button>
                    </form>
                    </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    <!-- end slide -->
</div>
<!-- end Page Content -->
@endsection
