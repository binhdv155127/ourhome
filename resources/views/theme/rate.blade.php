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
                            <li class="breadcrumb-item active" aria-current="page">Đánh giá</li>
                        </ol>
                    </nav>
                    <h2 class="page-title">Trang đánh giá</h2>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- **** Breadcrumb Area End **** -->
<br>
<br>
<br>
  <!-- **** comment **** -->
  <div class="rehomes-news-area blog-details"style="margin-top: 100px;">
        <div class="container">
            <div class="blog-details-area">
                <div class="row justify-content-between">
                    <div class="col-12">
                        <!-- Comment Area Start -->
                        <div class="comment-area wow fadeInUp" data-wow-delay="200ms">
                            <!-- Comments Area -->
                            <div class="comment_area clearfix">
                                <ol>
                                    <!-- Single Comment Area -->
                                    <!-- Leave A Reply -->
                                    <div class="rehomes-comment-form mb-80 wow fadeInUp" data-wow-delay="200ms">
                                        <!-- Form -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="newp" style="margin-bottom: 30px;border: 1px solid #80808061;height: 174px;padding: 10px;border-radius: 10px;">
                                                    <div class="left" style="float: left;    width: 505px;">
                                                        <div class="anh property-thumb" style=" float: left;">
                                                            <img src="theme/img/bg-img/50.jpg" alt="" style="height: 150px;">
                                                        </div>
                                                        <div class="content" style="margin-left: 260px;">
                                                            <a href="room/">
                                                                <h5>Dương Văn Bình</h5>
                                                            </a>
                                                            <P>Địa chỉ: 290 Kim Mã</P>
                                                            <p>Nghề nghiệp : Sinh Viên</p>
                                                            <button class="btn btn-warning">Chi tiết</button>
                                                        </div>
                                                    </div>
                                                    <div class="right" style="border-left: 1px solid;margin-left: 506px;">
                                                        <div class="content" style="margin-left: 140px;">
                                                            <h4>Sao trung bình</h4>
                                                            <p style="margin-left: 76px; margin-top: 9px;font-size: 30px; ">
                                                                4.6
                                                                <i class="fa fa-star" aria-hidden="true" style="color: #ffc107;"></i>
                                                            </p>
                                                            <button class="btn btn-success" style=" margin-left: 22px;" id="rate">Gửi đánh giá của bạn</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </ol>
                                <!-- Leave A Reply -->
                                <div class="rehomes-contact-form mt-50 mb-5 mb-lg-0 wow fadeInUp" data-wow-delay="200ms" style="visibility: visible;animation-delay: 200ms;animation-name: fadeInUp;border: 1px solid gainsboro;border-radius: 10px;margin-top: -75px;padding: 20px;" id="forrate">
                                    <h4 class="mb-30">Gửi đánh giá</h4>
                                    <form class="#" method="post">
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Chọn đánh giá của bạn:
                                                    {{-- <i class="fa fa-star" aria-hidden="true" style="margin-left: 100px;color: #ffc107;"></i>
                                                    <i class="fa fa-star" aria-hidden="true" style="color: #ffc107;"></i>
                                                    <i class="fa fa-star" aria-hidden="true" style="color: #ffc107;"></i>
                                                    <i class="fa fa-star" aria-hidden="true" style="color: #ffc107;"></i> --}}
                                                    <i class="fa fa-star-o" aria-hidden="true" ></i>
                                                    <i class="fa fa-star-o" aria-hidden="true" ></i>
                                                    <i class="fa fa-star-o" aria-hidden="true" ></i>
                                                    <i class="fa fa-star-o" aria-hidden="true" ></i>
                                                    <i class="fa fa-star-o" aria-hidden="true" ></i>
                                                </p>
                                                <input type="text" name="message-name" class="form-control mb-30" placeholder="Nhập đánh giá về người cho ở ghép">
                                                <button type="submit" class="btn rehomes-btn mt-15">Gửi đánh giá</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!-- Comments Area -->
                            <div class="comment_area clearfix">
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
@endsection
@section('script')
    <script>
         $(document).ready(function(){
            $("#rate").click(function(){
            $( "#forrate").slideToggle("slow");
            });
         });
    </script>
@endsection
