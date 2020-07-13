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
                <div class="logo">
                    <img class="logo-size" src="{{ asset('images/logo-light.svg') }}" alt="">
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
                                <div class="logo">
                                    <img class="logo-size" src="{{ asset('images/logo-light.svg') }}" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="page-links">
                            <a href="{{ route('newlogin') }}">Login</a><a href="{{ route('newregister') }}" class="active">Register</a>
                        </div>
                        <form>
                            <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Register</button>
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

