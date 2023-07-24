@extends('user.layouts.master')
@section('title','Buy Ticket|Successfull')
@section('content')

<section class="donate">
<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Buy Ticket Complete Successfully</h3>
            <div class="card">
              
<div class="card-body">
<h5 class="text-center mb-4">
                @if (session('success'))
        <div class="alert alert-success mt-2" role="alert">
            {{ session('success') }}
        </div>
    @endif
        </h5>

<a href="{{route('display.ticketdonar')}}" class="btn btn-primary p-3 m-3 fs-4">Click To See Your Details</a>

        
</div>
</div>
</div>
</div>
</div>

</section>
 
@endsection