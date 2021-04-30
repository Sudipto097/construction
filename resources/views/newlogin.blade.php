<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/minible/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Mar 2021 17:16:56 GMT -->
<head>

    <meta charset="utf-8"/>
    <title>Log In </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset("backend/assets/images/favicon.ico")}}">

    <!-- Bootstrap Css -->
    <link href="{{asset("backend/assets/css/bootstrap.min.css")}}" id="bootstrap-style" rel="stylesheet"
          type="text/css"/>
    <!-- Icons Css -->
    <link href="{{asset("backend/assets/css/icons.min.css")}}" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="{{asset("backend/assets/css/app.min.css")}}" id="app-style" rel="stylesheet" type="text/css"/>

</head>

<body class="authentication-bg">

<div class="home-btn d-none d-sm-block">
    <a href="#" class="text-dark"><i class="mdi mdi-home-variant h2"></i></a>
</div>
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <a href="#" class="mb-5 d-block auth-logo">
                        <img src="{{asset('backend/assets/images/logo-dark.png')}}" alt="" height="22" class="logo logo-dark">
                        <img src="{{asset('backend/assets/images/logo-light.png')}}" alt="" height="22" class="logo logo-light">
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card">

                    <div class="card-body p-4">
                        <div class="text-center mt-2">
                            <h5 class="text-primary">Welcome Back !</h5>
                            <p class="text-muted">Sign in </p>
                        </div>
                        <div class="p-2 mt-4">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="username">Username</label>
                                    <input id="email" class="form-control" placeholder="Enter Username" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <div class="float-end">
                                        <a href="auth-recoverpw.html" class="text-muted">Forgot password?</a>
                                    </div>
                                    <label class="form-label" for="userpassword">Password</label>
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password" placeholder="Enter password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                </div>

                                <div class="mt-3 text-end">
                                    <button class="btn btn-primary w-sm waves-effect waves-light" type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                    {{--<button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Log In
                                    </button>--}}
                                </div>

                            </form>
                        </div>

                    </div>
                </div>

                <div class="mt-5 text-center">
                    <p>©
                        <script>document.write(new Date().getFullYear())</script>
                        Minible. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                    </p>
                </div>

            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>

<!-- JAVASCRIPT -->
<script src="{{asset('backend/assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('backend/assets/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>

<script src="{{asset('backend/assets/js/app.js')}}"></script>

</body>

<!-- Mirrored from themesbrand.com/minible/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Mar 2021 17:16:56 GMT -->
</html>
