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
                            <li class="breadcrumb-item active" aria-current="page">About</li>
                        </ol>
                    </nav>
                    <h2 class="page-title">Chi tiết phòng</h2>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- **** Breadcrumb Area End **** -->

    <div class="titleheader" style="padding: 50px;">
    <h2>{{$detail->title}}</h2>
        <hr style="display: inline-block;
        width: 100px;
        border: 0;
        border-top: 2px solid #eb3751;
        margin-top: 0;
        margin-bottom: 0;">
    </div>


    <!-- **** Properties Hero Area Start **** -->
        <div class="properties-hero-area d-flex flex-wrap align-items-center mb-80" style="padding: 50px;">
            <div class="properties-slide">
                <!-- Properties Slider -->
                <div id="property-thumb-silde" class="carousel slide wow fadeInUp" data-wow-delay="200ms" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#property-thumb-silde" data-slide-to="0" class="active" style="background-image: url(theme/img/bg-img/{{$photos->name}});"></li>
                        @foreach ($photos1 as $key=>$item)
                          @if ($key>0)
                          <li data-target="#property-thumb-silde" data-slide-to="$key" style="background-image: url(theme/img/bg-img/{{$item->name}});"></li>
                          @endif
                        @endforeach
                    </ol>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="theme/img/bg-img/{{$photos->name}}" class="d-block w-100" alt="...">
                        </div>
                        @foreach ($photos1 as $key=>$item)
                          @if ($key>0)
                          <div class="carousel-item">
                                <img src="theme/img/bg-img/{{$item->name}}" class="d-block w-100" alt="...">
                            </div>
                          @endif
                        @endforeach

                    </div>
                </div>
            </div>

            <!-- Properties Content Area -->
            <div class="properties-content-area wow fadeInUp" data-wow-delay="200ms">
                <div class="properties-content-info">
                <h2>Ở ghép {{$detail->roomType->type}}</h2>
                    <div class="properties-location">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i> {{$detail->area}}</p>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> {{$detail->roomType->type}}</p>
                    </div>
                    <h4 class="properties-rate">{{number_format($detail->price)}} VND <span>/ tháng</span></h4>
                    <p>GẦN SIÊU THỊ , CHỢ - QUÁN ĂN TRONG BÁN KÍNH 100M</p>
                    <!-- Properties Info -->
                    <div class="properties-info">
                        <p>diện tích: <span>{{$detail->acreage}} m2</span></p>
                        <p>loại phòng: <span>{{$detail->roomType->type}}</span></p>
                        <p>số người: <span>{{$detail->numberpeople}}</span></p>
                    </div>
                    <div class="properties-info" style="margin-top: 40px">
                        <p style="color: red">người đăng:&nbsp;<a href="person/{{$detail->id_user}}/{{$detail->slugs}}.html"><span>{{$detail->user->name}}</span></a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- **** Properties Hero Area End **** -->

         <!-- **** Properties-area Start **** -->
    <div class="rehomes-properties-area">
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
                                    <li><span>Giá:</span> </li> <li style=" margin-left: -60px;"><span>{{number_format($detail->price)}} VND / tháng</span></li>
                                </ul>
                                <ul class="d-flex flex-wrap" style="padding-top: 10px;
                                padding-bottom: 10px; border-bottom: 1px solid #80808075">
                                    <li><span>Số người:</span> </li><li style=" margin-left: -60px;"><span>{{$detail->numberpeople}}</span></li>
                                </ul>
                                <ul class="d-flex flex-wrap" style="padding-top: 10px;
                                padding-bottom: 10px; border-bottom: 1px solid #80808075">
                                    <li><span>Diện tích:</span> </li><li style=" margin-left: -60px;"><span>{{$detail->acreage}} m2</span></li>
                                </ul>
                                <ul class="d-flex flex-wrap" style="padding-top: 10px;
                                padding-bottom: 10px; border-bottom: 1px solid #80808075" >
                                    <li><span>Loại phòng:</span> </li><li style=" margin-left: -60px;"><span>{{$detail->roomType->type}}</span></li>
                                </ul>
                                @foreach ($detail->service as $item)
                                    <ul class="d-flex flex-wrap" style="padding-top: 10px;
                                    padding-bottom: 10px; border-bottom: 1px solid #80808075" >
                                        <li><span>Dịch vụ:</span></li><li style=" margin-left: -60px;"> <span>{{$item->service}}</span></li>
                                    </ul>
                                @endforeach
                                <ul class="d-flex flex-wrap" style="padding-top: 10px;
                                padding-bottom: 10px; border-bottom: 1px solid #80808075" >
                                    <li><span>Tình trạng:</span> </li><li style=" margin-left: -60px;">
                                        <span>
                                            <?php if($detail->status == 1){
                                                echo "Đã cho thuê";
                                            }else { echo "Chưa cho thuê" ;} ?>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                       <!-- Floor Thumb Content -->
                        <div class="floor-thumb-content mb-80 wow fadeInUp" data-wow-delay="200ms">
                            <h4 class="mb-30">Mô tả</h4>

                            <!-- Floor Thumb -->
                            <div class="floor-thumb">
                                {!!$detail->discription!!}
                            </div>
                        </div>
                        <!-- Search Location Area -->
                        <div class="search-location-area mb-80 wow fadeInUp" data-wow-delay="200ms">
                            <h4 class="mb-30">Chỉ dẫn</h4>
                            <!-- Location Maps -->
                            <div class="loction-map" id="map-detail">
                                {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19892.026971487212!2d-0.19247374135275525!3d51.4489138369289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2sbd!4v1551753138954" allowfullscreen></iframe> --}}
                            </div>
                        </div>

                        <!-- **** comment **** -->
                        <div class="rehomes-news-area blog-details" style="top: 0;">
                            <div class="container" style="padding: 0;">
                                <div class="blog-details-area">
                                    <div class="row justify-content-between">
                                        <div class="col-12">
                                            <!-- Comment Area Start -->
                                            <div class="comment-area wow fadeInUp" data-wow-delay="200ms">
                                                <!-- Comments Area -->
                                                <div class="comment_area clearfix">
                                                    <!--Danh gia-->
                                                    <div class="floor-thumb-content mb-80 wow fadeInUp" data-wow-delay="200ms">
                                                        <h4 class="mb-30">Đánh giá
                                                            <i style="font-size: 14px;color: gray;margin-left: 30px;">Sao trung bình:</i>
                                                            <i>{{ $avgPoint }}</i>
                                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffc107 !important;"></i>
                                                            @if(count($checkRateRoom)>0)
                                                            @if(count($checkRateRoom2)==0)

                                                                <button class="btn btn-success" style="margin-left: 497px;margin-top: -85px;" id="rate">Thêm đánh giá</button>
                                                            @endif
                                                            @endif
                                                        </h4>
                                                    </div>
                                                    <!-- Leave A Reply -->
                                                    <div class="rehomes-contact-form mt-50 mb-5 mb-lg-0 wow fadeInUp" data-wow-delay="200ms" style="visibility: visible;animation-delay: 200ms;animation-name: fadeInUp;border: 1px solid gainsboro;border-radius: 10px;margin-top: -75px;padding: 20px;" id="forrate">
                                                        <h5 class="mb-30">Gửi đánh giá</h5>
                                                        <form action="rate/room" method="post">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <p>Chọn đánh giá của bạn:   
                                                                    </p>
                                                                    <div align="center" style="color:white;margin-top: -45px;">
                                                                        <i class="fa fa-star fa-2x" data-index="1"></i>
                                                                        <i class="fa fa-star fa-2x" data-index="2"></i>
                                                                        <i class="fa fa-star fa-2x" data-index="3"></i>
                                                                        <i class="fa fa-star fa-2x" data-index="4"></i>
                                                                        <i class="fa fa-star fa-2x" data-index="5"></i>
                                                                        <br><br>
                                                                    </div>
                                                                    <input type="hidden" name="id_room" value="{{$detail->id}}" class="id_room">
                                                                    <input type="hidden" name="point" id="rate1">
                                                                    <input type="text" name="content" class="form-control mb-30 content" placeholder="Nhập đánh giá về người cho ở ghép">
                                                                    <button type="submit" id="rate" class="btn rehomes-btn mt-15 rate">Gửi đánh giá</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    @if ($avgPoint != 0)
                                                        <ol style="margin-top: 25px;">
                                                            @foreach ($rates as $rate)
                                                                @foreach ($rate->roomRate as $roomRate)
                                                                <!-- Single Comment Area -->
                                                                <li class="single_comment_area">
                                                                    <!-- Comment Content -->
                                                                    <div class="comment-content d-flex">
                                                                        <!-- Comment Author -->
                                                                        <div class="comment-author">
                                                                            <img src="{{ 'theme/img/bg-img/' . $getUserNames[$rate->id_user]['avatar']  }}" alt="author">
                                                                        </div>
                                                                        <!-- Comment Meta -->
                                                                        <div class="comment-meta">
                                                                            <a href="#" class="'post-date">{{ $roomRate->comment_date }}</a>
                                                                            <h5>
                                                                                {{ $getUserNames[$rate->id_user]['name'] }}
                                                                                <i style="margin-left: 30px;">{{ $roomRate->point }}</i><i class="fa fa-star" aria-hidden="true" style="color: #ffc107;"></i>
                                                                            </h5>
                                                                            <p>
                                                                                <p>{{ $roomRate->content }}</p>
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
                                                    <a href="rateroom/{{$detail->id}}" style="color: blue;margin-left: 450px;">
                                                        <i class="fa fa-angle-double-right"></i>
                                                        <i class="fa fa-angle-double-right"></i>
                                                        Xem tất cả đánh giá
                                                    </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- **** comment **** -->

                        <!-- Leave A Reply -->
                        <div class="rehomes-comment-form mb-80 wow fadeInUp" data-wow-delay="200ms" style="margin-top:30px">
                            <h4 class="mb-30">Liên quan</h4>

                            <!-- Form -->
                            <form class="#" method="post">
                                <div class="row">
                                    <!-- Single Property Area -->
                                    @foreach ($relevant as $item)
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="single-property-area wow fadeInUp" data-wow-delay="200ms">
                                            <!-- Property Thumb -->
                                            <div class="property-thumb">
                                                <a href="room/{{$item->id}}/{{$item->slugs}}.html">
                                                        <img src="theme/img/bg-img/{{ $item->photo[0]['name'] }}" alt="">
                                                </a>

                                            </div>
                                            <a href="room/{{$item->id}}">
                                                <!-- Property Description -->
                                            <div class="property-desc-area">
                                                    <!-- Property Title & Seller -->
                                                    <div class="property-title-seller d-flex justify-content-between">
                                                        <!-- Title -->
                                                        <div class="property-title">
                                                            <h4>{{ $item->title }}</h4>
                                                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> {{$item->district->districtName}}, Hà Nội</p>
                                                        </div>
                                                        <!-- Seller -->
                                                        <div class="property-seller">
                                                            <p>Người đăng:</p>
                                                            <h6>{{$item->user->username}}</h6>
                                                        </div>
                                                    </div>
                                                    <!-- Property Info -->
                                                    <div class="property-info-area d-flex flex-wrap">
                                                        <p>Diện tích: <span>1420 m2</span></p>
                                                        <p>Số người: <span>{{$item->numberpeople}}</span></p>

                                                    </div>
                                                    <p>Loại phòng: <span>{{$item->roomType->type}}</span></p>
                                                </div>

                                                <!-- Property Price -->
                                                <div class="property-price">
                                                    <p class="badge-rent">Giá ở ghép</p>
                                                    <p class="price">{{ number_format($item->price) }} VND/tháng</p>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                    @endforeach


                                </div>
                            </form>
                        </div>

                    </div>

                    <!-- Sidebar Area -->
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="rehomes-property-sidebar-area">

                            <!-- Property Search Form -->
                            <div class="property-search-form-area mb-80 wow fadeInUp" data-wow-delay="200ms">
                                <h5 class="mb-30">Bạn quan tâm tin này?</h5>
                                <form action="#" method="get">
                                    <div class="row">
                                        <div class="col-12">
                                            @if (Auth::user())
                                                <button type="button" data-toggle="modal" data-target="#myModal" class="btn rehomes-btn mt-15 w-100" id="care">Quan tâm</button>
                                                <input id="id_user" type="hidden" value="{{Auth::user()->id}}">
                                                <input id="id_room" type="hidden" value="{{$detail->id}}">
                                            @else
                                                <a href="login">
                                                    <button type="button" class="btn rehomes-btn mt-15 w-100">Quan tâm</button>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!-- Single Properties Widget Area -->
                            <div class="properties-single-widget-area mb-80 wow fadeInUp" data-wow-delay="200ms">
                                <h4 class="widget-title mb-30">đăng gần đây</h4>

                                <!-- Single Recent Post -->
                                @foreach ($recent as $item)
                                    <div class="single-recent-post d-flex align-items-center">
                                        <!-- Thumb -->
                                        <div class="properties-post-thumb">
                                            <a href="room/{{$item->id}}/{{$item->slugs}}.html"><img src="theme/img/bg-img/{{$item->photo[0]['name']}}" alt=""></a>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                        <a href="room/{{$item->id}}/{{$item->slugs}}.html" class="post-title">ở ghép {{$item->roomType->type}}</a>
                                            <p class="properties--location"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$item->district->districtName}}, hà nội</p>
                                            <p class="properties--rent">giá: <span>{{number_format($item->price)}}</span></p>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="append"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- **** Properties-area End **** -->

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
                    <img src="theme/img/core-img/zalo.png" id ="zalo" class="zalo" alt="" style="height: 80px;margin-left: 190px; " data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                </div>
                <div class="modal-footer">
                {{-- <a href="https://www.facebook.com/messages/t/ho.tung.90226">
                    <button type="button" class="btn btn-secondary"  style="width: 140px;">Trao đổi</button>
                </a> --}}

                    <button type="button" class="btn btn-primary" style="width: 140px;margin-right: 35%;" data-dismiss="modal">Trao đổi sau</button>
                </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div id="myModal1" class="modal fade" role="dialog">
            <div class="modal-dialog">
            <!-- Modal content-->
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cảm ơn bạn đã quan tâm!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="container">
                    <h4 style="padding: 22px;">Xin chờ Bình Dương xác nhận</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" style="width: 140px;margin-right: 35%;" data-dismiss="modal">Đóng</button>
                </div>
                </div>
            </div>
        </div>
@endsection
@section('script')
<script>
     $(document).ready(function(){
        $("#rate").click(function(){
        $( "#forrate").slideToggle();
        });
     });
</script>
<script>

	var map;
	function initMap() {
		map = new google.maps.Map(document.getElementById('map-detail'), {
			center: {lat: 16.067011, lng: 108.214388},
			zoom: 15,
			draggable: true
		});
		/* Get latlng vị trí phòng trọ */
		<?php
		$arrmergeLatln = array();

		$arrlatlng = json_decode($detail->latlng,true);

		$arrmergeLatln[] = ["lat"=> $arrlatlng[0],"lng"=> $arrlatlng[1],"title"=>$detail->title,"address"=> $detail->area,"phone"=> $detail->user->phonenumber,"slug"=>$detail->slug];
		$js_array = json_encode($arrmergeLatln);
		echo "var javascript_array = ". $js_array . ";\n";

		?>
		/* ---------------  */

		for (i in javascript_array){
			var data = javascript_array[i];
			var latlng =  new google.maps.LatLng(data.lat,data.lng);
			var phongtro = new google.maps.Marker({
				position:  latlng,
				map: map,
				title: data.title,
				icon: "theme/img/core-img/gps.png",
				content: 'dgfdgfdg'
			});
			var infowindow = new google.maps.InfoWindow();
			(function(phongtro, data){
				var content = '<div id="iw-container" >' +
				'<a href="room/'+data.slug+'"><div class="iw-title" style="background: #003352;color: #fff;padding: 6px auto;text-align: center;font-weight: bold;padding: 5px 5px;margin-bottom: 5px;">' + data.title +'</div></a>' +
				'<p><i class="fa fa-map-marker" style="color:#003352"></i> '+ data.address +', Hà Nội'+'<br>'+
				'<br>Phone. ' +data.phone +'</div>';
				infowindow.setContent(content);
				infowindow.open(map, phongtro);
				google.maps.event.addListener(phongtro, "click", function(e){

					infowindow.setContent(content);
					infowindow.open(map, phongtro);
                  // alert(data.title);
              });
			})(phongtro,data);

		}
		google.maps.event.addListener(map, 'mousemove', function (e) {
			document.getElementById("flat").innerHTML = e.latLng.lat().toFixed(6);
			document.getElementById("lng").innerHTML = e.latLng.lng().toFixed(6);

		});


	}

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzlVX517mZWArHv4Dt3_JVG0aPmbSE5mE&callback=initMap"
async defer></script>
<script>
    $( document ).ready(function() {
        $('#care').click(function () {
            let id_room = $('#id_room').val();
            let id_user = $('#id_user').val();
            $.ajax({
                type: 'GET',
                url: "{{route('care')}}",
                data: { id_room:  id_room,id_user: id_user},
                dataType: 'json',
                success: function (data) {
                    $('#id_user').after("<input id='idRoomCare' type='hidden' value='" + data + "'>");
                },
            });
        });
        $(document).on('click', '#zalo', function() {
            let status = 1;
            let idRoomCare = $('#idRoomCare').val();
            console.log(idRoomCare);
            $.ajax({
                type: 'GET',
                url: "{{route('care')}}",
                data: { status:  status, idRoomCare: idRoomCare },
                dataType: 'json',
                success: function (data) {

                }
            });
        });
    });
</script>
 <script src="http://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    <script>
        var ratedIndex = -1, uID = 0;

        $(document).ready(function () {
            resetStarColors();

            $('.fa-star').on('click', function () {
               ratedIndex = parseInt($(this).data('index'));
               localStorage.setItem('ratedIndex', ratedIndex);s
            });
            $('.fa-star').mouseover(function () {
                resetStarColors();
                var currentIndex = parseInt($(this).data('index'));
                setStars(currentIndex);
            });

            $('.fa-star').mouseleave(function () {
                resetStarColors();

                if (ratedIndex != -1)
                    setStars(ratedIndex);
            });

            $('.rate').click(function(){
               let point = ratedIndex;
             document.getElementById('rate1').value= point ;
            });

        });

        function setStars(max) {
            for (var i=1; i <= max; i++)
                $('.fa-star:eq('+i+')').css('color', 'yellow');
        }

        function resetStarColors() {
            $('.fa-star').css('color', 'gray');
        }
    </script>
@endsection
