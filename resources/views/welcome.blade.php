    @extends('pagecontainer')

    @section('header')
    <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet" type="text/css" />

    @endsection

   @section('content')


    <!-- Hero Start -->
    <section class="hero-1-bg h-100" style="background-image: url({{ asset('images/hero-1-bg-img.png') }})" id="home">
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
   @endsection



    @section('footer')
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
    @endsection
