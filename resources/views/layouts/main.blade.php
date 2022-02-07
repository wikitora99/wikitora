<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>WikiDev - {{ $title }}</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- <link rel="manifest" href="site.webmanifest"> -->
  <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.png">

  <!-- CSS here -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/owl.carousel.min.css">
  <link rel="stylesheet" href="/css/magnific-popup.css">
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/themify-icons.css">
  <link rel="stylesheet" href="/css/nice-select.css">
  <link rel="stylesheet" href="/css/flaticon.css">
  <link rel="stylesheet" href="/css/gijgo.css">
  <link rel="stylesheet" href="/css/animate.css">
  <link rel="stylesheet" href="/css/slick.css">
  <link rel="stylesheet" href="/css/slicknav.css">

  <link rel="stylesheet" href="/css/style.css">
  <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>    
  @include('partials.navbar')

  @yield('content')

  <!-- Footer-start -->
  <footer class="footer">
    <div class="footer_top">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="lets_talk">
              <h3>Have a great idea? <a href="#">Let’s talk</a></h3>
              <p>If you have an idea and want to turn it into an amazing project, just let me know and tell what you need. Feel free to contact me, I will always be open to anyone who wants to collaborate or just say hello.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="single_links d-flex justify-content-between align-items-center">
              <span>Facebook</span>
              <a target="_blank" href="https://facebook.com/wikitora"> <i class="fa fa-facebook"></i></a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="single_links d-flex justify-content-between align-items-center">
              <span>Instagram</span>
              <a target="_blank" href="https://instagram.com/wiki.tora"> <i class="fa fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="single_links d-flex justify-content-between align-items-center">
              <span>Linkedin</span>
              <a target="_blank" href="https://linkedin.com/in/wikitora"> <i class="fa fa-linkedin"></i></a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="single_links d-flex justify-content-between align-items-center">
              <span>Dribbble</span>
              <a target="_blank" href="https://dribbble.com/wikitora"> <i class="fa fa-dribbble"></i></a>
            </div>
          </div>    
        </div>
      </div>
    </div>
    <div class="copy-right_text">
      <div class="container">
        <div class="footer_border"></div>
        <div class="row">
          <div class="col-xl-12">
            <!-- Copyright to Colorlib -->
            <p class="copy_right text-center">
              &copy; {{ date('Y') }} <a href="https://wikitora.dev" target="_blank">WikiDev</a>. All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ Footer-end  -->

  <!-- Link that opens popup -->
  <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

  <!-- JS here -->
  <script src="/js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/isotope.pkgd.min.js"></script>
  <script src="/js/ajax-form.js"></script>
  <script src="/js/waypoints.min.js"></script>
  <script src="/js/jquery.counterup.min.js"></script>
  <script src="/js/imagesloaded.pkgd.min.js"></script>
  <script src="/js/scrollIt.js"></script>
  <script src="/js/jquery.scrollUp.min.js"></script>
  <script src="/js/wow.min.js"></script>
  <script src="/js/nice-select.min.js"></script>
  <script src="/js/jquery.slicknav.min.js"></script>
  <script src="/js/jquery.magnific-popup.min.js"></script>
  <script src="/js/plugins.js"></script>
  <!-- <script src="/js/gijgo.min.js"></script> -->
  <script src="/js/slick.min.js"></script>

  <!-- Typed -->
  <script src="/js/typed.min.js"></script>

  <!-- Contact JS -->
  <!-- <script src="/js/contact.js"></script>
  <script src="/js/jquery.ajaxchimp.min.js"></script>
  <script src="/js/jquery.form.js"></script>
  <script src="/js/jquery.validate.min.js"></script>
  <script src="/js/mail-script.js"></script> -->

  <!-- Main JS -->
  <script src="/js/main.js"></script>
</body>
</html>