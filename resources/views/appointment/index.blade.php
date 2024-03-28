<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Danh sách cuộc hẹn</title>
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
            <div class="row">
                <!-- Dark table start -->
                <div class="col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div style="display: flex; align-items: center;  justify-content: space-between;">
                                <h4 class="header-title">Danh sách cuộc hẹn</h4>
                                <a href="{{route('doctor.create')}}">
                                    <button style="font-size: 16px" type="button" class="btn btn-primary btn-sm mb-3">
                                        <i style="margin-right: 10px" class="fa fa-plus"></i>Thêm mới</button>
                                </a>
                            </div>
                            <div class="data-tables datatable-dark">
                                <table id="dataTable3" class="text-center">
                                    <thead class="text-capitalize">
                                    <tr>
                                        <th>STT</th>
                                        <th>Bệnh nhân</th>
                                        <th>Bác sĩ</th>
                                        <th>Ngày giờ</th>
                                        <th>Trạng thái</th>
                                        <th>Mã hóa đơn</th>
                                        <th>Tổng hóa đơn</th>
                                        <th>Tình trạng hóa đơn</th>
                                        <th>Hành dộng</th>
                                        <th>Hành dộng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>2008/11/28</td>
                                        <td>2008/11/28</td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <button class="btn btn-rounded btn-warning btn-xs mb-3" type="button" value="Input"><i class="fa fa-edit"></i></button>
                                            <button class="btn btn-rounded btn-danger btn-xs mb-3" type="reset" value="Reset"><i class="fa fa-trash"></i></button>
                                        </td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Dark table end -->
            </div>
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
