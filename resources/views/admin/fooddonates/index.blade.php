@extends('admin.layouts.master')
@section('title','Food Donates')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">Food Donates</h2>
                        <div class="page-breadcrumb  ">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Food Donates</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">All Food Donates</li>
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
                    <th>Address</th>
                    <th>Donation Type</th>
                    <th>Volunteer</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=0; ?>
                @foreach ($fooddonates as $fooddonate)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $fooddonate->fname }}</td>
                        <td>{{ $fooddonate->phone }}</td>
                        <td>{{ $fooddonate->address }}</td>
                        <td>{{ $fooddonate->dontype }}</td>
                        <td>{{ $fooddonate->volunteer }}</td>
                        <td>{{ $fooddonate->status }}</td>
                        <td>
                            <form action="{{ route('fooddonates.destroy',$fooddonate->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('fooddonates.edit',$fooddonate->id) }}">Edit</a>
                                <a class="btn btn-secondary" href="{{ route('fooddonates.show',$fooddonate->id) }}">View</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $fooddonates->links() !!}

                    </div>
                </div>   
            </div>    

</div> 
</div>
</div>

@endsection