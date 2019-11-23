@extends('admin.layout.master')

@section('title')
  trang chủ
@endsection

@section('content')
 <!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ / Danh sách thành viên / Trang Chỉnh sửa thông tin thành viên</h6>
            </div>
            <div class="row" style="margin: 5px">
                <div class="col-lg-12">
                    <h5 style="background-color: #5cb8ab;color: white;padding: 0.7em .6em 0.7em;font-size: 140%;font-weight: 700;line-height: 1;text-align: center;white-space: nowrap;vertical-align: baseline;border-radius: .25em;">Chỉnh sửa Tài Khoản</h5>
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
                    <form role="form" action="{{ route('admin.user.edit', ['id'=> $user->id])}}" method="POST">
                        @csrf
                        <fieldset class="form-group">
                            <label>Email:</label>
                            <input class="form-control" value="{{$user->email}}" readonly name="email">
                        </fieldset>
                        <fieldset class="form-group">
                            <label>Số điện thoại:</label>
                            <input class="form-control" value="{{$user->phonenumber}}" readonly name="phonenumber">
                        </fieldset>
                        <fieldset class="form-group">
                            <label>Họ tên:</label>
                            <input class="form-control" placeholder="Enter text" value="{{$user->name}}" name="name">
                        </fieldset>
                        <fieldset class="form-group">
                            <input type="checkbox" id="changePassword" name="changePassword" >
                            <label>Mật khẩu:</label>
                            <input class="form-control password" placeholder="Nhập mật khẩu" type="password" disabled="" name="password">
                        </fieldset>
                        <fieldset class="form-group">
                            <label>Nhập lại mật khẩu:</label>
                            <input class="form-control password" placeholder="Nhập lại mật khẩu" type="password" disabled="" name="repassword">
                        </fieldset>
                        <div class="form-group">
                            <label>Chọn quyền:</label>
                            <select class="form-control" name="auth">
                                <option @if($user->auth == 1)
                                                selected=""
                                                @endif
                                                value="1">Quản trị viên</option>
                                <option @if($user->auth == 0)
                                                selected=""
                                                @endif
                                                value="0">Người dùng</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Chọn quyền:</label>
                            <select class="form-control" name="deleted_at">
                                <option @if($user->deleted_at == 0)
                                                selected=""
                                                @endif
                                                value="0">Kích hoạt</option>
                                <option @if($user->deleted_at == 1)
                                                selected=""
                                                @endif
                                                value="1">Tạm khóa</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Chỉnh sửa</button>
                    </form>
                </div>
            </div>
        </div> 
    </div>
</div>
<!-- /.container-fluid -->
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