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
                    <img class="img-responsive" src="../trangchinh/images/b1.jpg" alt="slider">

                </div>
                <!--/ Carousel item end -->

                <div class="item">
                    <img class="img-responsive" src="../trangchinh/images/b2.jpg" alt="slider">
                </div>
                <!--/ Carousel item end -->
                <div class="item">
                    <img class="img-responsive" src="../trangchinh/images/b4.jpg" alt="slider">

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





    @section('content-news')
    <section id="news" class="latest-news-section">
        <div enctype="multipart/form-data" class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title  ">
                        <h3 class="news">Tin Tức</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="group">
                    @foreach ($baidang as $data)
                    <div class="col-md-12">
                        <div class="latest-post">
                            <div class="khunghinh">
                                <img class="img img-responsive" src="{{ asset('/images') }}/{{ $data->HinhAnh }}"
                                    alt="">
                            </div>

                            <h4 class="tieude"><a href="{{ route('ct.chitiet', $data->id) }}">{{ $data->TieuDe }}</a>
                            </h4>
                            <div class="post-details">
                                <span class="date"> {{ $data->NgayDang }} </span>
                            </div>
                            <div class="text"> {!! $data->NoiDung !!} </div>
                            <a href="{{ route('ct.chitiet', $data->id) }}" class="btn btn-primary">Đọc Thêm</a>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>


    <style>
    .text {
        padding: 8px 0;
        width: 350px;
        overflow: hidden;
        text-overflow: ellipsis;
        line-height: 1.5rem;
        -webkit-line-clamp: 3;
        height: 75px;
        display: -webkit-box;
        -webkit-box-orient: vertical;
    }

    .btn {
        margin-top: 8px;
    }

    .img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .group {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .group-row {
        width: 100%;
    }

    .khunghinh {
        width: 350px;
        height: 250px;
    }

    .tieude {
        width: 300px;
        height: 70px;
    }
    </style>



    {{-- <style>
            .hinh {
                object-fit: none;
                border-radius: 20px 20px 0 0;
            }

            .group {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 20px;
            }

            .group-row {
                width: 100%;
            }
        </style> --}}













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