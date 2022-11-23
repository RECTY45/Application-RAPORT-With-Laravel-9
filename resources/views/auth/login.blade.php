<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$name}} | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Google Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon.ico')}}">
    <!-- Stylesheet -->

    <link rel="stylesheet" href="{{ asset('assets/vendors/css/base/elisyam-1.5.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/base/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel/owl.carousel.min.css')}}">
</head>

<body class="bg-white">
    <!-- Begin Container -->
    <div class="container-fluid no-padding h-100">
        <div class="row flex-row h-100 bg-white">
            <!-- Begin Left Content -->
            <div class="col-xl-8 col-lg-6 col-md-5 no-padding">
                <div class="elisyam-bg background-01" style="background: url(assets/img/background/background-01.jpg) no-repeat;background-size: cover;">
                    <div class="elisyam-overlay overlay-01"></div>
                    <div class="authentication-col-content mx-auto">
                        <h1 class="gradient-text-01">
                            Selamat Datang
                        </h1>
                    </div>
                </div>
            </div>
            <!-- End Left Content -->
            <!-- Begin Right Content -->
            <div class="col-xl-4 col-lg-6 col-md-7 my-auto no-padding">
                <!-- Begin Form -->
                <div class="authentication-form mx-auto">
                    <div class="logo-centered">
                        <a href="">
                            <img src="{{asset('assets/img/favicon.ico')}}" alt="logo">
                        </a>
                    </div>
                    <h3>Log In</h3>
                    <form class="user" method="POST">
                        <div class="group material-input">
                            <input type="text" name="username" id="username" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Username</label>
                        </div>
                        <div class="group material-input">
                            <input type="password" name="password" id="password" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Password</label>
                        </div>

                        <div class="row">
                            <div class="col text-left">
                                <div class="styled-checkbox">
                                    <input type="checkbox" name="checkbox" id="remember">
                                    <label for="remember">Remember me</label>
                                </div>
                            </div>
                            <div class="col text-right">
                                <a href="#">Forgot Password ?</a>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-gradient-04 btn-user btn-block">
                            Login
                        </button>
                    </form>
                    <div class="register">
                        Don't have an account?
                        <br>
                        <a href="#">Create an account</a>
                    </div>
                </div>
                <!-- End Form -->
            </div>
            <!-- End Right Content -->
        </div>
        <!-- End Row -->
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- End Page Vendor Js -->
    <!-- Begin Page Snippets -->
    <script src="../assets/js/components/tabs/animated-tabs.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
    <script>
    </script>
</body>

</html>