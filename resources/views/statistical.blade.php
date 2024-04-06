<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>
    @include('layouts.head')
</head>

<body>
<!-- preloader area start -->

<div id="preloader">
    <div class="loader"></div>
</div>
<!-- preloader area end -->
<!-- page container area start -->
<div class="page-container">
    <!-- sidebar menu area start -->
    @include('layouts.sidebar')
    <!-- sidebar menu area end -->
    <!-- main content area start -->
    <div class="main-content">
        <!-- page title area start -->
        @include('layouts.title-area')
        <!-- page title area end -->
        <div class="main-content-inner">
            <!-- sales report area start -->
            <div class="sales-report-area sales-style-two">
                @include('layouts.notification')
                <div class="row">
                    <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                        <div class="single-report">
                            <div class="s-sale-inner pt--30 mb-3">
                                <div class="s-report-title d-flex justify-content-between">
                                    <h4 class="header-title mb-0">Cuộc hẹn tháng này</h4>
                                </div>
                            </div>
                            <div id="coin_sales7" style="font-size: 40px">{{ $totalAppointment }}</div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                        <div class="single-report">
                            <div class="s-sale-inner pt--30 mb-3">
                                <div class="s-report-title d-flex justify-content-between">
                                    <h4 class="header-title mb-0">Doanh thu tháng này</h4>
                                </div>
                            </div>
                            <div id="coin_sales7" style="font-size: 40px">{{ $totalAppointmentPrice }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- sales report area end -->
            <!-- order list area start -->
            <div class="card mt-5">
                <div class="card-body">
                    <h4 class="header-title">Cuộc hẹn của bác sĩ</h4>
                    <div class="table-responsive">
                        <table class="dbkit-table text-center">

                            <tbody>
                            <tr class="heading-td">
                                <td>STT</td>
                                <td>Tên bác sĩ</td>
                                <td>Cuộc hẹn</td>
                            </tr>
                            @foreach($doctors as $doctor)
                                <tr class="heading-td">
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{$doctor->name}}</td>
                                    <td>{{$doctor->appointments->count()}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- order list area end -->
        </div>
    </div>
    <!-- main content area end -->
    <!-- footer area start-->
    @include('layouts.footer-area')
    <!-- footer area end-->
</div>
<!-- page container area end -->

@include('layouts.footer')
</body>

</html>

