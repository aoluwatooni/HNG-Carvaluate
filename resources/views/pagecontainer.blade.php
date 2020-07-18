<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAR-VALUATE</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login-style.css') }}">

    <!-- Custom Style -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- Custom Font  deffer -->
    <link  href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4f7c0c6f83.js" crossorigin="anonymous"></script>

    @yield('header')

    <style>
        .btn-primary {
            color: #fff;
            background-color: #b32d2e !important;
            border-color: #b32d2e;
        }
        .btn-primary:hover {
            background-color: #df2915 !important;
            border-color: #b32d2e;
        }

        .btn-primary:active {
            background-color: #df2915 !important;
            border-color: #b32d2e;
        }

    </style>
</head>
<body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark nav-bar static-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('landing') }}"><img src="{{ asset('images/logo-sm.png') }}" height="30" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('landing') }}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('input') }}">Predict</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
                @guest
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link brand-btn" href="{{ route('login') }}">Sign In</a>
                            </li>
                        </ul>
                    @else
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                @endguest
            </div>
        </div>
    </nav>
    <!-- Navbar end -->

    @yield('content')



    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

    @yield('footer')

</body>
</html>
