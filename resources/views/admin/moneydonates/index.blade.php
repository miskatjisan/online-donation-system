@extends('admin.layouts.master')
@section('title','Money Donates')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Money Donates</h2>
                        <div class="page-breadcrumb  ">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Money Donates</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">All Money Donates</li>
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
                @foreach ($moneydonates as $moneydonate)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $moneydonate->fname }}</td>
                        <td>{{ $moneydonate->phone }}</td>
                        <td>{{ $moneydonate->total }}</td>
                        <td>{{ $moneydonate->address }}</td>
                        <td>{{ $moneydonate->Paytype }}</td>
                        <td>{{ $moneydonate->acctype }}</td>
                        <td>{{ $moneydonate->trackid }}</td>
                        <td>{{ $moneydonate->status }}</td>
                        <td>
                            <form action="{{ route('moneydonates.destroy',$moneydonate->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('moneydonates.edit',$moneydonate->id) }}">Edit</a>
                                <a class="btn btn-secondary" href="{{ route('moneydonates.show',$moneydonate->id) }}">View</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $moneydonates->links() !!}

                    </div>
                </div>   
            </div>    

</div> 
</div>
</div>

@endsection