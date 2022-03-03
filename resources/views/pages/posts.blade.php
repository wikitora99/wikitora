
@extends('layouts.main')

@section('content')

  @include('partials.slider')

  <!--=============== Blog Area =================-->
  <section class="blog_area section-padding">
    <div class="container">
      <div class="row">
      
        <!-- Posts Area-start -->
        <div class="col-lg-8 mb-5 mb-lg-0">
          <div class="blog_left_sidebar">    

          @if ($posts->count())

            @foreach ($posts as $post)
              <!-- Article -->
              <article class="blog_item">
                <div class="blog_item_img">
                  <img class="card-img rounded-0" src="{{ asset('img/blog/cover') }}/{{ $post->cover }}" alt="Post thumbnail">
                  <span class="blog_item_date">
                    <h3>{{ $post->published_at->format('M') }}</h3>
                    <p>{{ $post->published_at->format('d') }}</p>
                  </span>
                </div>
                <div class="blog_details">
                  <a class="d-inline-block" href="{{ route('post.show', ['post' => $post]) }}">
                    <h2>{{ $post->title }}</h2>
                  </a>
                  <p>{{ $post->excerpt }}..</p>
                  <ul class="blog-info-link">
                    <li>
                      <i class="fa fa-user"></i>
                      <a href="{{ route('post.index', ['author' => $post->author->username]) }}"> {{ $post->author->name }}</a>
                    </li>
                    <li>
                      <i class="fa fa-tag"></i>
                      <a href="{{ route('post.index', ['category' => $post->category->slug]) }}"> {{ $post->category->name }}</a>
                    </li>                  
                  </ul>
                </div>
              </article>   
            @endforeach         
          
            {{ $posts->onEachSide(2)->links('partials.pagination') }}

          @else
            <div class="no_data">
              <h2>No post found!</h2>
              <span>                
                <a href="{{ route('post.index') }}"><i class="ti-arrow-left"></i> Back to Blog</a>
              </span>              
            </div>
          @endif

          </div>
        </div>
        <!-- Posts Area-end -->

        @include('partials.sidebar')

      </div>
    </div>
  </section>
  <!--=============== Blog Area ================-->
@endsection()
