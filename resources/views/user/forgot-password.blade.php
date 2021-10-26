@extends('user.layouts.master')

@section('title', 'Lấy lại mật khẩu')


@section('main')

        <!-- Categorie Menu & Slider Area Start Here -->
        @include('user.layouts.main-page-banner')
        <!-- Categorie Menu & Slider Area End Here -->
        <!-- Breadcrumb Start -->
        @include('user.layouts.breadcrumb-area')
        <!-- Breadcrumb End -->

        <!-- Register Account Start -->
        <div class="Lost-pass ptb-100 ptb-sm-60">
            <div class="container">
                <div class="register-title">
                    <h3 class="mb-10 custom-title">register account</h3>
                    <p class="mb-10">If you already have an account with us, please login at the login page.</p>
                </div>
                <form class="password-forgot clearfix" action="mail.php">
                    <fieldset>
                        <legend>Your Personal Details</legend>
                        <div class="form-group d-md-flex">
                            <label class="control-label col-md-2" for="email"><span class="require">*</span>Enter you email address here...</label>
                            <div class="col-md-10">
                                <input type="email" class="form-control" id="email" placeholder="Enter you email address here...">
                            </div>
                        </div>
                    </fieldset>
                    <div class="buttons newsletter-input">
                        <div class="float-left float-sm-left">
                            <a class="customer-btn mr-20" href="login.html">Back</a>
                        </div>
                        <div class="float-right float-sm-right">
                            <input type="submit" value="Continue" class="return-customer-btn">
                        </div>
                    </div>
                </form>
            </div>
            <!-- Container End -->
        </div>
        <!-- Register Account End -->

@endsection