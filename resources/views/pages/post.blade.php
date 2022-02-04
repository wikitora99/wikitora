
@extends('layouts.main')

@section('content')
  
  @include('partials.blog-slider')

  <!--=============== Blog Area =================-->
  <section class="blog_area single-post-area section-padding">
    <div class="container">
       <div class="row">

        <!-- Single Post Area-start -->
        <div class="col-lg-8 posts-list">
          <div class="single-post">
            <div class="feature-img">
               <img class="img-fluid" src="img/blog/{{ $post['thumb'] }}" alt="">
            </div>
            <div class="blog_details">
              <h2>{{ $post['title'] }}</h2>
              <ul class="blog-info-link mt-3 mb-4">
                <li><a href="#"><i class="fa fa-user"></i>{{ $post['author'] }}</a></li>
                <li><a href="#"><i class="fa fa-comments"></i>
                  @foreach($post['category'] as $cat)
                    {{ $cat[$loop->index] }}
                  @endforeach()
                </a></li>
              </ul>
              <p class="excert">
                {{ $post['text'] }}
              </p>
            </div>
          </div>
         
          <!-- Comment Section-start -->
          <div class="comments-area">
            <h4>05 Comments</h4>
            <div class="comment-list">
              <div class="single-comment justify-content-between d-flex">
                <div class="user justify-content-between d-flex">
                  <div class="thumb">
                    <img src="img/comment/comment_1.png" alt="">
                  </div>
                  <div class="desc">
                    <p class="comment">
                      Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                      Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                    </p>
                    <div class="d-flex justify-content-between">
                      <div class="d-flex align-items-center">
                        <h5>
                          <a href="#">Emilly Blunt</a>
                        </h5>
                        <p class="date">December 4, 2017 at 3:12 pm </p>
                      </div>
                      <div class="reply-btn">
                        <a href="#" class="btn-reply text-uppercase">reply</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="comment-list">
               <div class="single-comment justify-content-between d-flex">
                  <div class="user justify-content-between d-flex">
                     <div class="thumb">
                        <img src="img/comment/comment_2.png" alt="">
                     </div>
                     <div class="desc">
                        <p class="comment">
                           Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                           Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                        </p>
                        <div class="d-flex justify-content-between">
                           <div class="d-flex align-items-center">
                              <h5>
                                 <a href="#">Emilly Blunt</a>
                              </h5>
                              <p class="date">December 4, 2017 at 3:12 pm </p>
                           </div>
                           <div class="reply-btn">
                              <a href="#" class="btn-reply text-uppercase">reply</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="comment-list">
              <div class="single-comment justify-content-between d-flex">
                <div class="user justify-content-between d-flex">
                  <div class="thumb">
                    <img src="img/comment/comment_3.png" alt="">
                  </div>
                  <div class="desc">
                    <p class="comment">
                      Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                      Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                    </p>
                    <div class="d-flex justify-content-between">
                      <div class="d-flex align-items-center">
                        <h5>
                          </a>
                        </h5>
                        <p class="date">December 4, 2017 at 3:12 pm </p>
                      </div>
                      <div class="reply-btn">
                        <a href="#" class="btn-reply text-uppercase">reply</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Comment Section-end -->

          <!-- Comment Form-start -->
          <div class="comment-form">
            <h4>Leave a Reply</h4>
            <form class="form-contact comment_form" action="#" id="commentForm">
               <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
              </div>
            </form>
          </div>
          <!-- Comment Form-end -->
        </div>
        <!-- Single Post Area-end -->
        
        @include('partials.blog-sidebar')

       </div>
    </div>
  </section>
  <!--=============== Blog Area =================-->
@endsection()