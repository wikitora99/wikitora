
@extends('layouts.main')

@section('content')

  @include('partials.blog-slider')

  <!--=============== Blog Area =================-->
  <section class="blog_area section-padding">
    <div class="container">
      <div class="row">

        <!-- Posts Area-start -->
        <div class="col-lg-8 mb-5 mb-lg-0">
          <div class="blog_left_sidebar">

            <!-- Article -->
            @foreach($posts as $post)
            <article class="blog_item">
              <div class="blog_item_img">
                <img class="card-img rounded-0" src="/img/blog/cover/{{ $post->cover }}" alt="Post thumbnail">
                <span class="blog_item_date">
                  <h3>19</h3>
                  <p>Apr</p>
                </span>
              </div>
              <div class="blog_details">
                <a class="d-inline-block" href="/blog/{{ $post->slug }}">
                  <h2>{{ $post->title }}</h2>
                </a>
                <p>{{ $post->excerpt }}</p>
                <ul class="blog-info-link">
                  <li>
                    <i class="fa fa-user"></i>
                    <a href="#"> {{ $post->user->name }}</a>
                  </li>
                  <li>
                    <i class="fa fa-tag"></i>
                    <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a>
                  </li>                  
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
                <li class="page-item active">
                  <a href="#" class="page-link">1</a>
                </li>
                <li class="page-item">
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
        <!-- Posts Area-end -->

        @include('partials.blog-sidebar')

      </div>
    </div>
  </section>
  <!--=============== Blog Area ================-->
@endsection()
