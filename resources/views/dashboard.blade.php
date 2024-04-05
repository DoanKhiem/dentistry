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
                            <div id="coin_sales7" style="font-size: 40px">{{ $doctors->count() }}</div>
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
                            <div id="coin_sales7" style="font-size: 40px">{{ $patients->count() }}</div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-ml-3 col-md-6  mt-5">
                        <div class="single-report">
                            <div class="s-sale-inner pt--30 mb-3">
                                <div class="s-report-title d-flex justify-content-between">
                                    <h4 class="header-title mb-0">Cuộc hẹn</h4>
{{--                                    <select class="custome-select border-0 pr-3">--}}
{{--                                        <option selected="">Last 7 Days</option>--}}
{{--                                        <option value="0">Last 7 Days</option>--}}
{{--                                    </select>--}}
                                </div>
                            </div>
                            <div id="coin_sales7" style="font-size: 40px">{{ $appointments->count() }}</div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-ml-3 col-md-6 mt-5">
                        <div class="single-report">
                            <div class="s-sale-inner pt--30 mb-3">
                                <div class="s-report-title d-flex justify-content-between">
                                    <h4 class="header-title mb-0">Doanh thu</h4>
{{--                                    <select class="custome-select border-0 pr-3">--}}
{{--                                        <option selected="">Last 7 Days</option>--}}
{{--                                        <option value="0">Last 7 Days</option>--}}
{{--                                    </select>--}}
                                </div>
                            </div>
                            <div id="coin_sales7" style="font-size: 40px">{{ $appointments->sum('price') }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- sales report area end -->
            <!-- order list area start -->
            <div class="card mt-5">
                <div class="card-body">
                    <h4 class="header-title">Danh sách lịch hẹn gần đây</h4>
                    <div class="table-responsive">
                        <table class="dbkit-table text-center">

                            <tbody>
                            <tr class="heading-td">
                                <td>STT</td>
                                <td>Tên bệnh nhân</td>
                                <td>Tên bác sĩ</td>
                                <td>Dịch vụ</td>
                                <td>Ngày giờ</td>
                                <td>Ghi chú</td>
                                <td>Hành dộng</td>
                            </tr>
                            @foreach($appointments->take(5) as $appointment)
                            <tr class="heading-td">
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{$appointment->patient->name}}</td>
                                <td>{{$appointment->doctor->name}}</td>
                                <td>{{$appointment->service->name}}</td>
                                <td>{{$appointment->time}}</td>
                                <td>{{$appointment->note}}</td>
                                <td>
                                    <a href="{{route('appointment.edit', $appointment->id)}}">
                                        <button class="btn btn-rounded btn-warning btn-xs mb-3" type="button"
                                                value="Input"><i class="fa fa-edit"></i></button>
                                    </a>
                                    <form action="{{route('appointment.destroy', $appointment->id)}}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="deleteBtn btn btn-rounded btn-danger btn-xs mb-3" type="button"
                                                value="Reset"><i class="fa fa-trash"></i></button>
                                    </form>

                                </td>
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

