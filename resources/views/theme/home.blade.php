@extends('theme.layout.index')

@section('content')
<div class="welcome-area">
    <div class="google-maps bg-img bg-overlay-3 wow fadeInUp" data-wow-delay="200ms" style="background-image: url(theme/img/1.jpg);">
    </div>
</div>
@include('theme.layout.finding')
<section class="rehome-house-sale-area section-padding-80">
    <div class="container">
        <div class="row">
            <!-- Single Property Area -->
            @foreach ($new as $item)
               <div class="col-12 col-md-6 col-lg-4">
               <a href="room/{{$item->id}}">
                    <div class="single-property-area wow fadeInUp" data-wow-delay="200ms">
                        <!-- Property Thumb -->
                        <div class="property-thumb">
                            <img src="theme/img/bg-img/{{ $item->photo[0]['name'] }}.jpg" alt="">
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
                                <p>Loại phòng: <span>{{$item->roomType->type}}</span></p>
                            </div>
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

        <div class="row">
            <!-- Pagination and Page Counter Area -->
            <div class="col-12">
                <div class="rehomes-pagination-counter mt-15 d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="200ms">
                    <!-- Pagination -->
                    <nav class="rehomes-pagination">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link active" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </nav>

                    <!-- Page Counter -->
                    <div class="page-counter">
                        <p>Page <span>1</span> of <span>60</span> results</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
