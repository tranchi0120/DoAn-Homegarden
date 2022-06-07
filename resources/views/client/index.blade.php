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
    <link rel="stylesheet" href="./css/app.css">
    <!-- Bootstrap Core CSS -->
    <link href="./trangchu/asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="./trangchu/css/font-awesome.min.css" rel="stylesheet">


    <!-- Animate CSS -->
    <link href="./trangchu/css/animate.css" rel="stylesheet">

    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">

    <!-- Custom CSS -->
    <link href="./trangchu/css/style.css" rel="stylesheet">
    <link href="./trangchu/css/responsive.css" rel="stylesheet">

    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="./trangchu/css/color/green.css">



    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="css/color/green.css" title="green">
    <link rel="stylesheet" type="text/css" href="css/color/light-red.css" title="light-red">
    <link rel="stylesheet" type="text/css" href="css/color/blue.css" title="blue">
    <link rel="stylesheet" type="text/css" href="css/color/light-blue.css" title="light-blue">
    <link rel="stylesheet" type="text/css" href="css/color/yellow.css" title="yellow">
    <link rel="stylesheet" type="text/css" href="css/color/light-green.css" title="light-green">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>


    <!-- Modernizer js -->
    <script src="./trangchu/js/modernizr.custom.js"></script>




</head>

<body class="index">
    @include('client.header')








    <section id="news" class="latest-news-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title  ">
                        <h3 class="news">Tin Tức</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="latest-news">
                    <div class="col-md-12">
                        <div class="latest-post">
                            <img src="images/about-01.jpg" class="img-responsive" alt="">
                            <h4><a href="#">Tiêu Đề</a></h4>
                            <div class="post-details">
                                <span class="date"><strong>31</strong> <br>Dec , 2014</span>
                            </div>
                            <p>nội dung: Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                doloremque laudantium, totam rem ape </p>
                            <a href="./layouts/news.html" class="btn btn-primary">ĐỌc Thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="area">
        <div class="container">
            <div class="area-main">
                <div class="area-top">
                    <div class="col-md-12">
                        <div>
                            <h3 class="area-title">Khu Cây Trồng</h3>
                        </div>
                    </div>
                </div>
                <div class="area-row">
                    <div class=" area-group">
                        <img src="images/about-01.jpg" class="img-responsive area-img" alt="">
                        <span class="area-name">Tên Khu</span>
                        <p class="area-group-title"> Loại Cây: </p>
                        <p class="area-group-title"> Tên Cây:</p>
                        <p class="area-group-title"> Số Lượng: </p>
                        <p class="area-group-title"> Tình Trạng: </p>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section id="tree agricultural" class="latest-news-section">
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
                            <img src="images/about-01.jpg" class="img-responsive tree-image" alt="">
                            <h4><a class="tree-title" href="#">Tên Cây</a></h4>
                            <div class="post-details">
                            </div>
                            <p class="tree-extra">Loại Cây </p>
                            <a href="./layouts/agricultural.html" class="btn btn-primary tree-btn">ĐỌc Thêm</a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>





    <section id="tree fruit" class="latest-news-section">
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









    @include('client.footer')


    <div id="loader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>



    <!-- jQuery Version 2.1.1 -->
    <script src="js/jquery-2.1.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="asset/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="./trangchu/js/jquery.easing.1.3.js"></script>
    <script src="./trangchu/js/classie.js"></script>
    <script src="./trangchu/js/count-to.js"></script>
    <script src="./trangchu/js/jquery.appear.js"></script>
    <script src="./trangchu/js/cbpAnimatedHeader.js"></script>
    <script src="./trangchu/js/owl.carousel.min.js"></script>
    <script src="./trangchu/js/jquery.fitvids.js"></script>
    <script src="./trangchu/js/styleswitcher.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="./trangchu/js/jqBootstrapValidation.js"></script>
    <script src="./trangchu/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/script.js"></script>

</body>

</html>
