@extends('admin.layouts.master')
@section('title','Create Media')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Create Media</h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Create Media</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('medias.index') }}">Back</a>
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
        <form action="{{ route('medias.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-between text-left">
                    @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Title<span class="text-danger"> *</span></label> <input type="text" id="name" name="name" placeholder="Enter your Title" onblur="validate(1)"> </div>

                    @if ($errors->has('detail'))
                    <span class="text-danger">{{ $errors->first('detail') }}</span>
                    @endif
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Details<span class="text-danger"> *</span></label> <textarea name="detail" id="" cols="30" rows="10" placeholder="Enter Your Details"></textarea> </div>
                    </div>

                    @if ($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                    @endif
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Media<span class="text-danger"> *</span></label> <input type="file" id="image" name="image"></div>
                        
                   <input type="submit" class="btn btn-primary mt-3"  value="Media Create"> 
        </form>
                </div>
            </div>   
        </div>    


</div> 
</div>
</div>

@endsection