@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
            <form>
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>

              <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">login</button>
            </form>
            <small class="d-block text-center mt-2">Don't have an Account? <a href="/register">Register Here!</a></small>
          </main>
    </div>
</div>
@endsection