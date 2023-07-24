@extends('user.layouts.master')
@section('title','Money Donar')
@section('content')

<section class="donate">
<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 ">
            <h3 class="bg-primary p-3 text-center" style="color: #ffff;">Money Donar Details</h3>
            <div class="card">
<div class="card-body mt-5">
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
                <p class="mb-0">Total Amount</p>
              </div>
              <div class="col">
                <p class="text-muted mb-0">{{ $display->total }} </p>
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
                <p class="mb-0">Payment Type</p>
              </div>
              <div class="col">
                <p class="text-muted mb-0">{{ $display->Paytype }}</p>
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col">
                <p class="mb-0">Acount Type</p>
              </div>
              <div class="col">
                <p class="text-muted mb-0">{{ $display->acctype }}</p>
              </div>
            </div>
            <hr>

            <div class="row">
              <div class="col">
                <p class="mb-0">Track. Id</p>
              </div>
              <div class="col">
                <p class="text-muted mb-0">{{ $display->trackid }}</p>
              </div>
            </div>
            <hr>
          </div>
</div>
</div>
</div>
</section>
 
@endsection