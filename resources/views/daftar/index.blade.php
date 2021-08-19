@extends('template')

@section('conten')

    <div class="row justify-content-center">
      <div class="col-md-5">
        <form action="/daftar" method="POST" class="form-signin">

          @csrf

          <h1 class="h3 mb-3 font-weight-normal text-center">Daftar</h1>
          <label for="inputName" class="sr-only">Name</label>
          <input type="text" name="name" id="inputName" class="form-control @error('name') is-invalid @enderror" placeholder="Name" required="" autofocus value="{{ old('name') }}">

          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror

          <label for="inputUsername" class="sr-only">Username</label>
          <input type="text" name="username" id="inputUsername" class="form-control @error('username') is-invalid @enderror" placeholder="Username" required="" value="{{ old('username') }}">

          @error('username')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror

          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" name="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" required="" value="{{ old('email') }}">

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

          <button class="btn btn-lg btn-primary btn-block" name="daftar" type="submit">Daftar</button>
          
        </form>
      </div>
    </div>

@endsection