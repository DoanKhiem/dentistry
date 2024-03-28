{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Dashboard') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 text-gray-900">--}}
{{--                    {{ __("You're logged in!") }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}



<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>srtdash - ICO Dashboard</title>
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
                <div class="row">
                    <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                        <div class="single-report">
                            <div class="s-sale-inner pt--30 mb-3">
                                <div class="s-report-title d-flex justify-content-between">
                                    <h4 class="header-title mb-0">Bác sĩ</h4>
{{--                                    <select class="custome-select border-0 pr-3">--}}
{{--                                        <option selected="">Last 7 Days</option>--}}
{{--                                        <option value="0">Last 7 Days</option>--}}
{{--                                    </select>--}}
                                </div>
                            </div>
                            <div id="coin_sales7" style="font-size: 40px">100000</div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                        <div class="single-report">
                            <div class="s-sale-inner pt--30 mb-3">
                                <div class="s-report-title d-flex justify-content-between">
                                    <h4 class="header-title mb-0">Bệnh nhân</h4>
{{--                                    <select class="custome-select border-0 pr-3">--}}
{{--                                        <option selected="">Last 7 Days</option>--}}
{{--                                        <option value="0">Last 7 Days</option>--}}
{{--                                    </select>--}}
                                </div>
                            </div>
                            <div id="coin_sales7" style="font-size: 40px">100000</div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-ml-3 col-md-6  mt-5">
                        <div class="single-report">
                            <div class="s-sale-inner pt--30 mb-3">
                                <div class="s-report-title d-flex justify-content-between">
                                    <h4 class="header-title mb-0">Cuộc hẹn hôm nay</h4>
{{--                                    <select class="custome-select border-0 pr-3">--}}
{{--                                        <option selected="">Last 7 Days</option>--}}
{{--                                        <option value="0">Last 7 Days</option>--}}
{{--                                    </select>--}}
                                </div>
                            </div>
                            <div id="coin_sales7" style="font-size: 40px">100000</div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                        <div class="single-report">
                            <div class="s-sale-inner pt--30 mb-3">
                                <div class="s-report-title d-flex justify-content-between">
                                    <h4 class="header-title mb-0">Doanh thu tháng này</h4>
{{--                                    <select class="custome-select border-0 pr-3">--}}
{{--                                        <option selected="">Last 7 Days</option>--}}
{{--                                        <option value="0">Last 7 Days</option>--}}
{{--                                    </select>--}}
                                </div>
                            </div>
                            <div id="coin_sales7" style="font-size: 40px">100000</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- sales report area end -->
            <!-- order list area start -->
            <div class="card mt-5">
                <div class="card-body">
                    <h4 class="header-title">Todays Order List</h4>
                    <div class="table-responsive">
                        <table class="dbkit-table">
                            <tbody>
                            <tr class="heading-td">
                                <td>Product Name</td>
                                <td>Product Code</td>
                                <td>Order Status</td>
                                <td>Client Number</td>
                                <td>Zip Code</td>
                                <td>View Order</td>
                            </tr>
                            <tr>
                                <td>Ladis Sunglass</td>
                                <td>#894750374</td>
                                <td><span class="pending_dot">Pending</span></td>
                                <td>01976 74 92 00</td>
                                <td>9241</td>
                                <td>View Order</td>
                            </tr>
                            <tr>
                                <td>Ladis Sunglass</td>
                                <td>#894750374</td>
                                <td><span class="shipment_dot">Shipment</span></td>
                                <td>01976 74 92 00</td>
                                <td>9241</td>
                                <td>View Order</td>
                            </tr>
                            <tr>
                                <td>Ladis Sunglass</td>
                                <td>#894750374</td>
                                <td><span class="pending_dot">Pending</span></td>
                                <td>01976 74 92 00</td>
                                <td>9241</td>
                                <td>View Order</td>
                            </tr>
                            <tr>
                                <td>Ladis Sunglass</td>
                                <td>#894750374</td>
                                <td><span class="confirmed _dot">Confirmed </span></td>
                                <td>01976 74 92 00</td>
                                <td>9241</td>
                                <td>View Order</td>
                            </tr>
                            <tr>
                                <td>Ladis Sunglass</td>
                                <td>#894750374</td>
                                <td><span class="pending_dot">Pending</span></td>
                                <td>01976 74 92 00</td>
                                <td>9241</td>
                                <td>View Order</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="pagination_area pull-right mt-5">
                        <ul>
                            <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
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

