<!doctype html>
<html lang="en">


<!-- Mirrored from demo.riktheme.com/xvito/side-menu/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Sep 2020 07:14:45 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Required meta tags -->

    <title>Login</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets')}}/img/cropped-Fav.-UPI-150x150.png">

    <!-- Master Stylesheet CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/style.css">

</head>

<body class="login-area">


    <!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
    <div class="main-content- h-100vh">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="hero">
                    <div class="cube"></div>
                    <div class="cube"></div>
                    <div class="cube"></div>
                    <div class="cube"></div>
                    <div class="cube"></div>
                    <div class="cube"></div>
                </div>
                <div class="col-sm-10 col-md-8 col-lg-5">
                    <!-- Middle Box -->
                    <div class="middle-box">
                        <div class="card">
                            <div class="card-body p-4">

                                <!-- Logo -->
                                <h4 class="font-24 mb-30">Login.</h4>
                                @include('admin/templates/feedback')
                                <form 
                                action="{{url('login')}}"
                                method="POST">
                                {{ csrf_field() }}
                                    <div class="form-group">
                                        <input class="form-control login" type="email" id="emailaddress" required="" placeholder="Enter your email" name="email">
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control login" type="password" required="" id="password" placeholder="Enter your password" name="password">
                                    </div>

                                    <div class="form-group mb-0">
                                        <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                                    </div>


                                </form>

                                <!-- end card -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======================================
    ********* Page Wrapper Area End ***********
    ======================================= -->

    <!-- Plugins Js -->
    <script src="{{asset('assets')}}/admin/js/jquery.min.js"></script>
    <script src="{{asset('assets')}}/admin/js/popper.min.js"></script>
    <script src="{{asset('assets')}}/admin/js/bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/admin/js/bundle.js"></script>

    <!-- Active JS -->
    <script src="j{{asset('assets')}}/admin/s/default-assets/active.js"></script>



<!-- Mirrored from demo.riktheme.com/xvito/side-menu/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Sep 2020 07:14:45 GMT -->
</html>