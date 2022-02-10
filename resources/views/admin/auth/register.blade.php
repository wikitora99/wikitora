<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <title>WikiDev Admin - {{ $title }}</title>

  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.png') }}">
  <link rel="stylesheet" href="{{ asset('dashboard/vendor/chartist/css/chartist.min.css') }}">
  <link href="{{ asset('dashboard/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
  <link href="{{ asset('dashboard/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
  <link href="{{ asset('dashboard/css/style.css') }}" rel="stylesheet">
</head>

<body class="vh-100">
  <div class="authincation h-100">
    <div class="container h-100">
      <div class="row justify-content-center h-100 align-items-center">
        <div class="col-md-6">
          <div class="authincation-content">
            <div class="row no-gutters">
              <div class="col-xl-12">
                <div class="auth-form">
                  <div class="text-center mb-3">
                    <img src="/img/logo.png" alt="Wikidev Logo">
                  </div>
                  <h4 class="text-center mb-4">Register new account</h4>

                  <form action="/register" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="name" class="mb-1"><strong>Full Name</strong></label>
                      <input autofocus type="text" name="name" class="form-control @error('name') is-invalid @enderror" autocomplete="off" placeholder="Your name..." value="{{ old('name') }}" required>
                      @error('name')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="username" class="mb-1"><strong>Username</strong></label>
                      <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" autocomplete="off" placeholder="Your username..." value="{{ old('username') }}" required>
                      @error('username')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="email" class="mb-1"><strong>Email Address</strong></label>
                      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" autocomplete="off" placeholder="Your email..." value="{{ old('email') }}" required>
                      @error('email')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>

                    <div for="password" class="form-group">
                      <label class="mb-1"><strong>Password</strong></label>
                      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" autocomplete="off" placeholder="Your password..." required>
                      @error('password')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>

                    <div class="text-center mt-4">
                      <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                  </form>

                  <div class="new-account mt-3">
                    <p>Already have an account? <a class="text-primary" href="/login">Login</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--**********************************
      Scripts
  ***********************************-->
  <!-- Required vendors -->
  <script src="{{ asset('dashboard/vendor/global/global.min.js') }}"></script>
  <script src="{{ asset('dashboard/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
  
  <script src="{{ asset('dashboard/js/custom.js') }}"></script>
  <script src="{{ asset('dashboard/js/deznav-init.js') }}"></script>
      
  <script>
    jQuery(document).ready(function(){
      setTimeout(function() {
        dezSettingsOptions.version = 'dark';
        new dezSettings(dezSettingsOptions);
      },1500)
    });
  </script>

</body>
</html>