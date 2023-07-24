@extends('admin.layouts.master')
@section('title','Zakat Donation Show')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
        <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Zakat Donation Show</h2>
                        <div class="page-breadcrumb pull-left">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Zakat Donation</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Show</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('zakatdonates.index') }}"> Back</a>
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
                    <th>Donation Type</th>
                    <th>Payment Type</th>
                    <th>Account Type</th>
                    <th>Track Id</th>
                    <th>Volunteer</th>
                    <th>Status</th>   
                </tr>
            </thead>
            <tbody>
            <tr>
            <td>{{ $zakatdonate->fname }}</td>
                        <td>{{ $zakatdonate->phone }}</td>
                        <td>{{ $zakatdonate->total }}</td>
                        <td>{{ $zakatdonate->address }}</td>
                        <td>{{ $zakatdonate->dontype }}</td>
                        <td>{{ $zakatdonate->Paytype }}</td>
                        <td>{{ $zakatdonate->acctype }}</td>
                        <td>{{ $zakatdonate->trackid }}</td>
                        <td>{{ $zakatdonate->volunteer }}</td>
                        <td>{{ $zakatdonate->status }}</td>
            </tbody>
        </table>

                </div>
            </div>   
        </div>    

</div>
</div>   
</div>    

@endsection