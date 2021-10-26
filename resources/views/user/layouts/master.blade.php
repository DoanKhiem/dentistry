<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ url('user')}}/img\favicon.ico">
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="{{ url('user')}}/css\font-awesome.min.css">
    <!-- Ionicons css -->
    <link rel="stylesheet" href="{{ url('user')}}/css\ionicons.min.css">
    <!-- linearicons css -->
    <link rel="stylesheet" href="{{ url('user')}}/css\linearicons.css">
    <!-- Nice select css -->
    <link rel="stylesheet" href="{{ url('user')}}/css\nice-select.css">
    <!-- Jquery fancybox css -->
    <link rel="stylesheet" href="{{ url('user')}}/css\jquery.fancybox.css">
    <!-- Jquery ui price slider css -->
    <link rel="stylesheet" href="{{ url('user')}}/css\jquery-ui.min.css">
    <!-- Meanmenu css -->
    <link rel="stylesheet" href="{{ url('user')}}/css\meanmenu.min.css">
    <!-- Nivo slider css -->
    <link rel="stylesheet" href="{{ url('user')}}/css\nivo-slider.css">
    <!-- Owl carousel css -->
    <link rel="stylesheet" href="{{ url('user')}}/css\owl.carousel.min.css">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ url('user')}}/css\bootstrap.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="{{ url('user')}}/css\default.css">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ url('user')}}/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ url('user')}}/css\responsive.css">

    <!-- Modernizer js -->
    <script src="{{ url('user')}}/js\vendor\modernizr-3.5.0.min.js"></script>
</head>

<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="{{ url('user')}}/https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

    <!-- Main Wrapper Start Here -->
    <div class="wrapper">
        <!-- Banner Popup Start -->
        <!-- <div class="popup_banner">
            <span class="popup_off_banner">×</span>
            <div class="banner_popup_area">
                    <img src="{{ url('user')}}/img\banner\pop-banner.jpg" alt="">
            </div>
        </div> -->
        <!-- Banner Popup End -->
       <!-- Newsletter Popup Start -->
        @include('user.layouts.popup-wrapper')
        <!-- Newsletter Popup End -->
        <!-- Main Header Area Start Here -->
        <header>
            <!-- Header Top Start Here -->
            @include('user.layouts.header.header-top-area')
            <!-- Header Top End Here -->
            <!-- Header Middle Start Here -->
            @include('user.layouts.header.header-middle')
            <!-- Header Middle End Here -->
            <!-- Header Bottom Start Here -->
            @include('user.layouts.header.header-bottom')
            <!-- Header Bottom End Here -->
            <!-- Mobile Vertical Menu Start Here -->
            @include('user.layouts.header.vertical-menu')
            <!-- Mobile Vertical Menu Start End -->
        </header>
        <!-- Main Header Area End Here -->

        @yield('main')

        <!-- Support Area Start Here -->
        @include('user.layouts.support-area')
        
        <!-- Support Area End Here -->
        <!-- Footer Area Start Here -->
        <footer class="off-white-bg2 pt-95 bdr-top pt-sm-55">
            <!-- Footer Top Start -->
            @include('user.layouts.footer.footer-top')
            <!-- Footer Top End -->
            <!-- Footer Middle Start -->
            @include('user.layouts.footer.footer-middle')
            <!-- Footer Middle End -->
            <!-- Footer Bottom Start -->
            @include('user.layouts.footer.footer-bottom')
            <!-- Footer Bottom End -->
        </footer>
        <!-- Footer Area End Here -->
        <!-- Quick View Content Start -->
        @include('user.layouts.main-product-thumbnail')
        <!-- Quick View Content End -->
    </div>
    <!-- Main Wrapper End Here -->

    <!-- jquery 3.2.1 -->
    <script src="{{ url('user')}}/js\vendor\jquery-3.2.1.min.js"></script>
    <!-- Countdown js -->
    <script src="{{ url('user')}}/js\jquery.countdown.min.js"></script>
    <!-- Mobile menu js -->
    <script src="{{ url('user')}}/js\jquery.meanmenu.min.js"></script>
    <!-- ScrollUp js -->
    <script src="{{ url('user')}}/js\jquery.scrollUp.js"></script>
    <!-- Nivo slider js -->
    <script src="{{ url('user')}}/js\jquery.nivo.slider.js"></script>
    <!-- Fancybox js -->
    <script src="{{ url('user')}}/js\jquery.fancybox.min.js"></script>
    <!-- Jquery nice select js -->
    <script src="{{ url('user')}}/js\jquery.nice-select.min.js"></script>
    <!-- Jquery ui price slider js -->
    <script src="{{ url('user')}}/js\jquery-ui.min.js"></script>
    <!-- Owl carousel -->
    <script src="{{ url('user')}}/js\owl.carousel.min.js"></script>
    <!-- Bootstrap popper js -->
    <script src="{{ url('user')}}/js\popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="{{ url('user')}}/js\bootstrap.min.js"></script>
    <!-- Plugin js -->
    <script src="{{ url('user')}}/js\plugins.js"></script>
    <!-- Main activaion js -->
    <script src="{{ url('user')}}/js\main.js"></script>
</body>

</html>