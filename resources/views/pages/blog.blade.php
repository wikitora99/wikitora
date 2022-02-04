
@extends('layouts.main')

@section('content')
  <!-- Bradcam Area-start  -->
  <div class="bradcam_area bradcam_bg_1">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="bradcam_text text-center">
            <h3>Blog Area</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bradcam Area-end  -->


  <!--=============== Blog Area =================-->
  <section class="blog_area section-padding">
    <div class="container">
      <div class="row">

        <!-- Post Area-start -->
        <div class="col-lg-8 mb-5 mb-lg-0">
          <div class="blog_left_sidebar">

            <!-- Article -->
            @foreach($posts as $post)
            <article class="blog_item">
              <div class="blog_item_img">
                <img class="card-img rounded-0" src="/img/blog/{{ $post['thumb'] }}" alt="Post thumbnail">
                <span class="blog_item_date">
                  <h3>{{ $post['date'][0] }}</h3>
                  <p>{{ $post['date'][1] }}</p>
                </span>
              </div>
              <div class="blog_details">
                <a class="d-inline-block" href="/blog/{{ $post['slug'] }}">
                  <h2>{{ $post['title'] }}</h2>
                </a>
                <p>{{ $post['text'] }}</p>
                <ul class="blog-info-link">
                  <li><a href="#"><i class="fa fa-user"></i> {{ $post['author'] }}</a></li>
                  <li><a href="#"><i class="fa fa-comment"></i> {{ $post['category'][0] }}, {{ $post['category'][1] }}</a></li>
                </ul>
              </div>
            </article>
            @endforeach()

            <!-- Pagination -->
            <nav class="blog-pagination justify-content-center d-flex">
              <ul class="pagination">
                <li class="page-item">
                  <a href="#" class="page-link" aria-label="Previous">
                    <i class="ti-angle-left"></i>
                  </a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link">1</a>
                </li>
                <li class="page-item active">
                  <a href="#" class="page-link">2</a>
                </li>
                <li class="page-item">
                  <a href="#" class="page-link" aria-label="Next">
                    <i class="ti-angle-right"></i>
                  </a>
                </li>
              </ul>
            </nav>            
          </div>
        </div>
        <!-- Post Area-end -->

        @include('partials.sidebar')

      </div>
    </div>
  </section>
  <!--=============== Blog Area ================-->
@endsection()
