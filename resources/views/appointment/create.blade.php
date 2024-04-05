<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tạo cuộc hẹn</title>
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
                                    <form class="needs-validation" novalidate="" action="{{route('appointment.store')}}" method="POST">
                                        @csrf
                                        <h4 class="header-title">Thông tin cuộc hẹn</h4>

                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Mã cuộc hẹn</label>
                                            <input class="form-control" name="code" type="text" value="{{old('code')}}" required="">
                                            <div class="invalid-feedback">
                                                Vui lòng nhập dữ liệu.
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-search-input" class="col-form-label">Tên bệnh nhân</label>
                                            <select class="form-control" required name="patient_id">
                                                <option value="">Lựa chọn</option>
                                                @foreach($patients as $patient)
                                                    <option value="{{$patient->id}}" {{old('patient_id') == $patient->id ? 'selected' : ''}}>{{$patient->name}}</option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback">
                                                Vui lòng nhập dữ liệu.
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email-input" class="col-form-label">Tên bác sĩ</label>
                                            <select class="form-control" required name="doctor_id">
                                                <option value="">Lựa chọn</option>
                                                @foreach($doctors as $doctor)
                                                    <option value="{{$doctor->id}}" {{old('doctor_id') == $doctor->id ? 'selected' : ''}}>{{$doctor->name}}</option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback">
                                                Vui lòng nhập dữ liệu.
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email-input" class="col-form-label">Tên dịch vụ</label>
                                            <select class="form-control" required name="service_id">
                                                <option value="">Lựa chọn</option>
                                                @foreach($services as $service)
                                                    <option value="{{$service->id}}" {{old('service_id') == $service->id ? 'selected' : ''}}>{{$service->name}}</option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback">
                                                Vui lòng nhập dữ liệu.
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-url-input" class="col-form-label">Ngày giờ</label>
                                            <input class="form-control" name="time" type="datetime-local" value="{{old('time')}}" id="example-datetime-local-input">
                                            <div class="invalid-feedback">
                                                Vui lòng nhập dữ liệu.
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-tel-input" class="col-form-label">Ghi chú </label>
                                            <input class="form-control" name="note" type="text" value="{{old('note')}}">

                                        </div>
                                        <button class="btn btn-primary" type="submit">Thêm mới</button>
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
