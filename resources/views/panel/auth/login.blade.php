<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <title>WikiDev Admin - {{ $title }}</title>

  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.png') }}">
  <link rel="stylesheet" href="{{ asset('panel/vendor/chartist/css/chartist.min.css') }}">
  <link href="{{ asset('panel/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
  <link href="{{ asset('panel/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
  <link href="{{ asset('panel/css/style.css') }}" rel="stylesheet">
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

        @if (session('failed'))
          <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
            </button>
            <strong>Failed! </strong>{{ session('failed') }}
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
                    @csrf
                    <div class="form-group">
                      <label class="mb-1"><strong>Username</strong></label>
                      <input autofocus type="text" name="username" class="form-control" autocomplete="off" required placeholder="Your username...">
                    </div>
                    <div class="form-group">
                      <label class="mb-1"><strong>Password</strong></label>
                      <input type="password" name="password" class="form-control" required placeholder="Your password..." value="{{ old('username') }}">
                    </div>

                    <!-- <div class="form-row d-flex justify-content-between mt-4 mb-2">
                      <div class="form-group">
                        <a href="/forgot">Forgot password?</a>
                      </div>
                    </div> -->
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                  </form>

                  <div class="new-account mt-3">
                    <p>Don't have an account? <a class="text-primary" href="{{ route('dashboard.register') }}">Register</a></p>
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
  <script src="{{ asset('panel/vendor/global/global.min.js') }}"></script>
  <script src="{{ asset('panel/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
  
  <script src="{{ asset('panel/js/custom.js') }}"></script>
  <script src="{{ asset('panel/js/deznav-init.js') }}"></script>
  <script src="{{ asset('panel/js/auth-dark.js') }}"></script>

</body>
</html>