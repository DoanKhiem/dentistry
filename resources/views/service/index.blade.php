<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dịch vụ</title>
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
                    @include('layouts.notification')
                    <div class="card">
                        <div class="card-body">
                            <div style="display: flex; align-items: center;  justify-content: space-between;">
                                <h4 class="header-title">Danh sách dịch vụ</h4>
                                <a href="{{route('service.create')}}">
                                    <button style="font-size: 16px" type="button" class="btn btn-primary btn-sm mb-3">
                                        <i style="margin-right: 10px" class="fa fa-plus"></i>Thêm mới</button>
                                </a>
                            </div>
                            <div class="data-tables datatable-dark">
                                <table id="dataTable3" class="text-center">
                                    <thead class="text-capitalize">
                                    <tr>
                                        <th>STT</th>
                                        <th>Mã DV</th>
                                        <th>Tên dịch vụ</th>
                                        <th>Giá tiền</th>
                                        <th>Hành dộng</th>
                                        <th>Hành dộng</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datas as $item)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $item->code }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>
                                                <a href="{{route('service.edit', $item->id)}}">
                                                    <button class="btn btn-rounded btn-warning btn-xs mb-3" type="button"
                                                            value="Input"><i class="fa fa-edit"></i></button>
                                                </a>
                                                <form action="{{route('service.destroy', $item->id)}}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-rounded btn-danger btn-xs mb-3" type="button"
                                                            value="Reset"><i class="fa fa-trash"></i></button>
                                                </form>

                                            </td>
                                            <td></td>
                                        </tr>
                                    @endforeach
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
