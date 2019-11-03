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
                        <li data-target="#property-thumb-silde" data-slide-to="0" class="active" style="background-image: url(theme/img/bg-img/{{$photos->name}}.jpg);"></li>
                        @foreach ($photos1 as $key=>$item)
                          @if ($key>0)
                          <li data-target="#property-thumb-silde" data-slide-to="$key" style="background-image: url(theme/img/bg-img/{{$item->name}}.jpg);"></li>
                          @endif
                        @endforeach
                    </ol>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="theme/img/bg-img/{{$photos->name}}.jpg" class="d-block w-100" alt="...">
                        </div>
                        @foreach ($photos1 as $key=>$item)
                          @if ($key>0)
                          <div class="carousel-item">
                                <img src="theme/img/bg-img/{{$item->name}}.jpg" class="d-block w-100" alt="...">
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
                        <p>diện tích: <span>13 m2</span></p>
                        <p>loại phòng: <span>{{$detail->roomType->type}}</span></p>
                        <p>số người: <span>{{$detail->numberpeople}}</span></p>
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
                                    <li><span>Price</span> <span>$ 138,000</span></li>
                                </ul>
                                <ul class="d-flex flex-wrap" style="padding-top: 10px;
                                padding-bottom: 10px; border-bottom: 1px solid #80808075">
                                    <li><span>Price</span> <span>$ 138,000</span></li>
                                </ul>
                                <ul class="d-flex flex-wrap" style="padding-top: 10px;
                                padding-bottom: 10px; border-bottom: 1px solid #80808075" >
                                    <li><span>Price</span> <span>$ 138,000</span></li>
                                </ul>
                                <ul class="d-flex flex-wrap" style="padding-top: 10px;
                                padding-bottom: 10px; border-bottom: 1px solid #80808075" >
                                    <li><span>Price</span> <span>$ 138,000</span></li>
                                </ul>
                                <ul class="d-flex flex-wrap" style="padding-top: 10px;
                                padding-bottom: 10px; border-bottom: 1px solid #80808075" >
                                    <li><span>Price</span> <span>$ 138,000</span></li>
                                </ul>
                                <ul class="d-flex flex-wrap" style="padding-top: 10px;
                                padding-bottom: 10px; border-bottom: 1px solid #80808075" >
                                    <li><span>Price</span> <span>$ 138,000</span></li>
                                </ul>
                                <ul class="d-flex flex-wrap" style="padding-top: 10px;
                                padding-bottom: 10px; border-bottom: 1px solid #80808075" >
                                    <li><span>Price</span> <span>$ 138,000</span></li>
                                </ul>
                            </div>
                        </div>

                       <!-- Floor Thumb Content -->
                        <div class="floor-thumb-content mb-80 wow fadeInUp" data-wow-delay="200ms">
                            <h4 class="mb-30">Mô tả</h4>

                            <!-- Floor Thumb -->
                            <div class="floor-thumb">
                                <p>
                                        CẦN MỘT NAM SHARE PHÒNG - 290 kim mã</p>

                                     <p> PHÒNG RỘNG RÃI SẠCH SẼ - CÓ VIEW SÔNG CÔNG VIÊN - CÓ BAN CÔNG THOÁNG MÁT -CÓ TOILET RIÊNG- CÓ ĐẦY ĐỦ TIỆN NGHI.</p>

                                        <P>-GIỜ GIẤC TỰ DO - CÓ CHỖ ĐỂ XE.</P>

                                        <p>-AN NINH</p>

                                        <p>-GẦN SIÊU THỊ , CHỢ - QUÁN ĂN TRONG BÁN KÍNH 100M.</p>

                                        <p>-DỄ DÀNG DI CHUYỂN ĐẾN CÁC QUẬN 123</p>

                                        -HIỆN TẠI MINH Ở ĐÂY ĐƯỢC 2 NĂM RỒI NÊN THẤY RẤT TIỆN.

                                        -ƯU TIÊN NGƯỜI ĐI LÀM,ỔN ĐỊNH CÔNG VIỆC,LÝ LỊCH RÕ RANG , LỊCH SỰ - ĐÀNG HOANG,SẠCH SẼ,GỌN GÀNG.

                            </div>
                        </div>
                        <!-- Search Location Area -->
                        <div class="search-location-area mb-80 wow fadeInUp" data-wow-delay="200ms">
                            <h4 class="mb-30">Chỉ dẫn</h4>
                            <!-- Location Maps -->
                            <div id="map-detail">

                            </div>
                            <?php var_dump($detail->map) ?>
                        </div>
                        <!-- Leave A Reply -->
                        <div class="rehomes-comment-form mb-80 wow fadeInUp" data-wow-delay="200ms">
                            <h4 class="mb-30">Liên quan</h4>

                            <!-- Form -->
                            <form class="#" method="post">
                                <div class="row">
                                    <!-- Single Property Area -->
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="single-property-area wow fadeInUp" data-wow-delay="200ms">
                                            <!-- Property Thumb -->
                                            <div class="property-thumb">
                                                <img src="img/bg-img/1.jpg" alt="">
                                            </div>

                                            <!-- Property Description -->
                                            <div class="property-desc-area">
                                                <!-- Property Title & Seller -->
                                                <div class="property-title-seller d-flex justify-content-between">
                                                    <!-- Title -->
                                                    <div class="property-title">
                                                        <h4>số 290 Kim Mã</h4>
                                                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> Đống Đa, Hà Nội</p>
                                                    </div>
                                                    <!-- Seller -->
                                                    <div class="property-seller">
                                                        <p>Người đăng:</p>
                                                        <h6>Bình</h6>
                                                    </div>
                                                </div>
                                                <!-- Property Info -->
                                                <div class="property-info-area d-flex flex-wrap">
                                                    <p>Diện tích: <span>1420 m2</span></p>
                                                    <p>Số người: <span>2</span></p>
                                                    <p>Loại phòng: <span>CCMN</span></p>
                                                </div>
                                            </div>

                                            <!-- Property Price -->
                                            <div class="property-price">
                                                <p class="badge-rent">Giá ở ghép</p>
                                                <p class="price">1,5tr/tháng</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Property Area -->
                                    <div class="col-12 col-md-6 col-lg-6">
                                            <div class="single-property-area wow fadeInUp" data-wow-delay="200ms">
                                                <!-- Property Thumb -->
                                                <div class="property-thumb">
                                                    <img src="img/bg-img/3.jpg" alt="">
                                                </div>

                                                <!-- Property Description -->
                                                <div class="property-desc-area">
                                                    <!-- Property Title & Seller -->
                                                    <div class="property-title-seller d-flex justify-content-between">
                                                        <!-- Title -->
                                                        <div class="property-title">
                                                            <h4>số 290 Kim Mã</h4>
                                                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Đống Đa, Hà Nội</p>
                                                        </div>
                                                        <!-- Seller -->
                                                        <div class="property-seller">
                                                            <p>Người đăng:</p>
                                                            <h6>Bình</h6>
                                                        </div>
                                                    </div>
                                                    <!-- Property Info -->
                                                    <div class="property-info-area d-flex flex-wrap">
                                                        <p>Diện tích: <span>1420 m2</span></p>
                                                        <p>Số người: <span>2</span></p>
                                                        <p>Loại phòng: <span>CCMN</span></p>
                                                    </div>
                                                </div>

                                                <!-- Property Price -->
                                                <div class="property-price">
                                                    <p class="badge-rent">Giá ở ghép</p>
                                                    <p class="price">1,5tr/tháng</p>
                                                </div>
                                            </div>
                                        </div>
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
                                            <button type="button" data-toggle="modal" data-target="#myModal" class="btn rehomes-btn mt-15 w-100">Quan tâm</button>
                                        </div>
                                        {{-- <div class="col-12">
                                            <button type="submit" class="btn rehomes-btn mt-15 w-100">Liên lạc</button>
                                        </div> --}}
                                    </div>
                                </form>
                            </div>

                            <!-- Single Properties Widget Area -->
                            <div class="properties-single-widget-area mb-80 wow fadeInUp" data-wow-delay="200ms">
                                <h4 class="widget-title mb-30">đăng gần đây</h4>

                                <!-- Single Recent Post -->
                                <div class="single-recent-post d-flex align-items-center">
                                    <!-- Thumb -->
                                    <div class="properties-post-thumb">
                                        <a href="properties-details.html"><img src="img/bg-img/45.jpg" alt=""></a>
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="properties-details.html" class="post-title">ở ghép</a>
                                        <p class="properties--location"><i class="fa fa-map-marker" aria-hidden="true"></i> đống đa, hà nội</p>
                                        <p class="properties--rent">giá: <span>1,500,000VND</span></p>
                                    </div>
                                </div>

                                <!-- Single Recent Post -->
                                <div class="single-recent-post d-flex align-items-center">
                                    <!-- Thumb -->
                                    <div class="properties-post-thumb">
                                        <a href="properties-details.html"><img src="img/bg-img/46.jpg" alt=""></a>
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="properties-details.html" class="post-title">ở ghép</a>
                                        <p class="properties--location"><i class="fa fa-map-marker" aria-hidden="true"></i> đống đa, hà nội</p>
                                        <p class="properties--rent">giá: <span>1,500,000VND</span></p>
                                    </div>
                                </div>

                                <!-- Single Recent Post -->
                                <div class="single-recent-post d-flex align-items-center">
                                    <!-- Thumb -->
                                    <div class="properties-post-thumb">
                                        <a href="properties-details.html"><img src="img/bg-img/47.jpg" alt=""></a>
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="properties-details.html" class="post-title">ở ghép</a>
                                        <p class="properties--location"><i class="fa fa-map-marker" aria-hidden="true"></i> đống đa, hà nội</p>
                                        <p class="properties--rent">giá: <span>1,500,000VND</span></p>
                                    </div>
                                </div>
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
                      <h5 class="modal-title">Thông tin</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="container">
                        <div>
                            <label>Họ và Tên</label>
                            <input type="text" class="form-control" placeholder="họ và tên" name="email">
                        </div>
                        <br>
                        <div>
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                        <br>
                        <div>
                            <label>Địa chỉ</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <br>
                        <div>
                            <label>Nội dung</label>
                            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
        </div>
      </div>
      <script type="text/javascript">
        $(document).ready(function() {
            var slider = $('.pgwSlider').pgwSlider();
            slider.previousSlide();
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

            $arrlatlng = json_decode($detail->map,true);

            $arrmergeLatln[] = ["lat"=> $arrlatlng[0],"lng"=> $arrlatlng[1],"title"=>$detail->title,"address"=> $detail->area,"phone"=> $detail->price,"slug"=>$detail->status];
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
                    icon: "theme/img/bg-img/1.jpg",
                    content: 'dgfdgfdg'
                });
                var infowindow = new google.maps.InfoWindow();
                (function(phongtro, data){
                    var content = '<div id="iw-container">' +
                    '<a href="phongtro/'+data.slug+'"><div class="iw-title">' + data.title +'</div></a>' +
                    '<p><i class="fas fa-map-marker" style="color:#003352"></i> '+ data.address +'<br>'+
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

@endsection

@section('script')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzlVX517mZWArHv4Dt3_JVG0aPmbSE5mE&callback=initMap"
    async defer></script>
@endsection
