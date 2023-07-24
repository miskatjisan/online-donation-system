@extends('admin.layouts.master')
@section('title','Money Donation Show')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
        <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Money Donation Show</h2>
                        <div class="page-breadcrumb pull-left">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Mone y Donation</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Show</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('moneydonates.index') }}"> Back</a>
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
                    <th>Total donation</th>
                    <th>Address</th>
                    <th>Payment Type</th>
                    <th>Account Type</th>
                    <th>Track Id</th>
                    <th>Status</th>   
                </tr>
            </thead>
            <tbody>
            <tr>
                        <td>{{ $moneydonate->fname }}</td>
                        <td>{{ $moneydonate->phone }}</td>
                        <td>{{ $moneydonate->total }}</td>
                        <td>{{ $moneydonate->address }}</td>
                        <td>{{ $moneydonate->Paytype }}</td>
                        <td>{{ $moneydonate->acctype }}</td>
                        <td>{{ $moneydonate->trackid }}</td>
                        <td>{{ $moneydonate->status }}</td>
            </tbody>
        </table>

                </div>
            </div>   
        </div>    

</div>
</div>   
</div>    

@endsection