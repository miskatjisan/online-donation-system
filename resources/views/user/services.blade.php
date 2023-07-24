@extends('user.layouts.master')
@section('title','All Service')
@section('content')

<!-- OUR SERVICES -->
<section class="services">
  <div class="home-title mt-3 mb-3 p-3">
    <h2 class="text-center">Our Services</h2>
  </div>
  <div class="row">
    <div class="col-4">
    <div class="card" style="width: 18rem;">
  <img src="{{asset('images/d2.png')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Donate Your Food</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="{{route('create.fooddonate')}}" class="btn btn-primary">Donate Now</a>
  </div>
</div>
    </div>


    <div class="col-4">
    <div class="card" style="width: 18rem;">
  <img src="{{asset('images/d3.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Zakat</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="{{route('create.zakatdonate')}}" class="btn btn-primary">Zakat Now</a>
  </div>
</div>
    </div>

    <div class="col-4">
    <div class="card" style="width: 18rem;">
  <img src="{{asset('images/d4.png')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Donate Your Money</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="{{route('create.moneydonate')}}" class="btn btn-primary">Donate Now</a>
  </div>
</div>
    </div>

  </div>
</section>
<!-- END OUR SERVICES -->

@endsection