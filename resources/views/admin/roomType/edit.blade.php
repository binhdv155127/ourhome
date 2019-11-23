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
                <h6 class="m-0 font-weight-bold text-primary"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ / Quản lí loại phòng / Sửa</h6>
            </div>
            <div class="row" style="margin: 5px">
                <div class="col-lg-12">
                    <h5 style="background-color: #5cb8ab;color: white;padding: 0.7em .6em 0.7em;font-size: 140%;font-weight: 700;line-height: 1;text-align: center;white-space: nowrap;vertical-align: baseline;border-radius: .25em;">Sửa loại phòng</h5>
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
                    <form role="form" action="admin/roomtype/edit/{{$type->id}}" method="POST">
                        @csrf
                        <fieldset class="form-group">
                            <label>Loại phòng</label>
                            <input class="form-control" placeholder="Nhập loại phòng" value="{{$type->type}}" name="type">
                        </fieldset>
                        <button type="submit" class="btn btn-success">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div> 
    </div>
</div>
<!-- /.container-fluid -->
@endsection