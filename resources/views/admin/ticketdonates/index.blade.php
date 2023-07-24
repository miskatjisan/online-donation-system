@extends('admin.layouts.master')
@section('title','Tickets')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Tickets</h2>
                        <div class="page-breadcrumb  ">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tickets</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">All Tickets</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
         
            <div class="ecommerce-widget">
                <div class="card">
                    <div class="card-body">

                    @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Full Name</th>
                    <th>Phone</th>
                    <th>Total donation</th>
                    <th>Address</th>
                    <th>Payment Type</th>
                    <th>Account Type</th>
                    <th>Track Id</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=0; ?>
                @foreach ($tickets as $ticket)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $ticket->fname }}</td>
                        <td>{{ $ticket->phone }}</td>
                        <td>{{ $ticket->total }}</td>
                        <td>{{ $ticket->address }}</td>
                        <td>{{ $ticket->Paytype }}</td>
                        <td>{{ $ticket->acctype }}</td>
                        <td>{{ $ticket->trackid }}</td>
                        <td>{{ $ticket->status }}</td>
                        <td>
                            <form action="{{ route('tickets.destroy',$ticket->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('tickets.edit',$ticket->id) }}">Edit</a>
                                <a class="btn btn-secondary" href="{{ route('tickets.show',$ticket->id) }}">View</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $tickets->links() !!}

                    </div>
                </div>   
            </div>    

</div> 
</div>
</div>

@endsection