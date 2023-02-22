@extends('admin.layouts.master')
@section('title','Food Donates Edit')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Food Donates Edit</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Food Donates</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('fooddonates.index') }}">Back</a>
                </div>
                </div>
    
            <div class="ecommerce-widget">
            <div class="card">
                <div class="card-body">

                @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('fooddonates.update',$fooddonate->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row justify-content-between text-left">
                    @if ($errors->has('fname'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Full name<span class="text-danger"> *</span></label> <input type="text" id="fname" name="fname" placeholder="Enter your full name" value="{{$fooddonate->fname}}" onblur="validate(1)"> </div>

                    @if ($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Phone number<span class="text-danger"> *</span></label> <input type="tel" id="phone" name="phone" placeholder="Enter your Phone number" value="{{$fooddonate->phone}}" onblur="validate(2)"> </div>
                    </div>

                    @if ($errors->has('total'))
                    <span class="text-danger">{{ $errors->first('total') }}</span>
                    @endif
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Total Amount<span class="text-danger"> *</span></label> <input type="number" id="total" name="total" placeholder="Enter your Total Amount" value="{{$fooddonate->total}}" onblur="validate(3)"> </div>
                         @if ($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                    @endif
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Address<span class="text-danger"> *</span></label> <input type="text" id="address" name="address" placeholder="Enter your address" value="{{$fooddonate->address}}" onblur="validate(4)"> </div>

                        
                        @if ($errors->has('dontype'))
                    <span class="text-danger">{{ $errors->first('dontype') }}</span>
                    @endif

                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Donation Type<span class="text-danger"> *</span></label> <input type="text" id="dontype" name="dontype" value="{{$fooddonate->dontype}}" readonly onblur="validate(4)"> </div>

                        @if ($errors->has('volunteer'))
                    <span class="text-danger">{{ $errors->first('volunteer') }}</span>
                    @endif
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Select Volunteer<span class="text-danger"> *</span></label> <select id="volunteer" name="volunteer" onblur="validate(5)"> 
                        <option>Select one</option>
                        @foreach($volunteers as $volunteer)
                    <option value="{{$volunteer->username}}">{{$volunteer->username}}, {{$volunteer->address}}</option>
                    @endforeach
                    </select> </div>

                    <div class="row justify-content-between text-left">
                    @if ($errors->has('typesfood'))
                    <span class="text-danger">{{ $errors->first('typesfood') }}</span>
                    @endif
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Types Of Food<span class="text-danger"> *</span></label> <input type="text" id="typesfood" name="typesfood" placeholder="Enter your type of food" value="{{$fooddonate->typesfood}}" onblur="validate(5)"> </div>

                        @if ($errors->has('quantity'))
                    <span class="text-danger">{{ $errors->first('quantity') }}</span>
                    @endif

                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Quantity Of Food<span class="text-danger"> *</span></label> <input type="text" id="quantity" name="quantity" placeholder="Quantity Of Food" value="{{$fooddonate->quantity}}" onblur="validate(6)">
                </div>
                 </div>

                 <div class="row justify-content-between text-left">
                    @if ($errors->has('whenmadeit'))
                    <span class="text-danger">{{ $errors->first('whenmadeit') }}</span>
                    @endif
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">When The Food Made in<span class="text-danger"> *</span></label> <input type="text" id="whenmadeit" name="whenmadeit" placeholder="Enter When the food made in." value="{{$fooddonate->whenmadeit}}" onblur="validate(7)"> </div>
                        </div>
</div>
                   <input type="submit" class="btn btn-primary mt-3"  value="Donation Update"> 
        </form>
                </div>
            </div>   
        </div>    


</div> 
</div>
</div>
@endsection