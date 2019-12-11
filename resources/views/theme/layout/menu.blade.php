
<header class="header-area">
    <!-- Main Header Start -->
    <div class="main-header-area animated">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="rehomesNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="/"><img src="theme/img/core-img/a.png" alt="" style="width: 155px;"></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="active"><a href="/">Trang chủ</a></li>
                                {{-- <li><a href="#">Trang</a>
                                    <ul class="dropdown">
                                        <li class="active"><a href="./index.html">- Trang chủ</a></li>
                                        <li><a href="./Timkiem.html">- Tìm kiếm</a></li>
                                        <li><a href="./agent.html">- Công ty</a></li>
                                        <li><a href="./index.html">- Chi Tiết</a></li>
                                    </ul>
                                </li> --}}
                                <li><a href="search">Tìm kiếm</a></li>
                                @if (Auth::user())
                                    <li><a href="person/{{ Auth::user()->id }}/{{ Auth::user()->slugs }}.html">trang cá nhân</a></li>
                                @endif
                                <li><a href="{{ Auth::user()? 'user/news' : 'login' }}" ><h6 style="color: #fb1b04;">Đăng tin ngay!</h6> </a></li>
                            </ul>
                            @if (Auth::user())
                            <ul id="nav" style="margin-top: -10px;">
                                <li><a href="#">Xin chào! {{ Auth::user()->name }}</a>
                                    <ul class="dropdown">
                                        <li class="active"><a href="person/{{ Auth::user()->id }}/{{ Auth::user()->slugs }}.html">Thông tin chi tiết</a></li>
                                        <li><a href="user/news">Đăng tin</a></li>
                                        <li><a href="logout">Thoát</a></li>
                                    </ul>
                                </li>
                            </ul>
                            @else

                            <!-- Contact btn -->
                            <div class="contact-btn mt-3 mt-lg-0 ml-3 ml-lg-5" style="margin-left: 0px !important;">
                                <a href="register">Đăng Kí</a>
                            </div>
                            <!-- Contact btn -->
                            <div class="contact-btn mt-3 mt-lg-0 ml-3 ml-lg-5" style="margin-left: 10px !important;">
                                <a href="login">Đăng Nhập</a>
                            </div>
                            @endif
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

