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
                                <li class="breadcrumb-item active" aria-current="page">Cá nhân</li>
                            </ol>
                        </nav>
                        <h2 class="page-title">Thông tin cá nhân</h2>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- **** Breadcrumb Area End **** -->
    <br>
    <br>
    <br>

    <!-- **** Properties-area Start **** -->
    <div class="rehomes-properties-area" style="margin-bottom: 90px;">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-8">
                    <!-- Information Area -->
                    <div class="information-area mb-80 wow fadeInUp" data-wow-delay="200ms">
                        <h4 class="mb-30">Thông tin chi tiết</h4>
                        <!--Information Content -->
                        <div class="information-content">
                            <ul class="d-flex flex-wrap" style="padding-top: 10px;
                            padding-bottom: 10px; border-bottom: 1px solid #80808075">
                                <li><span>Họ và tên:</span> </li><li style=" margin-left: -60px;"><span>{{$person['0']['username']}}</span></li>
                            </ul>
                            <ul class="d-flex flex-wrap" style="padding-top: 10px;
                            padding-bottom: 10px; border-bottom: 1px solid #80808075">
                                <li><span>Đại chỉ</span> </li><li style=" margin-left: -60px;"><span>{{$person['0']['address']}}</span></li>
                            </ul>
                            <ul class="d-flex flex-wrap" style="padding-top: 10px;
                            padding-bottom: 10px; border-bottom: 1px solid #80808075" >
                                <li><span>số điện thoại</span> </li><li style=" margin-left: -60px;"><span>{{$person['0']['phonenumber']}}</span></li>
                            </ul>
                            <ul class="d-flex flex-wrap" style="padding-top: 10px;
                            padding-bottom: 10px; border-bottom: 1px solid #80808075" >
                                <li><span>Email</span></li><li style=" margin-left: -60px;"> <span>{{$person['0']['email']}}</span></li>
                            </ul>
                            <ul class="d-flex flex-wrap" style="padding-top: 10px;
                            padding-bottom: 10px; border-bottom: 1px solid #80808075" >
                                <li><span>Ngày sinh</span> </li><li style=" margin-left: -60px;"><span>{{$person['0']['birthday']}}</span></li>
                            </ul>
                            <ul class="d-flex flex-wrap" style="padding-top: 10px;
                            padding-bottom: 10px; border-bottom: 1px solid #80808075" >
                                <li><span>Giới tính</span> </li><li style=" margin-left: -60px;">
                                    <span>
                                            <?php if($person['0']['gender'] == 1){
                                                echo "Nam";
                                            }else { echo "Nữ" ;} ?>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mo ta -->
                    <div class="floor-thumb-content mb-80 wow fadeInUp" data-wow-delay="200ms">
                        <h4 class="mb-30">Mô tả</h4>
                        <!-- Floor Thumb -->
                        <div class="floor-thumb">
                            {{$person['0']['content']}}
                        </div>
                    </div>

                    <!-- Leave A Reply -->

                </div>

                <!-- Sidebar Area -->
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="rehomes-property-sidebar-area">

                        <!-- Property Search Form -->
                        <div class="property-search-form-area mb-80 wow fadeInUp" data-wow-delay="200ms">
                            <form action="#" method="get">
                                <div class="row">
                                    <div class="col-12">
                                        <a href="modifyinfor/{{$person['0']['id']}}">
                                            <button type="button" class="btn rehomes-btn mt-15 w-100" style="margin-top: 65px;">Sửa thông tin cá nhân</button>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- **** Properties-area End **** -->
        <!-- **** comment **** -->
        <div class="rehomes-news-area blog-details">
            <div class="container">
                <div class="blog-details-area">
                    <div class="row justify-content-between">
                        <div class="col-12">
                            <!-- Comment Area Start -->
                            <div class="comment-area wow fadeInUp" data-wow-delay="200ms">
                                <!-- Comments Area -->
                                <div class="comment_area clearfix">
                                    <!--Danh gia-->
                                    <div class="floor-thumb-content mb-80 wow fadeInUp" data-wow-delay="200ms">
                                        <h4 class="mb-30">Tin của bạn
                                            {{-- <i class="fa fa-star" aria-hidden="true" style="margin-left: 100px;color: #ffc107;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffc107;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffc107;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffc107;"></i>
                                            <i class="fa fa-star-o" aria-hidden="true" ></i> --}}
                                        </h4>
                                    </div>

                                    <ol>
                                        <!-- Single Comment Area -->
                                        <!-- Leave A Reply -->
                                        <div class="rehomes-comment-form mb-80 wow fadeInUp" data-wow-delay="200ms">
                                            <!-- Form -->
                                                <div class="row">

                                                    <div class="col-12">
                                                        @foreach ($rooms as $key=>$item)
                                                            <div class="newp" style="margin-bottom: 30px;border: 1px solid #80808061;height: 174px;padding: 10px;border-radius: 10px;">
                                                                <div class="anh property-thumb" style=" float: left;">
                                                                    <img src="theme/img/bg-img/{{ $item->photo[0]['name'] }}.jpg" alt="" style="height: 150px;">
                                                                </div>
                                                                <div class="content" style="margin-left: 260px;width: 570px;">
                                                                    <a href="room/{{$item->id}}">
                                                                        <h5>{{ $item->title }}</h5>
                                                                    </a>
                                                                    <P>Người đăng: {{$item->user->username}}</P>
                                                                    <p>Giá : {{ number_format($item->price) }} VND</p>
                                                                    <p>Đánh giá :
                                                                        <i class="fa fa-star" aria-hidden="true" style="color: #ffc107;"></i>
                                                                        <i class="fa fa-star" aria-hidden="true" style="color: #ffc107;"></i>
                                                                        <i class="fa fa-star" aria-hidden="true" style="color: #ffc107;"></i>
                                                                        <i class="fa fa-star" aria-hidden="true" style="color: #ffc107;"></i>
                                                                        <i class="fa fa-star-o" aria-hidden="true" ></i>
                                                                    </p>
                                                                </div>
                                                                <div class="quantam" style="margin-left: 750px;margin-top: -100px;">
                                                                <p class="btn btn-success" style="padding: 13px;" id="qt{{$key}}" >Người quan tâm tin</p>
                                                                </div>
                                                            </div>

                                                        <div class="rehomes-comment-form mb-80 wow fadeInUp ngqt" data-wow-delay="200ms" id="ngqt{{$key}}">
                                                            <h5 class="mb-30">Những người quan tâm tin "{{ $item->title }}"</h5>
                                                            <!-- Form -->
                                                            <div class="#">
                                                                <div class="row">
                                                                    @foreach ($item->users as $user)
                                                                    <!-- Single Agent Area -->
                                                                        <div class="col-12 col-md-4 col-lg-4">
                                                                        <div class="single-agent-area wow fadeInUp" data-wow-delay="200ms">
                                                                            <!-- Agent Thumb -->
                                                                            <div class="single-agent-thumb">
                                                                                <img src="theme/img/bg-img/49.jpg" alt="">
                                                                            </div>
                                                                            <!-- Agent Info -->
                                                                            <div class="agent-info"style="background: #faebd7ad;">
                                                                                <a href="#">{{ $user->name }}</a>
                                                                                <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> Giới tính: {{ $user->gender ? config('ourhome.gender')[$user->gender] : '' }} </p>
                                                                                <p><i class="fa fa-address-book" aria-hidden="true"></i> Tuổi: {{ $user->birthday ? substr($user->birthday, strlen($user->birthday), -4): '' }}</p>
                                                                                <p><i class="fa fa-skype" aria-hidden="true"></i> binhabc.sd</p>
                                                                            </div>
                                                                            <!-- Agent Social Info -->
                                                                            <div class="agent-social-info d-flex"style="background: #00000040;height: 55px;">
                                                                                <a href="user/meeting/{{ $item->id }}">
                                                                                    <p class="btn btn-success" style="width: 140px;border-radius: inherit;height: 55px;padding-top: 16px;"> Chấp nhận</p>
                                                                                </a>

                                                                                <button class="btn btn-danger" style="margin-left: 77px;width: 176px;border-radius: inherit;" data-toggle="modal" data-target="#myModal">Muốn kết nối với bạn</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    </div>

                                                </div>
                                        </div>
                                    </ol>
                                </div>

                                <!-- Comments Area -->
                                <div class="comment_area clearfix">
                                    <!--Danh gia-->
                                    <div class="floor-thumb-content mb-80 wow fadeInUp" data-wow-delay="200ms">
                                        <h4 class="mb-30">Đánh giá
                                            <i style="font-size: 17px;color: gray;margin-left: 45px;">Sao trung bình:</i>
                                            <i>4.6</i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffc107;"></i>
                                            <a href="rate/{{$person['0']['id']}}">
                                                <button class="btn btn-success" style="margin-left: 425px;">Xem tất cả đánh giá</button>
                                            </a>
                                        </h4>
                                    </div>
                                    <ol>
                                        <!-- Single Comment Area -->
                                        <li class="single_comment_area">
                                            <!-- Comment Content -->
                                            <div class="comment-content d-flex">
                                                <!-- Comment Author -->
                                                <div class="comment-author">
                                                    <img src="theme/img/bg-img/61.jpg" alt="author">
                                                </div>
                                                <!-- Comment Meta -->
                                                <div class="comment-meta">
                                                    <a href="#" class="post-date">Dec 19, 2019</a>
                                                    <h5>Hoàng
                                                            <i class="fa fa-star" aria-hidden="true" style="margin-left: 30px;color: #ffc107;"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffc107;"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffc107;"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffc107;"></i>
                                                            <i class="fa fa-star-o" aria-hidden="true" ></i>
                                                    </h5>
                                                    <p>
                                                        phòng sạch thoáng mát, bạn chủ khá ngăn nắp, dễ thương, mình thấy phòng rất đầy đủ tiện nghi
                                                        mùa đông khá ấm áp, anh ninh thì siêu tốt luôn
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Single Comment Area -->
                                        <li class="single_comment_area">
                                            <!-- Comment Content -->
                                            <div class="comment-content d-flex">
                                                <!-- Comment Author -->
                                                <div class="comment-author">
                                                    <img src="theme/img/bg-img/61.jpg" alt="author">
                                                </div>
                                                <!-- Comment Meta -->
                                                <div class="comment-meta">
                                                    <a href="#" class="post-date">Dec 19, 2019</a>
                                                    <h5>Hoàng
                                                            <i class="fa fa-star" aria-hidden="true" style="margin-left: 30px;color: #ffc107;"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffc107;"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffc107;"></i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffc107;"></i>
                                                            <i class="fa fa-star-o" aria-hidden="true" ></i>
                                                    </h5>
                                                    <p>
                                                        phòng sạch thoáng mát, bạn chủ khá ngăn nắp, dễ thương, mình thấy phòng rất đầy đủ tiện nghi
                                                        mùa đông khá ấm áp, anh ninh thì siêu tốt luôn
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- **** comment **** -->


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Bạn có muốn trao đổi thông tin?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="container">
            <i class="fa fa-facebook-square face" aria-hidden="true" style="font-size: 80px;color: #2700ffb0;margin-left: 156px;" data-toggle="modal" data-target="#myModal1" data-dismiss="modal"></i>
            <img src="theme/img/core-img/zalo.png" class="zalo" alt="" style="height: 80px;margin-left: 5px;margin-top: -50px; " data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
        </div>
        <div class="modal-footer">
        {{-- <a href="https://www.facebook.com/messages/t/ho.tung.90226">
            <button type="button" class="btn btn-secondary"  style="width: 140px;">Trao đổi</button>
        </a> --}}

            <button type="button" class="btn btn-primary" style="width: 140px;margin-right: 35%;" data-dismiss="modal">Đóng</button>
        </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script>
         $(document).ready(function(){

            $("#qt0").click(function(){
            $( "#ngqt0").slideToggle("slow");
            });

            $("#qt1").click(function(){
                $( "#ngqt1").slideToggle("slow");
            });
         });
    </script>
@endsection
