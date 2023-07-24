@extends('admin.layouts.master')
@section('title','Zakat Donates')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Zakat Donates</h2>
                        <div class="page-breadcrumb  ">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Zakat Donates</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">All Zakat Donates</li>
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
                    <th>Donation Type</th>
                    <th>Payment Type</th>
                    <th>Account Type</th>
                    <th>Track Id</th>
                    <th>Volunteer</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=0; ?>
                @foreach ($zakatdonates as $zakatdonate)
                    <tr>
                        <td>{{$i++}}</td>
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
                        <td>
                            <form action="{{ route('zakatdonates.destroy',$zakatdonate->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('zakatdonates.edit',$zakatdonate->id) }}">Edit</a>
                                <a class="btn btn-secondary" href="{{ route('zakatdonates.show',$zakatdonate->id) }}">View</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $zakatdonates->links() !!}

                    </div>
                </div>   
            </div>    

</div> 
</div>
</div>

@endsection