<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Tìm ở ghép</title>

    <!-- Favicon -->
    <link rel="icon" href="theme/img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="theme/style.css">
    <style>
        .show{
            opacity: 1;
            visibility: visible;

        }
    </style>

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>

    <!-- **** Header Area Start **** -->
    @include('theme.layout.menu')
    <!-- **** Header Area End **** -->


    <!-- **** Location Search Form Area **** -->
    {{-- @include('theme.layout.finding') --}}
    <!-- **** Location Search Form Area **** -->

    <!-- **** Breadcrumb Area Start **** -->
    {{-- @include('theme.layout.sidebar') --}}
    <!-- **** Breadcrumb Area End **** -->

    <!-- **** Sale area Start **** -->
    @yield('content')
    <!-- **** Sale Area End **** -->



    <!-- **** Footer Area Start **** -->
    @include('theme.layout.footer')
    <!-- **** Footer Area End **** -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="theme/js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="theme/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="theme/js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="theme/js/rehomes.bundle.js"></script>
    <!-- Active -->
    <script src="theme/js/default-assets/active.js"></script>

    @yield('script')
</body>

</html>
