
@extends('layouts.main')

@section('content')
  <!-- Slider Area-start -->
  <div id="top" class="slider_area">
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
  <div id="about" class="download_area">
    <div class="container">
      <div class="row">
        <div class="col-xl-10">
          <div class="download_text">
            <h3>I'm a Web Developer based on Jakarta, Indonesia.<br>Loves coding and learn something new.</h3>
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
                <span><i class="fa fa-code"></i></span>
              </div>
                <div class="progress">
                  <div class="progress-bar " role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="single_progress">
              <div class="label d-flex justify-content-between">
                <span>Design</span>
                <span><i class="fa fa-object-group"></i></span>
              </div>
              <div class="progress">
                <div class="progress-bar " role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="single_progress">
              <div class="label d-flex justify-content-between">
                <span>Writing</span>
                <span><i class="fa fa-text-height"></i></span>
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
  <div id="services" class="service_area">
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
  <div id="works" class="gallery_area">
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


  <!-- Contact Section-start -->
  <section id="contact" class="contact-section section_padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Message'" placeholder = 'Your Message'></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your name'" placeholder = 'Your name'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'" placeholder = 'Your email address'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Subject'" placeholder = 'Your Subject'>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_2 boxed-btn">Send Message</button>
            </div>
          </form>
        </div>

        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Jakarta, Indonesia</h3>
              <p>St. Raya Bogor KM 32</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>(+62) 882 1001 2082</h3>
              <p>Mon to Fri 6am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>wiki.tora99@gmail.com</h3>
              <p>Send me your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Section-end -->
@endsection()
