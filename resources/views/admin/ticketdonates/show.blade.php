@extends('admin.layouts.master')
@section('title','Ticket Show')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
        <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Ticket Show</h2>
                        <div class="page-breadcrumb pull-left">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Ticket</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Show</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('tickets.index') }}"> Back</a>
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
                        <td>{{ $ticket->fname }}</td>
                        <td>{{ $ticket->phone }}</td>
                        <td>{{ $ticket->total }}</td>
                        <td>{{ $ticket->address }}</td>
                        <td>{{ $ticket->Paytype }}</td>
                        <td>{{ $ticket->acctype }}</td>
                        <td>{{ $ticket->trackid }}</td>
                        <td>{{ $ticket->status }}</td>
            </tbody>
        </table>

                </div>
            </div>   
        </div>    

</div>
</div>   
</div>    

@endsection