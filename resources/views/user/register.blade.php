@extends('user.layouts.master')

@section('title', 'Đăng ký')


@section('main')

        <!-- Categorie Menu & Slider Area Start Here -->
        @include('user.layouts.main-page-banner')
        <!-- Categorie Menu & Slider Area End Here -->
        <!-- Breadcrumb Start -->
        @include('user.layouts.breadcrumb-area')
        <!-- Breadcrumb End -->

        <!-- Register Account Start -->
        <div class="register-account ptb-100 ptb-sm-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="register-title">
                            <h3 class="mb-10">Tạo tài khoản</h3>
                            <p class="mb-10">Nếu bạn đã có tài khoản với chúng tôi, vui lòng đăng nhập tại trang đăng nhập.</p>
                        </div>
                    </div>
                </div>
                <!-- Row End -->
                <div class="row">
                    <div class="col-sm-12">
                        <form class="form-register" action="{{route('user.check_register')}}" method="post">
                            @csrf
                            <fieldset>
                                <legend>Thông tin cá nhân của bạn</legend>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="f-name"><span class="require">*</span>First Name</label>
                                    <div class="col-md-10">
                                        <input name="first_name" type="text" class="form-control" id="f-name" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="l-name"><span class="require">*</span>Last Name</label>
                                    <div class="col-md-10">
                                        <input name="last_name" type="text" class="form-control" id="l-name" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="l-name"><span class="require">*</span>Address</label>
                                    <div class="col-md-10">
                                        <input name="address" type="text" class="form-control" id="l-name" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="email"><span class="require">*</span>Enter you email address here...</label>
                                    <div class="col-md-10">
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Enter you email address here...">
                                    </div>
                                </div>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="number"><span class="require">*</span>Telephone</label>
                                    <div class="col-md-10">
                                        <input name="phone" type="text" class="form-control" id="number" placeholder="Telephone">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Your Password</legend>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="pwd"><span class="require">*</span>Password:</label>
                                    <div class="col-md-10">
                                        <input name="password" type="password" class="form-control" id="pwd" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="pwd-confirm"><span class="require">*</span>Confirm Password</label>
                                    <div class="col-md-10">
                                        <input name="confirm_password" type="password" class="form-control" id="pwd-confirm" placeholder="Confirm password">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="newsletter-input">
                                <legend>Newsletter</legend>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="col-md-2 control-label">Trạng thái</label>
                                    <div class="col-md-10 radio-button">
                                         <label class="radio-inline"><input type="radio" value="0" name="status">Ẩn</label>
                                         <label class="radio-inline"><input type="radio" value="1" name="status">Hiện</label>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="terms">
                                <div class="float-md-right">
                                    <span>I have read and agree to the <a href="#" class="agree"><b>Privacy Policy</b></a></span>
                                    <input type="checkbox" name="agree" value="1"> &nbsp;
                                    <input type="submit" value="Continue" class="return-customer-btn">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Register Account End -->

@endsection
