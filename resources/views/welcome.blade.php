<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Car Valuate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet" type="text/css" />

            <!-- Custom Style -->
            <link rel="stylesheet" href="{{ asset('css/main.css') }}">

            <!-- Custom Font -->
            <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg navbar-dark nav-bar static-top">
            <div class="container">
              <a class="navbar-brand" href="#"><img src="{{ asset('images/logo-sm.png') }}" height="30" alt=""></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                      <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./contact.html">Contact</a>
                  </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link brand-btn" href="{{ route('login') }}">Sign In</a>
                    </li>
                </ul>
              </div>
            </div>
          </nav>
          <!-- Navbar end -->

    <!-- Hero Start -->
    <section class="hero-1-bg" style="background-image: url({{ asset('images/hero-1-bg-img.png') }})" id="home">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <h1 class="hero-1-title text-dark font-weight-bold text-shadow mb-4">Car Valuate</h1>
                    <div class="w-75 mb-5 mb-lg-0">
                        <p class="text-muted mb-5 pb-5 font-size-17">CarValuate is a Web Application that uses trained Machine Learning Models to predict Car Prices.</p>
                        <a href="{{ route('input') }}" class="btn text-white btn-primary">PREDICT</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class=" mt-5 mt-lg-0">
                        <img src="{{ asset('images/car.png') }}" alt="" class="img-fluid d-block mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->



    <!-- javascript -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/scrollspy.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <!-- feather icon -->
    <script src="{{ asset('js/feather.js') }}"></script>
    <!-- unicons icon -->
    <script src="{{ asset('js/unicons.js') }}"></script>
    <!-- Main Js -->
    <script src="{{ asset('js/landing.js') }}"></script>

</body>
</html>
