
@extends('dashboard.layouts.main')

  @section('content')    
    <div class="authincation h-100">    
      <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
          <div class="col-md-6">

          @if (session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
          @endif

            <div class="authincation-content">
              <div class="row no-gutters">
                <div class="col-xl-12">
                  <div class="auth-form">
                    <div class="text-center mb-3">
                      <img src="/img/logo.png" alt="Wikidev Logo">
                    </div>
                    <h4 class="text-center mb-4">Login to continue</h4>

                    <form action="/login" method="post">
                      <div class="form-group">
                        <label class="mb-1"><strong>Email or Username</strong></label>
                        <input type="email" name="mailnam" class="form-control" placeholder="Your email or username...">
                      </div>
                      <div class="form-group">
                        <label class="mb-1"><strong>Password</strong></label>
                        <input type="password" name="password" class="form-control" placeholder="Your password...">
                      </div>

                      <div class="form-row d-flex justify-content-between mt-4 mb-2">
                        <div class="form-group">
                          <a href="page-forgot-password.html">Forgot password?</a>
                        </div>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                      </div>
                    </form>

                    <div class="new-account mt-3">
                      <p>Don't have an account? <a class="text-primary" href="/register">Register</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endsection