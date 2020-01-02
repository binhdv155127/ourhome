@extends('theme.layout.index')
@section('content')

    @include('theme.layout.finding')

    <!-- **** Breadcrumb Area Start **** -->
    <div class="breadcrumb-area-two mt-50 wow fadeInUp" data-wow-delay="200ms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content-two">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tìm kiếm</li>
                            </ol>
                        </nav>
                        <h2 class="page-title">Tìm kiếm được {{count($findRoom)}} kết quả</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- **** Breadcrumb Area End **** -->


    <!-- **** Sale area Start **** -->
    <section class="rehome-house-sale-area section-padding-80">
            <div class="container">
                <div class="row">
                    <!-- Single Property Area -->
                    @foreach ($findRoom as $item)
                    <div class="col-12 col-md-6 col-lg-4">
                            <a href="room/{{$item->id}}">
                                <div class="single-property-area wow fadeInUp" data-wow-delay="200ms">
                                    <!-- Property Thumb -->
                                    <div class="property-thumb" style="height: 230px !important;">
                                        <img src="theme/img/bg-img/{{ $item->photo[0]['name'] }}" alt="">
                                    </div>

                                    <!-- Property Description -->
                                    <div class="property-desc-area">
                                        <!-- Property Title & Seller -->
                                        <div class="property-title-seller d-flex justify-content-between">
                                            <!-- Title -->
                                            <div class="property-title">
                                                <h4 style="white-space: nowrap;
                                                              overflow: hidden;
                                                              text-overflow: Ellipsis;
                                                              max-width: 300px;">{{ $item->title }}</h4>
                                                <p><i class="fa fa-map-marker" aria-hidden="true"></i> {{$item->district->districtName}}, Hà Nội</p>
                                            </div>
                                            <!-- Seller -->
                                            <!-- <div class="property-seller">
                                                <p>Người đăng:</p>
                                                <h6>{{$item->user->username}}</h6>
                                            </div> -->
                                        </div>
                                        <!-- Property Info -->
                                        <div class="property-info-area d-flex flex-wrap">
                                            <p>Diện tích: <span>1420 m2</span></p>
                                            <p>Số người: <span>{{$item->numberpeople}}</span></p>

                                        </div>
                                        <p>Loại phòng: <span>{{$item->roomType->type}}</span></p>
                                        <!-- <p>Đánh giá: <span>
                                            <i class="fa fa-star" aria-hidden="true" style="margin-left: 50px;color: #ffc107;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffc107;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffc107;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffc107;"></i>
                                            <i class="fa fa-star-o" aria-hidden="true" ></i>
                                        </span></p> -->
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
                                {{$findRoom->links()}}
                        </div>
                </div>
            </div>
        </section>
        <!-- **** Sale Area End **** -->
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
