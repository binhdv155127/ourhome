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
                    <h2 class="page-title">Trang đăng tin</h2>
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
             <h4 style=" color: white;">Đăng tin Phòng trọ</h4>
        </div>
            <div class="panel panel-default" style="margin-top: 25px;">

                    <div class="panel-body">

                    <form action="nguoidung" method="POST">
                        @csrf
                        <div>
                            <label>Tiêu đề bài đăng:</label>
                            <input type="text" class="form-control" placeholder="Tiêu đề" name="name" value="">
                        </div>
                        <br>
                        <div>
                            <label>Địa chỉ phòng trọ:</label>
                            <input type="text" class="form-control" placeholder="địa chỉ" name="email"  value="">
                        </div>
                        <br>
                        <div>
                            <div class="search-location-area mb-80 wow fadeInUp" data-wow-delay="200ms">
                                    <label>Map:</label>
                                <!-- Location Maps -->
                                <div class="loction-map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19892.026971487212!2d-0.19247374135275525!3d51.4489138369289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2sbd!4v1551753138954" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div>
                            <label>Giá:</label>
                            <input type="number" class="form-control" placeholder="Giá phòng" name="email"  value="">
                        </div>
                        <br>
                        <div>
                            <label>Diện tích:</label>
                            <input type="number" class="form-control" placeholder="Diện tích" name="email"  value="">
                        </div>
                        <br>
                        <div>
                            <label>Số lượng người ở:</label>
                            <br>
                            <select name="" id="">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                                <option value="">4</option>
                            </select>
                        </div>
                        <br>
                        <br>
                        <div>
                            <label>Loại phòng:</label>
                            <br>
                            <select name="" id="">
                                <option value="">CCMN</option>
                                <option value="">Nhà riêng</option>
                            </select>
                        </div>
                        <br>
                        <br>
                        <div>
                            <label>Quận:</label>
                            <br>
                            <select name="" id="">
                                <option value="">Quận Hai Bà Trưng</option>
                                <option value="">Quận Đống Đa</option>
                            </select>
                        </div>
                        <br>
                        <br>
                        <div>
                            <label>Phố:</label>
                            <br>
                            <select name="" id="">
                                <option value="">Bách Khoa</option>
                                <option value="">Đại Cồ Việt</option>
                            </select>
                        </div>
                        <br>
                        <br>
                        <div>
                            <label>Ảnh phòng</label>
                            <input type="file" class="form-control password" name="passwordAgain" >
                        </div>
                        <br>
                        <div>
                            <label>Mô tả:</label>
                            <textarea class="form-control" name="" id="demo" cols="30" rows="10"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success" style=" margin-top: 20px; padding: 10px 40px;margin-left: 290px;">Đăng tin</button>
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
