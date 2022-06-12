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

<body class="">


    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Đặt Lại Mật Khẩu</div>
                        <div class="card-body">

                            <form action="{{ route('resetpass.post') }}" method="POST">
                                @csrf
                                <input type="hidden" name="token_reset" value="{{ $token }}">

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Mật Khẩu</label>
                                    <div class="col-md-6">
                                        <input placeholder="Nhập Mật Khẩu" type="password" id="password"
                                            class="form-control matkhau" name="password" required autofocus>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Xác Nhận
                                        Mật Khẩu</label>
                                    <div class="col-md-6">
                                        <input placeholder="Nhập Lại Mật Khẩu" type="password" id="password-confirm"
                                            class="form-control matkhau" name="password_confirmation" required
                                            autofocus>
                                        @if ($errors->has('password_confirmation'))
                                            <span
                                                class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="reset">
                                    <button type="submit" class="btn btn-primary">
                                        Lưu
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="/js/admin.js"></script>
    <style>
        .card {
            margin: 0 auto;
            border-radius: 15px;
            width: 600px;
        }


        .matkhau {
            width: 350px;
            border: none;
            background: #e5eaf0;
        }

        .login-form {
            padding: 100px;
        }
    </style>
</body>

</html>
