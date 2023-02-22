@extends('volunteer.layouts.master')
@section('title','Volunteer Dashboard')
@section('content')
    <div class="container">
      <a href="{{route('vol.logout')}}" class="btn btn-primary mt-5" style="margin-left:80%">Logout</a>
<div class="card-body mt-5">
   <h4 class="text-info">Wellcome to
    Your Volunteer Dashboard</h4> 
    <h2 class="bg-primary text-white p-3 mt-5 text-center">Food & Cloth Donation Request</h2>

    <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">SL.NO</th>
      <th scope="col">Full Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Donation Type</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
  @foreach($fooddonates as $fooddonate)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$fooddonate->fname}}</td>
      <td>{{$fooddonate->phone}}</td>
      <td>{{$fooddonate->address}}</td>
      <td>{{$fooddonate->dontype}}</td>
    </tr>
   @endforeach
  </tbody>
</table>
</div>


<div class="card-body mt-2">
    <h2 class="bg-primary text-white p-3 mt-5 text-center">Zakat Donation(Food & Cloth) Request</h2>

    <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">SL.NO</th>
      <th scope="col">Full Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Donation Type</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
  @foreach($zakatdonates as $zakatdonate)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$zakatdonate->fname}}</td>
      <td>{{$zakatdonate->phone}}</td>
      <td>{{$zakatdonate->address}}</td>
      <td>{{$zakatdonate->dontype}}</td>
    </tr>
   @endforeach
  </tbody>
</table>
</div>
</div>
@endsection


