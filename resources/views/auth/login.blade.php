<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home Graden | </title>

    <!-- Bootstrap -->
    {{-- <link href="/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <!-- Font Awesome -->
    <link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="/vendors/animate.css/animate.min.css" rel="stylesheet">
    {{-- <link href="/vendors/custom.css/custom.css" rel="stylesheet"> --}}

    <!-- Custom Theme Style -->
    {{-- <link href="/build/css/custom.min.css" rel="stylesheet"> --}}
    <link href="/css/admin.css" rel="stylesheet">



    {{-- link-menu --}}


    <link rel="stylesheet" href="{{ asset('./trangchinh/css/app.css') }}">
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('./trangchinh/asset/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="{{ asset('./trangchinh/css/font-awesome.min.css') }}" rel="stylesheet">


    <!-- Animate CSS -->
    <link href="{{ asset('./trangchinh/css/animate.css') }}" rel="stylesheet">

    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="{{ asset('./trangchinh/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('./trangchinh/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('./trangchinh/css/owl.transitions.css') }}">

    <!-- Custom CSS -->
    <link href="{{ asset('./trangchinh/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('./trangchinh/css/responsive.css') }}" rel="stylesheet">

    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('./trangchinh/css/color/green.css') }}">

    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>


    <!-- Modernizer js -->
    <script src="{{ asset('./trangchinh/js/modernizr.custom.js') }}"></script>





</head>

<body class="login">


    <section class="dangnhap">
        <div class="login_wrapper">
            <div class="animate form login_form">
                @if (session('success'))
                <div class="alert alert-danger thongbao">{{ session('success') }}</div>
                @endif
                <section class="login_content">
                    <form id="admin-login" method="post" action="{{ route('login') }} ">
                        @csrf
                        <h1>Login</h1>
                        <div>
                            <input type="text" class="form-control" name="email" placeholder="Email" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" name="password" placeholder="Password"
                                required="" />
                        </div>
                        <div>
                            <button class="click" type="submit" value="Login">Login</button>
                            <a class="reset_pass" href="{{ route('forgotpass.get') }}">Quên mật khẩu?</a>
                        </div>
                        <div class="separator">
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <a class="home" style="font-size: 30px" style="text-decoration: none"
                                    href="http://127.0.0.1:8000">Home
                                    Graden</a>
                            </div>
                        </div>
                    </form>

                </section>
            </div>
        </div>
    </section>



    <style>
    .thongbao {
        margin-top: 50px;
    }

    .home {
        text-decoration: none;
        display: inline-block;
        color: white;
        font-size: 30px;
    }

    .home:hover {
        color: rgb(155, 156, 170);
        text-decoration: none;

    }

    .click {
        color: #103e6c;
        background: white;
        border: none;
        padding: 9px 33px;
        border-radius: 20px;

    }

    .click:hover {
        background: #c5d5e6;
    }

    .login_content {
        margin-top: 20px;
        border-radius: 20px;
        background: #103e6c;
        color: white;
        padding: 20px;
    }

    .reset_pass {
        font-style: italic;
        color: white;
    }

    .navbar {
        background: #34495e;
    }

    .menu {
        margin-bottom: 50px;
    }

    .logo {
        color: #5BB12F;
    }
    </style>


    {{-- <script src="/js/admin.js"></script> --}}


    {{-- jsmain --}}




</body>




</html>