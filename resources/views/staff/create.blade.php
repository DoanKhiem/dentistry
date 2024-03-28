<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Thêm mới nhân viên</title>
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
                <div class="col-ml-12">
                    <div class="row">
                        <!-- Textual inputs start -->
                        <div class="col-12 mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Textual inputs</h4>
                                    <p class="text-muted font-14 mb-4">Here are examples of <code>.form-control</code> applied to each textual HTML5 <code>&lt;input&gt;</code> <code>type</code>.</p>
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label">Text</label>
                                        <input class="form-control" type="text" value="Carlos Rath" id="example-text-input">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-search-input" class="col-form-label">Search</label>
                                        <input class="form-control" type="search" value="Where is google office" id="example-search-input">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email-input" class="col-form-label">Email</label>
                                        <input class="form-control" type="email" value="name@example.com" id="example-email-input">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-url-input" class="col-form-label">URL</label>
                                        <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-tel-input" class="col-form-label">Telephone</label>
                                        <input class="form-control" type="tel" value="+880-1233456789" id="example-tel-input">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword" class="">Password</label>
                                        <input type="password" class="form-control" id="inputPassword" value="inputPassword" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-number-input" class="col-form-label">Number</label>
                                        <input class="form-control" type="number" value="42" id="example-number-input">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-datetime-local-input" class="col-form-label">Date and time</label>
                                        <input class="form-control" type="datetime-local" value="2018-07-19T15:30:00" id="example-datetime-local-input">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-date-input" class="col-form-label">Date</label>
                                        <input class="form-control" type="date" value="2018-03-05" id="example-date-input">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-month-input" class="col-form-label">Month</label>
                                        <input class="form-control" type="month" value="2018-05" id="example-month-input">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-week-input" class="col-form-label">Week</label>
                                        <input class="form-control" type="week" value="2018-W32" id="example-week-input">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-time-input" class="col-form-label">Time</label>
                                        <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Select</label>
                                        <select class="form-control">
                                            <option>Select</option>
                                            <option>Large select</option>
                                            <option>Small select</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-form-label">Custom Select</label>
                                        <select class="custom-select">
                                            <option selected="selected">Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-text-input-lg" class="col-form-label">Large</label>
                                        <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" id="example-text-input-lg">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-text-input-sm" class="col-form-label">Small</label>
                                        <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" id="example-text-input-sm">
                                    </div>
                                    <div class="form-group has-primary">
                                        <label for="inputHorizontalPrimary" class="col-form-label">Email</label>
                                        <input type="email" class="form-control form-control-primary" id="inputHorizontalPrimary" placeholder="name@example.com">
                                        <div class="form-control-feedback">Primary! You've done it.</div>
                                        <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                    </div>
                                    <div class="form-group has-warning">
                                        <label for="inputHorizontalWarning" class="col-form-label">Email</label>
                                        <input type="email" class="form-control form-control-warning" id="inputHorizontalWarning" placeholder="name@example.com">
                                        <div class="form-control-feedback">Shucks, check the formatting of that and try again.
                                        </div><small class="form-text text-muted">Example help text that remains unchanged.
                                        </small>
                                    </div>
                                    <div class="form-group mb-0 has-danger">
                                        <label for="inputHorizontalDnger" class="col-form-label">Email</label>
                                        <input type="email" class="form-control form-control-danger" id="inputHorizontalDnger" placeholder="name@example.com">
                                        <div class="form-control-feedback">Sorry, that username's taken. Try another?</div><small class="form-text text-muted">Example help text that remains unchanged.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Textual inputs end -->


                        <!-- button with dropdown start -->
                        <div class="col-12 mt-5">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Buttons with dropdowns</h4>
                                    <p class="text-muted mb-3">For even more customization and cross browser consistency, use our completely custom form elements to replace the browser defaults. They’re built on top of semantic and accessible markup, so they’re solid replacements for any default form control.</p>
                                    <form action="#">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div role="separator" class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div role="separator" class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div role="separator" class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                        </div>
                                        <div class="input-group">
                                            <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                    <div role="separator" class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- button with dropdown end -->
                    </div>
                </div>

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
