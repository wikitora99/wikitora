<!DOCTYPE html>
<html lang="en">

<head>
  @include('panel.layouts.head')
</head>
<body>

  <!-- Main Wrapper-start -->
  <div id="main-wrapper">

    <!-- Nav Header-start -->
    <div class="nav-header">
      @include('panel.layouts.navhead')
    </div>
    <!-- Nav Header-end -->
    
    <!-- Header-start -->
    <div class="header">
      @include('panel.layouts.header')
    </div>
    <!-- Header-end -->

    <!-- Sidebar-start -->
    <div class="deznav">
      @include('panel.layouts.sidebar')
    </div>
    <!-- Sidebar-end -->
    
    <!-- Main Content-start -->
    <div class="content-body">
      @yield('content')
    </div>
    <!-- Main Content-end -->

    <!-- Footer-start -->
    <div class="footer">
      @include('panel.layouts.footer')
    </div>
    <!-- Footer-end -->

  </div>
  <!-- Main Wrapper-end -->

  <!-- Scripts -->
  @include('panel.layouts.script')

</body>
</html>