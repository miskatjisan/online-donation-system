@extends('admin.layouts.master')
@section('title','Zakat Donates Edit')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Zakat Donates Edit</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Zakat Donates</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('zakatdonates.index') }}">Back</a>
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
        <form action="{{ route('zakatdonates.update',$zakatdonate->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row justify-content-between text-left">
                    @if ($errors->has('fname'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Full name<span class="text-danger"> *</span></label> <input type="text" id="fname" name="fname" placeholder="Enter your full name" value="{{$zakatdonate->fname}}" onblur="validate(1)"> </div>

                    @if ($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Phone number<span class="text-danger"> *</span></label> <input type="tel" id="phone" name="phone" placeholder="Enter your Phone number" value="{{$zakatdonate->phone}}" onblur="validate(2)"> </div>
                    </div>

                    @if ($errors->has('total'))
                    <span class="text-danger">{{ $errors->first('total') }}</span>
                    @endif
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Total Amount<span class="text-danger"> *</span></label> <input type="number" id="total" name="total" placeholder="Enter your Total Amount" value="{{$zakatdonate->total}}" onblur="validate(3)"> </div>
                         @if ($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                    @endif
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Address<span class="text-danger"> *</span></label> <input type="text" id="address" name="address" placeholder="Enter your address" value="{{$zakatdonate->address}}" onblur="validate(4)"> </div>

                        
                        @if ($errors->has('dontype'))
                    <span class="text-danger">{{ $errors->first('dontype') }}</span>
                    @endif
                    
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Donation Type<span class="text-danger"> *</span></label> <select id="dontype" name="dontype" onblur="validate(5)"> 
                        <option value="{{$zakatdonate->dontype}}">{{$zakatdonate->dontype}}</option>
                    <option value="Food">Food</option>
                    <option value="Cloth">Cloth</option>
                    <option value="Money">Money</option>
                    </select>
                 </div>
</div>
                    <!-- if select money -->

                    <script>
let selectEl = document.getElementById('dontype');

selectEl.addEventListener('change', (e) => {
  if (e.target.value == 'Money') {
    document.getElementById('moneydonar').style.visibility = 'visible';
  } else {
    document.getElementById('moneydonar').style.visibility = 'hidden';
  }
});
                    </script>
                    <div id="moneydonar" style="visibility:hidden">
                        @if ($errors->has('Paytype'))
                    <span class="text-danger">{{ $errors->first('Paytype') }}</span>
                    @endif
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Payment Type<span class="text-danger"> *</span></label> <select id="Paytype" name="Paytype" onblur="validate(5)"> 
                    <option value="{{$zakatdonate->Paytype}}">{{$zakatdonate->Paytype}}</option>
                    <option value="Bkash">Bkash</option>
                    <option value="Nogod">Nogod</option>
                    <option value="DDBL">DDBL</option>
                    </select> </div>
                    @if ($errors->has('acctype'))
                    <span class="text-danger">{{ $errors->first('acctype') }}</span>
                    @endif
                   
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Account Type<span class="text-danger"> *</span></label> <select id="acctype" name="acctype" onblur="validate(6)"> 
                    <option value="{{$zakatdonate->acctype}}">{{$zakatdonate->acctype}}</option>
                    <option value="Parsonal">Parsonal</option>
                    <option value="Agent">Agent</option>
                    </select> </div></div>
                    @if ($errors->has('trackid'))
                    <span class="text-danger">{{ $errors->first('trackid') }}</span>
                    @endif
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Track Id<span class="text-danger"> *</span></label> <input type="text" id="trackid" name="trackid" value="{{$zakatdonate->trackid}}" placeholder="Enter your Track Id" onblur="validate(7)"> </div>
                    </div></div>
                    @if ($errors->has('volunteer'))
                    <span class="text-danger">{{ $errors->first('volunteer') }}</span>
                    @endif
                    
                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Select Volunteer<span class="text-danger"> *</span></label> <select id="volunteer" name="volunteer" onblur="validate(5)"> 
                        <option>Select one</option>
                        @foreach($volunteers as $volunteer)
                    <option value="{{$volunteer->username}}">{{$volunteer->username}}, {{$volunteer->address}}</option>
                    @endforeach
                    </select> </div>
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