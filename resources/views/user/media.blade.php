@extends('user.layouts.master')
@section('title','All Service')
@section('content')


<section class="cointainer">
@foreach($medias as $media )

<div class="card">
  <div class="card-body text-center">
    <h5 class="card-title mt-3">{{$media->name}}</h5>
    <p class="card-text mt-3">{{$media->detail}}</p>
    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
  </div>
  <img class="mt-3" src="{{asset('assets/img/'.$media->image)}}" class="card-img-bottom" alt="...">
</div>
@endforeach
</section>


@endsection