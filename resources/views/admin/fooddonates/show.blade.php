@extends('admin.layouts.master')
@section('title','Food Donation Show')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
        <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Food Donation Show</h2>
                        <div class="page-breadcrumb pull-left">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Food Donation</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Show</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('fooddonates.index') }}"> Back</a>
                </div>
                </div>
      
            <div class="ecommerce-widget">
            <div class="card">
                <div class="card-body">

                <table class="table table-bordered">
            <thead>
            <tr>
                    <th>Full Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Donation Type</th>
                    <th>Volunteer</th>
                    <th>Status</th>   
                </tr>
            </thead>
            <tbody>
            <tr>
                        <td>{{ $fooddonate->fname }}</td>
                        <td>{{ $fooddonate->phone }}</td>
                        <td>{{ $fooddonate->address }}</td>
                        <td>{{ $fooddonate->dontype }}</td>
                        <td>{{ $fooddonate->volunteer }}</td>
                        <td>{{ $fooddonate->status }}</td>
            </tbody>
        </table>

                </div>
            </div>   
        </div>    

</div>
</div>   
</div>    

@endsection