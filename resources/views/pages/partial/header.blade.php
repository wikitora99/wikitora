<!-- Header-start -->
<header class="header-area">
  <div id="sticky-header" class="main-header-area">
    <div class="container-fluid ">
      <div class="header_bottom_border">
        <div class="row align-items-center">
          <div class="col-xl-3 col-lg-2">
            <div class="logo">
              <a href="/">
                <img src="/img/logo.png" alt="">
              </a>
            </div>
          </div>

          <!-- Main Menu -->
          <div class="col-xl-6 col-lg-7">
            <div class="main-menu  d-none d-lg-block">
              
              @include('pages.partial.navbar')

            </div>
          </div>

          <!-- Connect Area -->
          <div class="col-xl-3 col-lg-3 d-none d-lg-block">
            <div class="Appointment">
              <div class="book_btn d-none d-lg-block">
                <a href="#">Let’s Talk</a>
              </div>
            </div>
          </div>

          <!-- Mobile Menu -->
          <div class="col-12">
            <div class="mobile_menu d-block d-lg-none"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Header-end