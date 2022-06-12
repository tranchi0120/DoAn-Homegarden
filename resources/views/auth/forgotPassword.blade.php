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

<body class="forgotpassword">
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="card">
                    <div class="card-header">Quên Mật Khẩu</div>
                    <div class="card-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('message') }}
                            </div>
                        @endif

                        <form action="{{ route('forgotpass.post') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 ">Địa chỉ Email</label>
                                <div class="col-md-6 ipmail">
                                    <div class="input relative">
                                        <input class="email" placeholder="Email" id="e-address" name="email"
                                            type="text" maxlength="32" />
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="sendmail">
                                <button type="submit" class="btn btn-primary">
                                    Gửi Lại
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="/js/admin.js"></script>

    <style>
        .btn {
            border-radius: 9px;
            font-size: 14px;
            width: 90px;
            padding: 7px;
        }

        .email {
            font-size: 13px;
            width: 230px;
            border: none;
            background: #e1e6eb;
            padding: 6px;
        }

        .card {
            margin-top: 80px;
            width: 450px;
            padding: 10px;
            border: none;
            border-radius: 10px;
        }
    </style>
</body>

</html>
