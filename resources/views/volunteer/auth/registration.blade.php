@extends('volunteer.layouts.master')
@section('title','Volunteer Registration')
@section('content')
    <section class="vh-100 bg-warning mt-3">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-primary text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Volunteer Registration</h2>
              <p class="text-white-50 mb-5">Please enter your Details!</p>
                @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                @endif

            <form action="{{ route('vol-register.post') }}" method="POST">
                @csrf
                <div class="form-outline form-white mb-4">
                <input type="text" name="fname" id="typeNameX" class="form-control form-control-lg" />
                @if ($errors->has('fname'))
                    <span class="text-danger">{{ $errors->first('fname') }}</span>
                @endif
                <label class="form-label" for="typeNameX">Frist Name</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="text" name="lname" id="typeNameX" class="form-control form-control-lg" />
                @if ($errors->has('lname'))
                    <span class="text-danger">{{ $errors->first('fname') }}</span>
                @endif
                <label class="form-label" for="typeNameX">Last Name</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="text" name="username" id="typeNameX" class="form-control form-control-lg" />
                @if ($errors->has('username'))
                    <span class="text-danger">{{ $errors->first('username') }}</span>
                @endif
                <label class="form-label" for="typeNameX">User Name</label>
              </div>

              
              <div class="form-outline form-white mb-4">
                <input type="tel" name="phone" id="typeNameX" class="form-control form-control-lg" />
                @if ($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
                <label class="form-label" for="typeNameX">Phone</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="text" name="address" id="typeNameX" class="form-control form-control-lg" />
                @if ($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif
                <label class="form-label" for="typeNameX">Address</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg" />
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <label class="form-label" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                <label class="form-label" for="typePasswordX">Password</label>
              </div>
              <button class="btn btn-outline-light btn-lg px-5" type="submit">Register</button>
            </form>
              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

            <div>
              <p class="mb-0">Already have an account? <a href="{{route('vol-login')}}" class="text-white-50 fw-bold">Login</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
