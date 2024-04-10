<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nha khoa Thuy Duc</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,400;0,600;0,700;1,200;1,700&display=swap"
        rel="stylesheet">

    <link href="{{asset('user/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('user/css/bootstrap-icons.css')}}" rel="stylesheet">

    <link href="{{asset('user/css/vegas.min.css')}}" rel="stylesheet">

    <link href="{{asset('user/css/tooplate-barista.css')}}" rel="stylesheet">
</head>

<body>

    <main>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="index.html">
                    <img src="https://nhakhoathuyduc.com.vn/wp-content/uploads/2023/11/logo.svg" style="width: 100px"
                        class="navbar-brand-image img-fluid" alt="nhakhoathuyduc">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="{{route('home')}}">Trang chủ</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="{{route('history')}}">Tra lịch sử cuộc hẹn</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('booking')}}">Đặt lịch</a>
                        </li>
                    </ul>

                    <div class="ms-lg-3">
                        @if(Auth::guard('user')->check())
                        <a class="btn custom-btn custom-border-btn" href="{{ route('user.logout') }}">
                            Đăng xuất
                            <i class="bi-arrow-up-right ms-2"></i>
                        </a>
                        @else
                        <a class="btn custom-btn custom-border-btn" href="{{ route('user.login') }}">
                            Đăng nhập
                            <i class="bi-arrow-up-right ms-2"></i>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </nav>


        <section class="reviews-section section-padding section-bg" style="padding-top: 200px" id="section_4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-12 mb-4 mb-lg-0">
                        <div class="menu-block-wrap">
                            <div class="text-center mb-4 pb-lg-2">
                                <h4 class="text-white">Lịch sử cuộc hẹn</h4>
                            </div>
                            @foreach($appointments as $appointment)
                            <div class="menu-block">
                                <div class="d-flex">
                                    <h6 style="margin-right: 50px">{{$appointment->time}}</h6>
                                    <h6>{{$appointment->service->name}}</h6>
                                    <span class="underline"></span>
                                    <strong class="ms-auto">{{$appointment->price}}đ</strong>
                                </div>
                            </div>
                            @endforeach
                            @if($appointments == [])
                            <div class="menu-block">
                                <div class="d-flex">
                                    <h6>Không tìm thấy lịch sử cuộc hẹn</h6>
                                </div>
                            </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <footer class="site-footer" style="background-color: #0F4FAF">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-12 me-auto">
                        <em class="text-white d-block mb-4">Địa chỉ của chúng tôi?</em>

                        <strong class="text-white">
                            <i class="bi-geo-alt me-2"></i>
                            CS1: Số 64 Phố Vọng, Phương Mai, Đống Đa, Hà Nội
                        </strong>
                        <br>
                        <strong class="text-white">
                            <i class="bi-geo-alt me-2"></i>
                            CS2: tầng 3, 4 tòa GP Building 257 Giải Phóng, Đống Đa, Hà Nội
                        </strong>

                        <ul class="social-icon mt-4">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook">
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="https://x.com/minthu" target="_new" class="social-icon-link bi-twitter">
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-whatsapp">
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-12 mt-4 mb-3 mt-lg-0 mb-lg-0">
                        <em class="text-white d-block mb-4">Liên hệ</em>

                        <p class="d-flex mb-1">
                            <strong class="me-2">SĐT:</strong>
                            <a href="tel: 0931863366" class="site-footer-link">
                                0931863366
                            </a>
                        </p>
                    </div>
                    <div class="col-lg-5 col-12">
                        <em class="text-white d-block mb-4">Giờ hoạt động.</em>
                        <ul class="opening-hours-list">
                            <li class="d-flex">
                                Thứ 2 - Chủ Nhật
                                <span class="underline"></span>
                                <strong>8:30 -18:30</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </main>

    <!-- JAVASCRIPT FILES -->
    <script src="{{asset('user/js/jquery.min.js')}}"></script>
    <script src="{{asset('user/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('user/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('user/js/click-scroll.js')}}"></script>
    <script src="{{asset('user/js/vegas.min.js')}}"></script>
    <script src="{{asset('user/js/custom.js')}}"></script>

</body>

</html>
