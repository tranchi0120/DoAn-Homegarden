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
    <link href="/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    {{-- <link href="/build/css/custom.min.css" rel="stylesheet"> --}}
    <link href="/css/admin.css" rel="stylesheet">









</head>

<body class="login">


    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                @if (session('message'))
                    <div class="alert alert-danger">{{ session('message') }}</div>
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
    </div>



    <style>
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
            border-radius: 20px;
            width: 500px;
            background: #103e6c;
            color: white;
            padding: 20px;
        }

        .reset_pass {
            font-style: italic;
            color: white;
        }
    </style>


    <script src="/js/admin.js"></script>



</body>




</html>
