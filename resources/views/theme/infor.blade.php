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
                                <li><span>Họ và tên:</span> </li><li style=" margin-left: -60px;"><span>{{$person['0']['name']}}</span></li>
                            </ul>
                            <ul class="d-flex flex-wrap" style="padding-top: 10px;
                            padding-bottom: 10px; border-bottom: 1px solid #80808075">
                                <li><span>Địa chỉ</span> </li><li style=" margin-left: -60px;"><span>{{$person['0']['address']}}</span></li>
                            </ul>
                            @if(Auth::user())
                            @if(Auth::user()->id == $person['0']['id'])
                            <ul class="d-flex flex-wrap" style="padding-top: 10px;
                            padding-bottom: 10px; border-bottom: 1px solid #80808075" >
                                <li><span>Số điện thoại</span> </li><li style=" margin-left: -60px;"><span>{{$person['0']['phonenumber']}}</span></li>
                            </ul>
                            <ul class="d-flex flex-wrap" style="padding-top: 10px;
                            padding-bottom: 10px; border-bottom: 1px solid #80808075" >
                                <li><span>Email</span></li><li style=" margin-left: -60px;"> <span>{{$person['0']['email']}}</span></li>
                            </ul>
                            @endif
                            @endif
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
                            {!!$person['0']['content']!!}
                        </div>
                    </div>

                    <!-- Leave A Reply -->

                </div>

                <!-- Sidebar Area -->
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="rehomes-property-sidebar-area">
                        <!-- Property Search Form -->
                        @if(Auth::user())
                           @if(Auth::user()->id == $person['0']['id'])
                           <div class="property-search-form-area mb-80 wow fadeInUp" data-wow-delay="200ms">
                            <form action="#" method="get">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- /{{$person['0']['slugs']}}.html -->
                                        <a href="modifyinfor/{{$person['0']['id']}}">
                                            <button type="button" class="btn rehomes-btn mt-15 w-100" style="margin-top: 65px;">Cập nhật thông tin</button>
                                        </a>
                                    </div>
                                </div>
                            </form>
                            </div>
                        @endif
                        @endif
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
                                                                    <img src="theme/img/bg-img/{{ $item->photo[0]['name'] }}" alt="" style="height: 150px;">
                                                                </div>
                                                                <div class="content" style="margin-left: 260px;width: 570px;">
                                                                    <a href="room/{{$item->id}}/{{$item->slugs}}.html">
                                                                        <h5 style="white-space: nowrap;
                                                              overflow: hidden;
                                                              text-overflow: Ellipsis;
                                                              max-width: 500px;">{{ $item->title }}</h5>
                                                                    </a>
                                                                    <P>Người đăng: {{$item->user->name}}</P>
                                                                    <p>Giá : {{ number_format($item->price) }} VND</p>
                                                                    <p style="white-space: nowrap;
                                                              overflow: hidden;
                                                              text-overflow: Ellipsis;
                                                              max-width: 500px;">Địa chỉ: {{$item->user->address}}
                                                                    </p>
                                                                </div>
                                                                @if(Auth::user())
                                                                @if(Auth::user()->id == $item->user->id)
                                                                @if($item->accept == 1)
                                                                <div class="quantam" style="margin-left: 750px;margin-top: -100px;">
                                                                <p class="btn btn-success" style="padding: 13px;margin-left: 30px;" id="qt{{$key}}" >Người quan tâm tin</p>
                                                                </div>
                                                                @else
                                                                <div class="quantam" style="margin-left: 750px;margin-top: -100px;">
                                                                <p class="btn btn-danger" style="padding: 13px;margin-left: 30px;    width: 159px;"  >Chờ kiểm duyệt</p>
                                                                </div>
                                                                @endif
                                                                @endif
                                                                @endif
                                                            </div>

                                                        <div class="rehomes-comment-form mb-80 wow fadeInUp ngqt" data-wow-delay="200ms" id="ngqt{{$key}}">
                                                            <h5 class="mb-30">Những người quan tâm tin "{{ $item->title }}"</h5>
                                                            <!-- Form -->
                                                            <div class="#">
                                                                <div class="row">
                                                                    @foreach ($item->users1 as $user)
                                                                    <!-- Single Agent Area -->
                                                                        <div class="col-12 col-md-4 col-lg-4">
                                                                        <div class="single-agent-area wow fadeInUp" data-wow-delay="200ms">
                                                                            <!-- Agent Thumb -->
                                                                            <div class="single-agent-thumb" style="height: 215px !important;">
                                                                                <img src="theme/img/bg-img/{{$user->avatar}}" alt="">
                                                                            </div>
                                                                            <!-- Agent Info -->
                                                                            <div class="agent-info"style="background: #faebd747;">
                                                                                <a href="person/{{$user->id}}/{{$user->slugs}}.html">{{ $user->name }}</a>
                                                                                <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> Giới tính: @if($user->gender == 1) nam @else nữ @endif</p>
                                                                                <p><i class="fa fa-address-book" aria-hidden="true"></i> Ngày sinh:{{ $user->birthday }} </p>
                                                                                <p><i class="fa fa-skype" aria-hidden="true"></i>Địa Chỉ: {{ $user->address }}</p>
                                                                                @if($user->pivot->status == 1)
                                                                                <a href="https://zalo.me/0902599087" class="label label-warning" style="background-color: #337ab7; display: inline;padding: .2em .6em .3em;font-size: 80%;font-weight: 700;line-height: 1;color: #fff;text-align: center;white-space: nowrap;vertical-align: baseline;border-radius: .25em;">
                                                                                    Muốn liên lạc với bạn nhấn click vào đây
                                                                                </a>
                                                                                @endif
                                                                            </div>
                                                                            <!-- Agent Social Info -->
                                                                            <div class="agent-social-info d-flex"style="background: #00000040;height: 55px;    justify-content: center;">
                                                                            @if ($user->pivot->status == 2)
                                                                                 <form action="roomused/rent/{{$user->id}}" method="POST" style="width: -webkit-fill-available;">
                                                                                    @csrf
                                                                                   <input type="hidden" name="id_user" value="{{$user->id}}">
                                                                                   <input type="hidden" name="id_room" value="{{$item->id}}">
                                                                                   <button class="btn btn-warning" style="width: 140px;border-radius: inherit;height: -webkit-fill-available;    width: -webkit-fill-available;"> Cho thuê</button>
                                                                                </form>
                                                                            @elseif ($user->pivot->status == 3)
                                                                                <button class="btn btn-danger" style="width: 140px;border-radius: inherit;width: -webkit-fill-available;">Đã cho thuê</button>
                                                                            @else
                                                                                <form action="roomused/{{$user->id}}" method="POST" style="width: -webkit-fill-available;">
                                                                                    @csrf
                                                                                   <input type="hidden" name="id_user" value="{{$user->id}}">
                                                                                   <input type="hidden" name="id_room" value="{{$item->id}}">
                                                                                   <button class="btn btn-success" style="width: 140px;border-radius: inherit;height: -webkit-fill-available;    width: -webkit-fill-available;"> Chấp nhận</button>
                                                                                </form>
                                                                            @endif
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
                                            <i>{{ $avgPoint }}</i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffc107;"></i>
                                            <a href="rate/{{$person['0']['id']}}">
                                                <button class="btn btn-success" style="margin-left: 440px">Xem tất cả đánh giá</button>
                                            </a>
                                        </h4>
                                    </div>
                                    @if ($avgPoint != 0)
                                        <ol>
                                            @foreach ($rates as $rate)
                                                @foreach ($rate->userRate as $userRate)
                                                <!-- Single Comment Area -->
                                                    <li class="single_comment_area">
                                                    <!-- Comment Content -->
                                                    <div class="comment-content d-flex">
                                                        <!-- Comment Author -->
                                                        <div class="comment-author">
                                                            <img src="{{ 'theme/img/bg-img/'.$getUserNames[$rate->id_user]['avatar']}}" alt="author">
                                                        </div>
                                                        <!-- Comment Meta -->
                                                        <div class="comment-meta">
                                                            <a href="#" class="post-date">{{ $userRate->comment_date }}</a>
                                                            <h5> {{ $getUserNames[$rate->id_user]['name'] }}
                                                                <i style="margin-left: 30px">{{ $userRate->point }}</i><i class="fa fa-star" aria-hidden="true" style="color: #ffc107;"></i>
                                                            </h5>
                                                            <p>
                                                                {{ $userRate->content }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endforeach
                                            @endforeach
                                        </ol>
                                        @else
                                            <div class="text-center">Không có đánh giá nào</div>
                                        @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- **** comment **** -->

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
            $("#qt2").click(function(){
                $( "#ngqt2").slideToggle("slow");
            });
            $("#qt3").click(function(){
                $( "#ngqt3").slideToggle("slow");
            });
            $("#qt4").click(function(){
                $( "#ngqt4").slideToggle("slow");
            });
            $("#qt5").click(function(){
                $( "#ngqt5").slideToggle("slow");
            });
            $("#qt5").click(function(){
                $( "#ngqt6").slideToggle("slow");
            });
         });
    </script>
@endsection
