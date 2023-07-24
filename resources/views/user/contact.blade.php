@extends('user.layouts.master')
@section('title','Contact|Us')
@section('content')
<section class="donate">
<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Contact us</h3>
            <p class="blue-text">Contact us</p>
            <div class="card">
                <h5 class="text-center mb-4">Send us your complement</h5>
                <form action="{{route('store.contact')}}" method="POST" class="form-card">
                    @csrf
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Full name<span class="text-danger"> *</span></label> <input type="text" id="name" name="name" placeholder="Enter your full name" onblur="validate(1)"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Phone number<span class="text-danger"> *</span></label> <input type="tel" id="phone" name="phone" placeholder="Enter your Phone number" onblur="validate(2)"> </div>
                    </div>

                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Email<span class="text-danger"> *</span></label> <input type="email" id="email" name="email" placeholder="Enter your email" onblur="validate(4)"> </div>

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Massage<span class="text-danger"> *</span></label> <textarea id="details" name="details" placeholder="Enter your Massage" onblur="validate(3)"> </textarea> </div>
                     
                    </div>
                   
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn btn-primary">Send Massage</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>

@endsection