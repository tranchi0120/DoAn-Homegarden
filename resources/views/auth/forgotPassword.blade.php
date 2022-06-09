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
                <div class="card">
                    <div class="card-header">Reset Password</div>
                    <div class="card-body">

                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('message') }}
                            </div>
                        @endif

                        <form action="{{ route('forgotpass.post') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 ">E-Mail Address</label>
                                <div class="col-md-6 ipmail">
                                    <div class="input relative">
                                        <input placeholder="Email" id="e-address" name="email" type="text"
                                            maxlength="32" />
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="sendmail">
                                <button type="submit" class="btn btn-primary">
                                    Send Mail Password Reset
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="/js/admin.js"></script>

</body>

</html>
