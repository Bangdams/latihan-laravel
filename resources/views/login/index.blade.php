@extends('template')

@section('conten')

    <div class="row justify-content-center">
      <div class="col-md-5">
        <form action="LoginControllers" method="post" class="form-signin">

          @csrf

          <h1 class="h3 mb-3 font-weight-normal text-center mb-4">Please sign in</h1>
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">

          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">

          <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Sign in</button>
          <p class="mt-5 mb-3 text-muted text-center"><a href="/daftar">Daftar</a></p>
        </form>
      </div>
    </div>

@endsection