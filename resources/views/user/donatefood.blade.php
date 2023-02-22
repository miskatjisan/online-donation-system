@extends('user.layouts.master')
@section('title','Donation|Food')
@section('content')
<section class="donate">
<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Donate Food</h3>
            <p class="blue-text">Donate Food Now</p>
            <div class="card">
                <h5 class="text-center mb-4">Donate for food now</h5>
                <form class="form-card" action="{{route('fooddonate.store')}}" method="POST">
                    @csrf
                    <div class="row justify-content-between text-left">
                    @if ($errors->has('fname'))
                    <span class="text-danger">{{ $errors->first('fname') }}</span>
                    @endif
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Full name<span class="text-danger"> *</span></label> <input type="text" id="fname" name="fname" placeholder="Enter your full name" onblur="validate(1)"> </div>
                        @if ($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Phone number<span class="text-danger"> *</span></label> <input type="tel" id="phone" name="phone" placeholder="Enter your Phone number" onblur="validate(2)"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                    @if ($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                    @endif
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Address<span class="text-danger"> *</span></label> <input type="text" id="address" name="address" placeholder="Enter your address" onblur="validate(3)"> </div>

                        @if ($errors->has('dontype'))
                    <span class="text-danger">{{ $errors->first('dontype') }}</span>
                    @endif

                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Donation Type<span class="text-danger"> *</span></label> <input type="text" id="dontype" name="dontype" placeholder="Food" value="Food" readonly onblur="validate(4)"> </div>
                 </div>
<!--  -->
                 <div class="row justify-content-between text-left">
                    @if ($errors->has('typesfood'))
                    <span class="text-danger">{{ $errors->first('typesfood') }}</span>
                    @endif
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Types Of Food<span class="text-danger"> *</span></label> <input type="text" id="typesfood" name="typesfood" placeholder="Enter your type of food" onblur="validate(5)"> </div>

                        @if ($errors->has('quantity'))
                    <span class="text-danger">{{ $errors->first('quantity') }}</span>
                    @endif

                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Quantity Of Food<span class="text-danger"> *</span></label> <input type="text" id="quantity" name="quantity" placeholder="Quantity Of Food" onblur="validate(6)">
                </div>
                 </div>

                 <div class="row justify-content-between text-left">
                    @if ($errors->has('whenmadeit'))
                    <span class="text-danger">{{ $errors->first('whenmadeit') }}</span>
                    @endif
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">When The Food Made in<span class="text-danger"> *</span></label> <input type="text" id="whenmadeit" name="whenmadeit" placeholder="Enter When the food made in." onblur="validate(7)"> </div>
                        </div>

                    </div>
                   
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn btn-primary">Donate</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>

@endsection