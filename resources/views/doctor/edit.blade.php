<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sửa bác sĩ</title>
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
{{--            <div class="row">--}}
{{--                <div class="col-ml-12">--}}

                    <div class="row">

                        <!-- Textual inputs start -->
                        <div class="col-12 mt-5">
                            @if($errors->any())
                            @foreach($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{$error}}!</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span class="fa fa-times"></span>
                                </button>
                            </div>
                                @endforeach
                            @endif
                            <div class="card">
                                <div class="card-body">
                                    <form class="needs-validation" novalidate="" action="{{route('doctor.update', $item->id)}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <h4 class="header-title">Thông tin bác sĩ</h4>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Mã bác sĩ</label>
                                            <input class="form-control" name="code" type="text" value="{{$item->code}}" required="">
                                            <div class="invalid-feedback">
                                                Vui lòng nhập dữ liệu.
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-search-input" class="col-form-label">Tên bác sĩ</label>
                                            <input class="form-control" name="name" type="text" value="{{$item->name}}" required="">
                                            <div class="invalid-feedback">
                                                Vui lòng nhập dữ liệu.
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email-input" class="col-form-label">Chuyên môn</label>
                                            <input class="form-control" name="specialize" type="text" value="{{$item->specialize}}" required="">
                                            <div class="invalid-feedback">
                                                Vui lòng nhập dữ liệu.
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-url-input" class="col-form-label">Số điện thoại</label>
                                            <input class="form-control" name="phone" type="number" value="{{$item->phone}}" required="">
                                            <div class="invalid-feedback">
                                                Vui lòng nhập dữ liệu.
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-tel-input" class="col-form-label">Địa chỉ</label>
                                            <input class="form-control" name="address" type="text" value="{{$item->address}}">

                                        </div>
                                        <button class="btn btn-primary" type="submit">Sửa</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Textual inputs end -->
                    </div>
{{--                </div>--}}

{{--            </div>--}}
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
