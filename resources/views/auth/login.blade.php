@extends('pagecontainer')


@section('content')
<div class="form-body" class="container-fluid">
    <div class="website-logo">
        <a href="{{ route('landing') }}">
            <div class="">
                <img class="logo-size" src="{{ asset('images/logo.png') }}" alt="">
            </div>
        </a>
    </div>
    <div class="row no-gutters">
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
                                <img class="logo-size w-100" src="{{ asset('images/logo.png') }}" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="page-links">
                        <a href="{{ route('login') }}" class="active">{{ __('Login') }}</a><a href="{{ route('register') }}">Register</a>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="E-mail Address" required>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input class="form-control mt-3 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        <div class="form-button">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
