@extends('user.layouts.master')
@section('title','Buy|Ticket')
@section('content')
<section class="donate">
<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Buy Ticket</h3>
            <p class="blue-text">Buy tickets if you want a gift voucher</p>
            @if (session('success'))
        <div class="alert alert-success mt-2" role="alert">
            {{ session('success') }}
        </div>
    @endif
            <div class="card">
                <h5 class="text-center mb-4">Send Money 017xxxxxxx</h5>
                <form action="{{route('buyticket.store')}}" method="POST" class="form-card">
                @csrf
                    <div class="row justify-content-between text-left">
                    @if ($errors->has('fname'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Full name<span class="text-danger"> *</span></label> <input type="text" id="fname" name="fname" placeholder="Enter your full name" onblur="validate(1)"> </div>

                    @if ($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Phone number<span class="text-danger"> *</span></label> <input type="tel" id="phone" name="phone" placeholder="Enter your Phone number" onblur="validate(2)"> </div>
                    </div>

                    @if ($errors->has('total'))
                    <span class="text-danger">{{ $errors->first('total') }}</span>
                    @endif
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Ticket Price<span class="text-danger"> *</span></label> <input type="number" id="total" name="total" value="100" readonly onblur="validate(3)"></div>
                         @if ($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                    @endif
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Address<span class="text-danger"> *</span></label> <input type="text" id="address" name="address" placeholder="Enter your address" onblur="validate(4)"> </div> </div>
                        @if ($errors->has('Paytype'))
                    <span class="text-danger">{{ $errors->first('Paytype') }}</span>
                    @endif
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Payment Type<span class="text-danger"> *</span></label> <select id="Paytype" name="Paytype" onblur="validate(5)"> 
                    <option>Select One</option>
                    <option value="Bkash">Bkash</option>
                    <option value="Nogod">Nogod</option>
                    <option value="DDBL">DDBL</option>
                    </select> </div>
                    @if ($errors->has('acctype'))
                    <span class="text-danger">{{ $errors->first('acctype') }}</span>
                    @endif
                 
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Account Type<span class="text-danger"> *</span></label> <select id="acctype" name="acctype" onblur="validate(6)"> 
                    <option>Select One</option>
                    <option value="Parsonal">Parsonal</option>
                    <option value="Agent">Agent</option>
                    </select> </div> </div>
                    @if ($errors->has('trackid'))
                    <span class="text-danger">{{ $errors->first('trackid') }}</span>
                    @endif
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Track Id<span class="text-danger"> *</span></label> <input type="text" id="trackid" name="trackid" placeholder="Enter your Track Id" onblur="validate(7)"> </div></div>
                        
                   
                    </div>
                   <input type="submit" class="btn btn-primary mt-3"  value="Buy Ticket"> 
                    
                </form>
            </div>
        </div>
    </div>
</div>
</section>

@endsection