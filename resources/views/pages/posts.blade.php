
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

          @forelse($posts as $post)
            <!-- Article -->          
            <article class="blog_item">
              <div class="blog_item_img">
                <img class="card-img rounded-0" src="/img/blog/cover/{{ $post->cover }}" alt="Post thumbnail">
                <span class="blog_item_date">
                  <h3>{{ $post->published_at->format('M') }}</h3>
                  <p>{{ $post->published_at->format('d') }}</p>
                </span>
              </div>
              <div class="blog_details">
                <a class="d-inline-block" href="/blog/{{ $post->slug }}">
                  <h2>{{ $post->title }}</h2>
                </a>
                <p>{{ $post->excerpt }}...</p>
                <ul class="blog-info-link">
                  <li>
                    <i class="fa fa-user"></i>
                    <a href="/blog?author={{ $post->author->username }}"> {{ $post->author->name }}</a>
                  </li>
                  <li>
                    <i class="fa fa-tag"></i>
                    <a href="/blog?category={{ $post->category->slug }}"> {{ $post->category->name }}</a>
                  </li>                  
                </ul>
              </div>
            </article>            
            
          @empty
            <div class="no_data">
              <h2>No post found!</h2>
            </div>        
          @endforelse  

          @if($posts)
            {{ $posts->onEachSide(2)->links() }}
          @endif

          </div>
        </div>
        <!-- Posts Area-end -->

        @include('partials.blog-sidebar')

      </div>
    </div>
  </section>
  <!--=============== Blog Area ================-->
@endsection()
