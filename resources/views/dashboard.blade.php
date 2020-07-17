<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAR-VALUATE</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login-style.css') }}">

    <style>
        .btn-primary {
            color: #fff;
            background-color: #b32d2e;
            border-color: #b32d2e;
        }
    </style>
</head>
<body>


    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-md-5">
                <h2 class="mb-5">Please Input Car Data</h2>
                <form>
                    <div class="form-group">
                      <label for="carmodel">Car Model</label>
                      <input type="text" class="form-control" id="carmodel"  placeholder="Enter Car Model">
                    </div>
                    <div class="form-group">
                        <label for="yearofpurchase">Year of Purchase</label>
                        <select class="form-control" id="yearofpurchase">
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="transmission">Transmission Type</label>
                        <select class="form-control" id="transmission">
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="fueltype">Fuel Type</label>
                        <select class="form-control" id="fueltype">
                            <option>1</option>
                            <option>2</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="mileage">Car Mileage (in Km)</label>
                        <input type="text" class="form-control" id="mileage" aria-describedby="mileageHelp" placeholder="Enter Mileage">
                        <small id="mileageHelp" class="form-text text-muted">Please input in figures</small>
                    </div>
                    <div class="form-group">
                        <label for="seats">Number of Seats</label>
                        <select class="form-control" id="seats">
                            <option>1</option>
                            <option>2</option>
                        </select>
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
