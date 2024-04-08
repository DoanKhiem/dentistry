<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Barista Cafe HTML CSS Template</title>

        <!-- CSS FILES -->                
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,400;0,600;0,700;1,200;1,700&display=swap" rel="stylesheet">
    
        <link href="{{asset('user/css/bootstrap.min.css')}}" rel="stylesheet">
    
        <link href="{{asset('user/css/bootstrap-icons.css')}}" rel="stylesheet">
    
        <link href="{{asset('user/css/vegas.min.css')}}" rel="stylesheet">
    
        <link href="{{asset('user/css/tooplate-barista.css')}}" rel="stylesheet">
    </head>
    
    <body>
        <main>
            <section class="contact-section section-padding" id="section_5">
                <div class="container">
                    <div class="d-flex flex-column align-items-center col-12">
                        <div class="col-xl-6">
                            <h2 class="text-white mb-4 pb-lg-2">Login</h2>
                        </div>
                        <form action="{{ route('user.postRegister') }}" method="post" class="custom-form contact-form col-xl-6" role="form">
                            @csrf
                            <div class="col-12">
                                <div class="col-12">
                                    <label for="name" class="form-label">Name <sup class="text-danger">*</sup></label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="">
                                </div>

                                <div class="col-12">
                                    <label for="phone" class="form-label">Phone Number <sup class="text-danger">*</sup></label>
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="">
                                </div>

                                <div class="col-12">
                                    <label for="address" class="form-label">Address <sup class="text-danger">*</sup></label>
                                    <input type="text" name="address" id="address" class="form-control" placeholder="">
                                </div>

                                <div class="col-12">
                                    <label for="password" class="form-label">Password <sup class="text-danger">*</sup></label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="">
                                </div>

                                <div class="col-12">
                                    <label for="password_confirmation" class="form-label">Password Confirm<sup class="text-danger">*</sup></label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="">
                                </div>
                            </div>

                            <div class="col-lg-5 col-12 mx-auto mt-3">
                                <button type="submit" class="form-control">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>

        <!-- JAVASCRIPT FILES -->
        <script src="{{asset('user/js/jquery.min.js')}}"></script>
        <script src="{{asset('user/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('user/js/jquery.sticky.js')}}"></script>
        <script src="{{asset('user/js/click-scroll.js')}}"></script>
        <script src="{{asset('user/js/vegas.min.js')}}"></script>
        <script src="{{asset('user/js/custom.js')}}"></script>
    </body>
</html>
