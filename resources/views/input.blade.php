@extends('pagecontainer')

@section('content')

<div class="container h-100">
    <div class="row h-100 align-items-center d-flex justify-content-around">
        <div class="col-md-5">
            <h2 class="mb-5" style="color: #b32d2e;">Please Input Car Data</h2>
            <form method="POST" action="{{ route('sendpredict') }}">
                @csrf
                <div class="form-group">
                  <label for="carmodel">Car Model</label>
                  <input required type="text" name="Model" class="form-control" id="carmodel"  placeholder="Enter Car Model">
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
@endsection
