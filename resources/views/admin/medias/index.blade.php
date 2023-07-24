@extends('admin.layouts.master')
@section('title','All Medias')
@section('content')
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="row">
                    <div class="page-header pull-left">
                        <h2 class="pageheader-title">All Medias</h2>
                        <div class="page-breadcrumb  ">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">All Medias</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">All Medias</li>
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
        <table class="table table-bordered p-0">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Title</th>
                    <th>Details</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; ?>
                @foreach ($medias as $media)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $media->name }}</td>
                        <td>{{ $media->detail }}</td>
                        <td><img style="width:50px;height:20px" src="{{asset('assets/img/'.$media->image )}}" alt=""></td>
                        <td>
                            <form action="{{ route('medias.destroy',$media->id) }}" method="Post">
                                <a class="btn btn-primary"  href="{{ route('medias.edit',$media->id) }}">Edit</a>
                                <a class="btn btn-secondary"  href="{{ route('medias.show',$media->id) }}">View</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" >Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $medias->links() !!}

                    </div>
                </div>   
            </div>    

</div> 
</div>
</div>

@endsection