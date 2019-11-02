@extends('theme.layout.index')
@section('content')
     <!-- Page Content -->
     <div class="container">

            <!-- slider -->
            <div class="row carousel-holder">
                <div class="col-md-4"></div>
                <div class="col-md-4" style="border: 1px solid green;
                padding-top: 20px;
                margin-top: 55px;
                margin-bottom: 55px;
                padding-bottom: 20px;">
                    <div class="panel panel-default">
                          <div class="panel-heading" style="padding-bottom: 20px;
                          color: red;
                          font-weight: bold;
                          margin-left: 65px;
                          font-size: 23px;">Thông tin tài khoản</div>
                          <div class="panel-body">

                            <form action="nguoidung" method="POST">
                                @csrf
                                <div>
                                    <label>Ho Tên</label>
                                    <input type="text" class="form-control" placeholder="họ tên" name="name" value=""
                                    >
                                </div>
                                <br>
                                <div>
                                    <label>Email</label>
                                      <input type="email" class="form-control" placeholder="Email" name="email"  value=""
                                      >
                                </div>
                                <br>
                                <div>
                                    <input type="checkbox" name="changePassword" id="changePassword">
                                    <label>đặt lại Mật khẩu</label>
                                      <input type="password" class="form-control password" name="password" >
                                </div>
                                <br>
                                <div>
                                    <label>Nhập Lại Mật khẩu</label>
                                    <input type="password" class="form-control password" name="passwordAgain" >
                                </div>
                                <br>
                                <div>
                                    <label>Thông tin cá nhân</label>
                                    <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                                </div>
                                <button type="submit" class="btn btn-default">Sửa
                                </button>
                            </form>
                          </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
            <!-- end slide -->
        </div>
        <!-- end Page Content -->
@endsection
