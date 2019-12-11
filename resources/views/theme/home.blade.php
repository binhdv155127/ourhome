@extends('theme.layout.index')

@section('content')
<div class="welcome-area">
    <div class="google-maps bg-img bg-overlay-3 wow fadeInUp" data-wow-delay="200ms" style="background-image: url(theme/img/bg-img/company_bg.jpg); margin-top: -350px;">
    </div>
</div>
@include('theme.layout.finding')
<section class="rehome-house-sale-area section-padding-80">
    <div class="container">
        <div class="row">
            <!-- Single Property Area -->
            @foreach ($new as $item)
               <div class="col-12 col-md-6 col-lg-4">
               <a href="room/{{$item->id}}/{{$item->slugs}}.html">
                    <div class="single-property-area wow fadeInUp" data-wow-delay="200ms">
                        <!-- Property Thumb -->
                        <div class="property-thumb">
                            <img src="theme/img/bg-img/{{ $item->photo[0]['name'] }}" alt="">
                        </div>

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
                            <p>Đánh giá: <span>
                                    <i class="fa fa-star" aria-hidden="true" style="margin-left: 50px;color: #ffc107;"></i>
                                    <i class="fa fa-star" aria-hidden="true" style="color: #ffc107;"></i>
                                    <i class="fa fa-star" aria-hidden="true" style="color: #ffc107;"></i>
                                    <i class="fa fa-star" aria-hidden="true" style="color: #ffc107;"></i>
                                    <i class="fa fa-star-o" aria-hidden="true" ></i>
                                </span></p>
                        </div>

                        <!-- Property Price -->
                        <div class="property-price">
                            <p class="badge-rent">Giá ở ghép</p>
                            <p class="price">{{ number_format($item->price) }} VND/tháng</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

        <div class="container">
                <div class="row">
                        {{$new->links()}}
                </div>
        </div>

    </div>
</section>
@endsection
@section('script')
    <script>
         $(document).ready(function(){
             $("#district").change(function(){
                 var idDistrict = $(this).val();
                 $.get("ward/"+idDistrict,function(data){
                    $('#ward').html(data);
                 });
             });
         });
    </script>
@endsection
