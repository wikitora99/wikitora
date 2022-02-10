
<!-- Navigation Bar-start -->
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
    <div class="main-menu d-none d-lg-block">      
      <nav>
        <ul id="navigation">
          <li><a href="/">Home</a></li>
          <li><a href="/#about">About</a></li>
          <li><a href="/#services">Services</a></li>
          <li><a href="/#works">Works</a></li>
          <li><a href="/#contact">Contact</a></li>
          <li><a href="/blog">Blog</a></li>          
        </ul>
      </nav>
    </div>
  </div>

  <!-- Connect Area -->  
  <div class="col-xl-3 col-lg-3 d-none d-lg-block">
    <div class="Appointment">
      <div class="book_btn d-none d-lg-block">
      @auth
        <form action="/logout" method="post">
          @csrf
          <button type="submit">Logout</button>
        </form>
      @else      
        <a href="#">Let's Talk</a>
      @endauth
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div class="col-12">
    <div class="mobile_menu d-block d-lg-none"></div>
  </div>
</div>
<!-- Navigation Bar-end -->