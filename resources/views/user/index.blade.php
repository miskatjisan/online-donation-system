@extends('user.layouts.master')
@section('title','Donetion|Final Project')
@section('content')

<!-- slider/event -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/d1.jpg') }}" class="d-block w-100" alt="Join Volunteer">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/d2.png') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/d3.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/d4.png') }}" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
<!-- end slider/event -->
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

<!-- About Us -->
<section class="about">
<div class="home-title mt-3 mb-3 p-3">
    <h2 class="text-center">About Us</h2>
  </div>
  <div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('images/d2.png')}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Donate Your Food</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('images/d3.jpg')}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Zakat</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('images/d4.png')}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Donate Your Money</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

</section>
<!-- End About Us -->


@endsection