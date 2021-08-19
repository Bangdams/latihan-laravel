@extends('template')

@section('conten')

    <div class="row justify-content-center">
      <div class="col-md-5">
        <form action="/login" method="POST" class="form-signin">

          @csrf

          <h1 class="h3 mb-3 font-weight-normal text-center">Login </h1>

          @if (session()->has('berhasil'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              {{ session('berhasil') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif

          @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('loginError') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif

          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" name="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" autofocus placeholder="Email address" required="">

          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror

          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" name="password" id="inputPassword" class="form-control mb-3 @error('password') is-invalid @enderror" placeholder="Password" required="">

          @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror

          <button class="btn btn-lg btn-primary btn-block" name="daftar" type="submit">Login</button>
          
        </form>
        <a href="/daftar" class="text-center d-block mt-4">Daftar</a>
      </div>
    </div>

@endsection