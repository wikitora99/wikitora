
@extends('layouts.main')

@section('content')
  <!-- Slider Area-start -->
  <div class="slider_area">
    <div class="single_slider d-flex align-items-center slider_bg_1">
      <div class="container">
        <div class="row align-items-center position-relative">

          <!-- Slider Text -->
          <div class="col-lg-9">            
            <div class="slider_text">
              <h4>Hello, World!</h4>
              <h3>I am Okitora Winnetou<br>
                <span id="slider-items">Web Developer,UI/UX Designer,Content Writer</span><span id="text-slider"></span>
              </h3>
              <a class="boxed-btn3-line" href="#">View Works</a>
            </div>
          </div>

          <!-- Slider Image -->
          <div class="my_img d-none d-lg-block">
            <img src="img/about/my_img.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Slider Area-end -->


  <!-- About Area-start -->
  <div class="download_area">
    <div class="container">
      <div class="row">
        <div class="col-xl-10">
          <div class="download_text">
            <h3>I am a Web Developer based on Jakarta, Indonesia. Loves clean code, modern & scalable architecture.</h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="download_left">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rhoncus non nisi nec iaculis. Vestibulum elementum risus ut neque vulputate, id ullamcorper lacus vestibulum. Quisque aliquam volutpat auctor.</p> 
            <p>Fusce egestas euismod lectus, quis tempor ipsum facilisis vitae. Integer et lacus efficitur, placerat justo id, malesuada lorem. Morbi feugiat eu arcu sit amet dignissim. Proin sit amet metus at velit ullamcorper auctor.</p>
            <a href="#" class="boxed-btn3-line">Download CV</a>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1 col-md-6">
          <div class="progress_skills">
            <div class="single_progress">
              <div class="label d-flex justify-content-between">
                <span>Coding</span>
                <span>70%</span>
              </div>
                <div class="progress">
                  <div class="progress-bar " role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="single_progress">
              <div class="label d-flex justify-content-between">
                <span>Design</span>
                <span>90%</span>
              </div>
              <div class="progress">
                <div class="progress-bar " role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="single_progress">
              <div class="label d-flex justify-content-between">
                <span>Writing</span>
                <span>80%</span>
              </div>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About Area-end -->


  <!-- Service Area-start  -->
  <div class="service_area">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="section_title mb-50">
            <h3>My Services</h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="single_service text-center">
            <div class="icon">
              <img src="img/icons/webdev-service.png" alt="Web Development">
            </div>
            <h3>Web Development</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit phasellus rhoncus non nisi nec iaculis risus ut neque vestibulum.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single_service text-center">
            <div class="icon">
              <img src="img/icons/design-service.png" alt="UI/UX Design">
            </div>
            <h3>UI/UX Design</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit phasellus rhoncus non nisi nec iaculis risus ut neque vestibulum.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single_service text-center">
            <div class="icon">
              <img src="img/icons/writing-service.png" alt="Content Writing">
            </div>
            <h3>Content Writing</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit phasellus rhoncus non nisi nec iaculis risus ut neque vestibulum.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Service Area-end  -->


  <!-- Gallery Area-start  -->
  <div class="gallery_area">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="section_title mb-50">
            <h3>My Works</h3>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-10">
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="single_gallery">
                <div class="thumb">
                  <img src="img/gallery/1.png" alt="">
                </div>
                <div class="gallery_heading">
                  <span>Mobile App</span>
                  <a href="works_details.html"><h4>Colorlib App Project</h4></a>
                </div>
              </div>
              <div class="single_gallery">
                <div class="thumb">
                  <img src="img/gallery/2.png" alt="">
                </div>
                <div class="gallery_heading">
                  <span>Mobile App</span>
                  <a href="works_details.html"><h4>Colorlib App Project</h4></a>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="single_gallery">
                <div class="thumb">
                  <img src="img/gallery/3.png" alt="">
                </div>
                <div class="gallery_heading">
                  <span>Mobile App</span>
                  <a href="works_details.html"><h4>Colorlib App Project</h4></a>
                </div>
              </div>
              <div class="single_gallery">
                <div class="thumb">
                  <img src="img/gallery/4.png" alt="">
                </div>
                <div class="gallery_heading">
                  <span>Mobile App</span>
                  <a href="works_details.html"><h4>Colorlib App Project</h4></a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="more_works">
                <a class="boxed-btn3-line" href="#">More Works</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Gallery Area-end  -->


  <!-- Testimonial Area-start -->
  <div class="testimonial_area ">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="section_title">
            <h3>What Clients say</h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12">
          <div class="testmonial_active owl-carousel">
            <div class="single_carousel">
              <div class="row">
                <div class="col-xl-9 col-md-9">
                  <div class="single_testmonial">
                    <p>“There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour or randomised words which don’t look even slightly believable. If you are going to use a passage.</p>
                    <div class="testmonial_author">
                      <div class="thumb">
                        <img src="img/case/testimonial.png" alt="Client" width="68" height="68" class="rounded-circle">
                      </div>
                      <div class="author_name">
                        <h3>John Doe</h3>
                        <span>Business Owner</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="single_carousel">
              <div class="row">
                <div class="col-xl-9 col-md-9">
                  <div class="single_testmonial">
                    <p>“There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour or randomised words which don’t look even slightly believable. If you are going to use a passage.</p>
                    <div class="testmonial_author">
                      <div class="thumb">
                        <img src="img/case/testimonial.png" alt="Client" width="68" height="68" class="rounded-circle">
                      </div>
                      <div class="author_name">
                        <h3>Fulan bin Fulan</h3>
                        <span>Startup CEO</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="single_carousel">
              <div class="row">
                <div class="col-xl-9 col-md-9">
                  <div class="single_testmonial">
                    <p>“There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour or randomised words which don’t look even slightly believable. If you are going to use a passage.</p>
                    <div class="testmonial_author">
                      <div class="thumb">
                        <img src="img/case/testimonial.png" alt="Client" width="68" height="68" class="rounded-circle">
                      </div>
                      <div class="author_name">
                        <h3>Satoshi Nakamoto</h3>
                        <span>Project Manager</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Testimonial Area-end -->
@endsection()
