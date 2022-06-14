<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('../themes/docs/images/favicon.ico') }}" type="image/ico" />
    <link rel="stylesheet" href="../themes/image">

    <title>Home Graden</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap -->
    <link href="{{ asset('../themes/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('../themes/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('../themes/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('../themes/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{ asset('../themes/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}"
        rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('../themes/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('../themes/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('../themes/build/css/custom.min.css') }}" rel="stylesheet">
    <link href="{{ asset('../themes/build/css/adminstyle.css') }}" rel="stylesheet">
    {{-- <link href="{{asset('../themes/css/custom.css')}}" rel="stylesheet"> --}}

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


    <link href="/css/admin.css" rel="stylesheet">
    <link href="/css/custom-ct.css" rel="stylesheet">
    {{-- gg font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap"
        rel="stylesheet">


    <script src="{{ asset('admin/plugins/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('admin/plugins/select2/dist/js/select2.js') }}"></script>
    <script src="{{ asset('admin/plugins/iCheck/icheck.js') }}"></script>

    {{-- sweetalert2 --}}
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"
        integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>






</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            @include('partials.slider')
            @include('partials.flash-message')
            <!-- top navigation -->
            @include('partials.header')
            @include('sweetalert::alert')
            @include('sweet::alert')
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <!-- top tiles -->
                @yield('content')

                @yield('css')
                @yield('jschart')

            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>

                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>
    @yield('scripts')
    <!-- Modernizer JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://demo.hasthemes.com/ruiz-preview/ruiz/assets/js/vendor/bootstrap.min.js"></script>
    <!-- jQuery -->
    <script src="{{ asset('../themes/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('../themes/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('../themes/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('../themes/vendors/nprogress/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('../themes/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- gauge.js -->
    <script src="{{ asset('../themes/vendors/gauge.js/dist/gauge.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('../themes/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('../themes/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Skycons -->
    <script src="{{ asset('../themes/vendors/skycons/skycons.js') }}"></script>
    <!-- Flot -->
    <script src="{{ asset('../themes/vendors/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('../themes/vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('../themes/vendors/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('../themes/vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('../themes/vendors/Flot/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('../themes/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('../themes/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('../themes/vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script src="{{ asset('../themes/vendors/DateJS/build/date.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('../themes/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
    <script src="{{ asset('../themes/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('../themes/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('../themes/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('../themes/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('../themes/build/js/custom.js') }}"></script>
    <script src="{{ asset('../themes/build/js/custom-ct.js') }}"></script>



    <script src="./js/admin.js"></script>
    <script src="./js/custom-ct.js"></script>





    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- bang ghi chu --}}
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin">
        < /scrip>

        <
        script >
            tinymce.init({
                selector: 'textarea#editor',
                skin: 'bootstrap',
                plugins: 'lists, link, image, media',
                toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help',
                menubar: false,
            });
    </script>

    <script>
        var soluong, gianhap = 0;
        $('#soluong').on('change', function() {
            soluong = $(this).val();
            tongso(soluong, gianhap);
        });
        $('#gianhap').on('change', function() {
            gianhap = $(this).val();
            tongso(soluong, gianhap);
        });

        function tongso(sl, gn) {
            $('#tongtien').val(sl * gn);
        }
    </script>



    <script>
        var soluong, giaxuat = 0;
        $('#soluong').on('change', function() {
            soluong = $(this).val();
            tongso(soluong, giaxuat);
        });
        $('#giaxuat').on('change', function() {
            giaxuat = $(this).val();
            tongso(soluong, giaxuat);
        });

        function tongso(sl, gx) {
            $('#tongtien').val(sl * gx);
        }
    </script>






    @yield('scripts')
    @yield('js')
    @yield('jscharts')



</body>

</html>
