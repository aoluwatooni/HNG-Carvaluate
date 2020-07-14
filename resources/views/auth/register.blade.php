<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAR-VALUATE</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login-style.css') }}">
</head>
<body>
    <div class="form-body" class="container-fluid">
        <div class="website-logo">
            <a href="{{ route('landing') }}">
                <div class="">
                    <img class="logo-size" src="{{ asset('images/logo.png') }}" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <h3>Get more things done with Loggin platform.</h3>
                    <p>Access to the most powerfull tool in the entire design and web industry.</p>
                    <img src="{{ asset('images/graphic4.svg') }}" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="{{ route('landing') }}">
                                <div class="">
                                    <img class="logo-size" src="{{ asset('images/logo.png') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="page-links">
                            <a href="{{ route('login') }}">Login</a><a href="{{ route('register') }}" class="active">Register</a>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                             <input id="email" type="email" class="form-control mt-3 @error('email') is-invalid @enderror" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email">

                             @error('email')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                            <input id="password" type="password" class="form-control mt-3 @error('password') is-invalid @enderror" placeholder="Choose your password" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input id="password-confirm" type="password" class="form-control mt-3" placeholder="Retype your password" name="password_confirmation" required autocomplete="new-password">
                            <div class="form-button">
                                 <button type="submit" class="btn btn-primary">
                                     {{ __('Register') }}
                                 </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

</body>
</html>

