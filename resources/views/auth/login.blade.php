<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>StakeField Talents - Sign In</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/authentication.css')}}">
    <link rel="stylesheet" href="{{asset('css/color_skins.css')}}">
</head>
<style>
   .theme-orange .authentication .card .header {
    background: linear-gradient(45deg, #EEE, #EEE) !important;
    }
   .ss{
    background-color: #d67a7a !important;
   }
    </style>
<body class="theme-orange">
<div class="authentication">
    <div class="card">
        <div class="body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header slideDown">
                        <div class="logo"><img src="https://www.stakefield.com/img/logo/SF-logo-black.svg" style="style=
;width: 5rem;"  alt="Nexa"></div>
                        <h1>StakeField Admin</h1>
                    
                    </div>                        
                </div>
                <form method="POST" class="col-lg-12" action="{{ route('login') }}">
                    @csrf
                <h5 class="title">Sign in to your Account</h5>
                <div class="form-group form-float">
                        <div class="form-line">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror                            
                            <label class="form-label">Username</label>
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                                        <label class="form-label">Password</label>
                        </div>
                    </div>
                    <div>
                        <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-cyan">
                        <label for="rememberme">Remember Me</label>
                    </div>                        
              
                <div class="col-lg-12">
                <button type="submit" class="btn btn-primary ss">
                                    {{ __('Login') }}
                                </button>                    
                    <!-- <a href="sign-up.html" class="btn btn-raised btn-default waves-effect">SIGN UP</a>                         -->
                </div>  </form>
                <div class="col-lg-12 m-t-20">
                    <!-- <a class="" href="forgot-password.html">Forgot Password?</a> -->
                </div>                    
            </div>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="{{asset('/bundles/libscripts.bundle.js')}}"></script>    
<script src="{{asset('/bundles/vendorscripts.bundle.js')}}"></script>
<script src="{{asset('/bundles/mainscripts.bundle.js')}}"></script>
</body>
</html>