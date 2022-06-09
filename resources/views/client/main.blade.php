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
    <link rel="stylesheet" type="text/css" href="{{ asset('./trangchinh/css/color/light-red.css') }}"
        title="light-red">
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


    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="index">





    <!-- Navigation -->

    @include('Client.menu')



    <!-- Start Home Page Slider -->


    @include('Client.slider')

    <!-- Start Latest News Section -->

    <section id="news" class="latest-news-section">
        @yield('content-tintuc')
    </section>




    <section class="area">
        @yield('content-khu')
    </section>









    <section id="tree" class="latest-news-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title  ">
                        <h3 class="news">Cây Nông Nghiệp</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="latest-news">
                    <div class="col-md-10 ">
                        <div class="latest-post tree-main ">
                            <img src="./trangchinh/images/about-01.jpg" class="img-responsive area-img" alt="">
                            <h4><a class="tree-title" href="#">Tên Cây</a></h4>
                            <div class="post-details">
                            </div>
                            <p class="tree-extra">Loại Cây </p>
                            <a href="./layouts/agricultural.html" class="btn btn-primary tree-btn">ĐỌc Thêm</a>

                        </div>

                    </div>
                    <div class="col-md-10">
                        <div class="latest-post tree-main ">
                            <img src="./trangchinh/images/about-01.jpg" class="img-responsive area-img" alt="">
                            <h4><a class="tree-title" href="#">Tên Cây</a></h4>
                            <div class="post-details">
                            </div>
                            <p class="tree-extra">Loại Cây </p>
                            <a href="./layouts/agricultural.html" class="btn btn-primary tree-btn">ĐỌc Thêm</a>

                        </div>

                    </div>
                    <div class="col-md-10">
                        <div class="latest-post tree-main ">
                            <img src="./trangchinh/images/about-01.jpg" class="img-responsive area-img" alt="">
                            <h4><a class="tree-title" href="#">Tên Cây</a></h4>
                            <div class="post-details">
                            </div>
                            <p class="tree-extra">Loại Cây </p>
                            <a href="./layouts/agricultural.html" class="btn btn-primary tree-btn">ĐỌc Thêm</a>

                        </div>

                    </div>
                    <div class="col-md-10">
                        <div class="latest-post tree-main ">
                            <img src="./trangchinh/images/about-01.jpg" class="img-responsive area-img" alt="">
                            <h4><a class="tree-title" href="#">Tên Cây</a></h4>
                            <div class="post-details">
                            </div>
                            <p class="tree-extra">Loại Cây </p>
                            <a href="./layouts/agricultural.html" class="btn btn-primary tree-btn">ĐỌc Thêm</a>

                        </div>

                    </div>


                </div>
            </div>
    </section>




    <section id="tree " class="latest-news-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title ">
                        <h3 class="news">Cây Ăn Trái</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="latest-news">
                    <div class="col-md-10 ">
                        <div class="latest-post tree-main ">
                            <img src="./trangchinh/images/about-01.jpg" class="img-responsive area-img" alt="">
                            <h4><a class="tree-title" href="#">Tên Cây</a></h4>
                            <div class="post-details">
                            </div>
                            <p class="tree-extra">Loại Cây </p>
                            <a href="./layouts/fruit.html" class="btn btn-primary tree-btn">ĐỌc Thêm</a>

                        </div>

                    </div>
                    <div class="col-md-10 ">
                        <div class="latest-post tree-main ">
                            <img src="./trangchinh/images/about-01.jpg" class="img-responsive area-img" alt="">
                            <h4><a class="tree-title" href="#">Tên Cây</a></h4>
                            <div class="post-details">
                            </div>
                            <p class="tree-extra">Loại Cây </p>
                            <a href="./layouts/fruit.html" class="btn btn-primary tree-btn">ĐỌc Thêm</a>

                        </div>

                    </div>
                    <div class="col-md-10 ">
                        <div class="latest-post tree-main ">
                            <img src="./trangchinh/images/about-01.jpg" class="img-responsive area-img" alt="">
                            <h4><a class="tree-title" href="#">Tên Cây</a></h4>
                            <div class="post-details">
                            </div>
                            <p class="tree-extra">Loại Cây </p>
                            <a href="./layouts/fruit.html" class="btn btn-primary tree-btn">ĐỌc Thêm</a>

                        </div>

                    </div>
                    <div class="col-md-10 ">
                        <div class="latest-post tree-main ">
                            <img src="./trangchinh/images/about-01.jpg" class="img-responsive area-img" alt="">
                            <h4><a class="tree-title" href="#">Tên Cây</a></h4>
                            <div class="post-details">
                            </div>
                            <p class="tree-extra">Loại Cây </p>
                            <a href="./layouts/fruit.html" class="btn btn-primary tree-btn">ĐỌc Thêm</a>

                        </div>

                    </div>
                    <div class="col-md-10 ">
                        <div class="latest-post tree-main ">
                            <img src="images/about-01.jpg" class="img-responsive tree-image" alt="">
                            <h4><a class="tree-title" href="#">Tên Cây</a></h4>
                            <div class="post-details">
                            </div>
                            <p class="tree-extra">Loại Cây </p>
                            <a href="./layouts/fruit.html" class="btn btn-primary tree-btn">ĐỌc Thêm</a>

                        </div>

                    </div>
                </div>
            </div>
    </section>



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
