<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home Graden</title>

    <!-- app.css tu tao them -->
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



    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('./trangchinh/css/color/green.css') }}" title="green">
    <link rel="stylesheet" type="text/css" href="{{ asset('./trangchinh/css/color/light-red.css') }}" title="light-red">
    <link rel="stylesheet" type="text/css" href="{{ asset('./trangchinh/css/color/blue.css') }}" title="blue">
    <link rel="stylesheet" type="text/css" href="{{ asset('./trangchinh/css/color/light-blue.css') }}"
        title="light-blue">
    <link rel="stylesheet" type="text/css" href="{{ asset('./trangchinh/css/color/yellow.css') }}" title="yellow">
    <link rel="stylesheet" type="text/css" href="{{ asset('./trangchinh/css/color/light-green.css') }}"
        title="light-green">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>


    <!-- Modernizer js -->
    <script src="{{ asset('./trangchinh/js/modernizr.custom.js') }}"></script>



</head>

<body class="index">
    <!-- Navigation -->

    @include('Client.menu')



    <!-- Start Home Page Slider -->
    <section id="Home">
        <!-- Carousel -->
        <div id="main-slide" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                <li data-target="#main-slide" data-slide-to="1"></li>
                <li data-target="#main-slide" data-slide-to="2"></li>
            </ol>
            <!--/ Indicators end-->

            <!-- Carousel inner -->
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" src="/trangchinh/images/b1.jpg" alt="slider">

                </div>
                <!--/ Carousel item end -->

                <div class="item">
                    <img class="img-responsive" src="/trangchinh/images/b2.jpg" alt="slider">


                </div>
                <!--/ Carousel item end -->

                <div class="item">
                    <img class="img-responsive" src="/trangchinh/images/b4.jpg" alt="slider">

                </div>
                <!--/ Carousel item end -->
            </div>
            <!-- Carousel inner end-->

            <!-- Controls -->
            <a class="left carousel-control" href="#main-slide" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
            </a>
            <a class="right carousel-control" href="#main-slide" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
            </a>
        </div>
        <!-- /carousel -->
    </section>


    <section id=" post" method="post">
        <div class="post">
            <div class="container">
                <h3 class="post-name">TIN TỨC</h3>
                <div class="post-main" method="post">
                    <div class="post-content">
                        <div class="post-top">
                            <img class="images image img-responsive" src="{{ asset('/images') }}/{{ $data->HinhAnh }}"
                                alt="">
                            <div class="post-top-right">
                                <span class="post-top-title">
                                    {{ $data->TieuDe }}
                                </span>
                                <p class="post-top-date">ngày đăng: {{ $data->NgayDang }} </p>

                            </div>
                        </div>
                        <div class="post-bottom">
                            <p class="post-bottom-content">
                                {!! $data->NoiDung !!}
                            </p>
                        </div>
                    </div>

                    <div class="post-relate">
                        <span class="post-relate-title">Các Bài Viết Liên Quan </span>
                        @foreach ($baidang as $data)
                        <form class="post-row">
                            <img class="   images img img-responsive" src="{{ asset('/images') }}/{{ $data->HinhAnh }}"
                                alt="">
                            <a href="{{ route('ct.chitiet', $data->id) }}" class="post-row-title">
                                {{ $data->TieuDe }}
                            </a>
                        </form>
                        @endforeach

                    </div>


                </div>
            </div>

        </div>

    </section>



    <style>
    .post-relate {
        width: 300px;
        background: #edf0e8;
        padding: 20px;
        height: max-content;
    }

    .post {
        margin: 80px;
        background: red;
        background: #e5e9e9;
    }

    .img {
        width: 100px;
        height: 100px;
    }

    .post-row-title:hover {
        cursor: pointer;
        color: #5BB12F;
    }

    .post-row {
        padding: 10px 0;
        border-bottom: 1px solid;
        margin-bottom: 10px;
        display: flex;

    }

    .post-row-title {
        font-weight: lighter;
        font-size: 1.5rem;
        color: black;
        padding: 10px;
        display: block;
        justify-content: center;
        text-align: center;
    }


    /* image */

    .image {
        object-fit: cover;
        height: 350px;
        width: 400px;
    }

    .post-top-title {
        color: black;
        font-weight: bold;
        font-size: 3.5rem;
    }

    .post-relate-title {
        display: block;
        font-size: 2rem;
        color: black;
    }

    .post-main {
        margin-top: 30px;
        gap: 80px
    }
    </style>
















    @include('Client.footer')














    <!-- jQuery Version 2.1.1 -->
    <script src="{{ asset('./trangchinh/js/jquery-2.1.1.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('./trangchinh/asset/js/bootstrap.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('./trangchinh/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('./trangchinh/js/classie.js') }}"></script>
    <script src="{{ asset('./trangchinh/js/count-to.js') }}"></script>
    <script src="{{ asset('./trangchinh/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('./trangchinh/js/cbpAnimatedHeader.js') }}"></script>
    <script src="{{ asset('./trangchinh/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('./trangchinh/js/jquery.fitvids.js') }}"></script>
    <script src="{{ asset('./trangchinh/js/styleswitcher.js') }}"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{ asset('./trangchinh/js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('./trangchinh/js/contact_me.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('./trangchinh/js/script.js') }}"></script>

</body>

</html>