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

    <!-- Custom Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

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
                <a class="nav-link" href="#">Sign Up</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link brand-btn" href="#">Sign In</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar end -->

    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-md-5">
                <h2 class="mb-5" style="color: #b32d2e;">Please Input Car Data</h2>
                <form method="POST" action="{{ route('sendpredict') }}">
                    @csrf
                    <div class="form-group">
                      <label for="carmodel">Car Model</label>
                      <input required type="text" name="carmodel" class="form-control" id="carmodel"  placeholder="Enter Car Model">
                    </div>

                    <div class="form-group">
                        <label for="year">Year of Purchase</label>
                        <input required type="number" name="Year" min="1990" max="2020" id="year" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="fueltype">Fuel Type</label>
                        <select required name="FuelType" class="form-control" id="fueltype">
                            <option value="0">Compressed Natural Gas</option>
                            <option value="1">Diesel</option>
                            <option value="2">Petrol</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="transmission">Transmission Type</label>
                        <select required name="TransmissionType" class="form-control" id="transmission">
                            <option value="0">Manual</option>
                            <option value="1">Automatic</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="mileage">Car Mileage (in Km)</label>
                        <input required type="" name="Kilometers_Driven" class="form-control" id="mileage" aria-describedby="mileageHelp" placeholder="Enter Mileage">
                        <small id="mileageHelp" class="form-text text-muted">Please input in figures</small>
                    </div>

                    <div class="form-group">
                        <label for="seats">Number of Seats</label>
                        <input required type="number" name="Seats" min="2" max="40" id="seats" class="form-control">
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
            <div class="col-md-7">
                <img class="img img-fluid" src="{{ asset('images/dashboard.png') }}" alt="">
            </div>
        </div>
    </div>


<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

</body>
</html>