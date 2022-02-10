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

        @if (session('success'))
          <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
            </button>
            <strong>Success! </strong>{{ session('success') }}
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