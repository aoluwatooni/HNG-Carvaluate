@extends('pagecontainer')


@section('content')

  <!-- Contact Form -->
  <div style="background: #ebebeb;" class="container-fluid h-100">
    <div class="row h-100 align-items-center d-flex justify-content-around">
        <div class="col-md-4 mr-1">
                  <h1 class="mb-6">Have Questions? We have you covered.</h1>
                  <form action="" method="post">
                      <div class="form-group">
                          <textarea name="message" class="form-control" placeholder="Message" id="" cols="10" rows="5"></textarea>
                      </div>
                      <div class="form-group">
                          <input type="email" class="form-control" required placeholder="Email">
                      </div>
                      <button class="brand-btn btn">Submit</button>
                  </form>
        </div>
        <div class="col-md-6 text-center">
            <img class="img img-fluid" src="{{ asset('images/Illustration.png') }}" alt="">
        </div>
    </div>
</div>

@endsection