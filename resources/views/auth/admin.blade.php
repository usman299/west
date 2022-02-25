<!doctype html>
<html class="no-js " lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Connexion</title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset('admin/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css')}}">

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/color_skins.css')}}">
</head>
<body class="theme-black">
<div class="authentication">
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="company_detail">
                        <h4 class="logo"><img src="{{asset('admin/')}}assets/images/logo.svg" alt=""> Connexion</h4>
                        <h3>CONNEXION AU TABLEAU DE BORD WEST INDIES CARE</h3>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 offset-lg-1">
                    <div class="card-plain">
                        <div class="header">
                            <h5>Connexion</h5>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-group">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="input-group-addon"><i class="zmdi zmdi-account-circle"></i></span>
                            </div>
                            <div class="input-group">
                                <input type="password" placeholder="Mot de passe" name="password" class="form-control @error('password') is-invalid @enderror" />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                            </div>
                            <div class="footer">
                                <button type="submit" class="btn btn-primary btn-round btn-block">S'IDENTIFIER</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Jquery Core Js -->
<script src="{{asset('admin/assets/bundles/libscripts.bundle.js')}}"></script>
<script src="{{asset('admin/assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->
</body>
</html>
