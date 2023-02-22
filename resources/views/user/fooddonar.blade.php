@extends('user.layouts.master')
@section('title','Food Donar')
@section('content')

<section class="donate">
<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3 class="bg-primary p-3 text-center" style="color: #ffff;">Food Donar Details</h3>
            
            <div class="card-body mt-5">
            <a class="btn btn-primary" href="{{ URL::to('/fooddonar/pdf') }}">Export to PDF</a>
            <div class="row">
              <div class="col">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col">
              
                <p class="text-muted mb-0">{{$display->fname }} </p>
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col">
                <p class="mb-0">Phone Number</p>
              </div>
              <div class="col">
                <p class="text-muted mb-0">{{ $display->phone }} </p>
              </div>
            </div>
          <hr>
          
           

            <div class="row">
              <div class="col">
                <p class="mb-0">Address</p>
              </div>
              <div class="col"> 
                <p class="text-muted mb-0">{{ $display->address }}</p>
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col">
                <p class="mb-0">Donation Type</p>
              </div>
              <div class="col">
                <p class="text-muted mb-0">{{ $display->dontype }} </p>
              </div>
            </div>
            <hr>

            
          </div>
</div>
</div>
</div>
</section>
 
@endsection