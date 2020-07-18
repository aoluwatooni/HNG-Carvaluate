@extends('pagecontainer')

@section('content')
<div class="form-body" class="container-fluid">
    <div class="website-logo">
        <a href="{{ route('landing') }}">
            <div class="">
                <img class="logo-size" src="{{ asset('images/logo-sm.png') }}" alt="">
            </div>
        </a>
    </div>
    <div class="row">
        <div class="img-holder">
            <div class="bg"></div>
            <div class="info-holder">
                <h3>Predict Your Used Car Price with Carvaluate.</h3>
                <!-- <p>Access to the most powerfull tool in the entire design and web industry.</p> -->
                <img src="{{ asset('images/graphic4.svg') }}" alt="">
            </div>
        </div>
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <div class="website-logo-inside">
                        <a href="{{ route('landing') }}">
                            <div class="">
                                <img class="logo-size w-100" src="{{ asset('images/logo-sm.png') }}" alt="">
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
@endsection
