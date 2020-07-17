@extends('pagecontainer')

@section('content')
<div class="container h-100">
    <div class="row h-100 align-items-center">
        <div class="col-md-5">
            <h2 class="mb-5" style="color: #b32d2e;">ESTIMATED PRICE IS:</h2>
            <h3> &#8358;  {{ number_format($result, 2) }}</h3>
        </div>
        <div class="col-md-7">
            <img class="img img-fluid" src="{{ asset('images/dashboard.png') }}" alt="">
        </div>
    </div>
</div>

@endsection
