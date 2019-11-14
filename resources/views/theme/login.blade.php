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
                    <h2 class="page-title">Đăng nhập</h2>
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
        <div class="panel-heading" style="font-weight: bold;font-size: 23px;width: 570px;margin-left: -16px;background-color: #92c800;padding: 10px 0 6px 160px;margin-top: -20px;"> <h4 style=" color: white;margin-left: 40px;">Đăng Nhập</h4> </div>
            <div class="panel panel-default" style="margin-top: 25px;">
                <div class="panel-body">
                        @if (count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $err)
                                {{$err}} <br>
                            @endforeach

                        </div>
                    @endif

                    @if (session('thongbao'))
                        <div class="alert alert-danger">
                                {{session('thongbao')}}
                        </div>
                    @endif
                <form action="login" method="POST">
                    @csrf
                    <div>
                        <label>Email:</label>
                        <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                    <br>
                    <div>
                        <label>Mật khẩu:</label>
                        <input type="password" class="form-control password" name="password" placeholder="Password">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success" style="margin-top: 20px;padding: 10px 40px;margin-left: 200px;background-color: #92c800;">Đăng Nhập</button>
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
