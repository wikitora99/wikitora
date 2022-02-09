<!-- Sidebar-start -->
<div class="col-lg-4">
  <div class="blog_right_sidebar">
    <aside class="single_sidebar_widget search_widget">
      <form action="/blog" method="get">
      @if(request('category'))
        <input type="hidden" name="category" value="{{ request('category') }}">
      @endif
        <div class="form-group">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder='Search here...' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search here...'" name="search" value="{{ request('search') }}">
            <div class="input-group-append">
              <button class="btn" type="button"><i class="ti-search"></i></button>
            </div>
          </div>
        </div>
        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Search</button>
      </form>
    </aside>

  @if($categories)
    <aside class="single_sidebar_widget post_category_widget">
      <h4 class="widget_title">Category</h4>
      <ul class="list cat-list">
      @foreach($categories as $category)
        <li>        
          <a href="/blog?category={{ $category->slug }}" class="d-flex">
            <p>{{ $category->name }} ({{ $category->posts->count() }})</p>
          </a>
        </li>
      @endforeach
      </ul>
    </aside>
  @endif

  @if($popular)
    <aside class="single_sidebar_widget popular_post_widget">
      <h3 class="widget_title">Popular Post</h3>
    @foreach($popular as $post)
      <div class="media post_item">
        <img src="/img/blog/cover/{{ $post->cover }}" alt="Post Thumbnail">
        <div class="media-body">
          <a href="/blog/{{ $post->slug }}">
            <h3>{{ Str::limit($post->title, 40) }}</h3>
          </a>
          <p>{{ $post->published_at->diffForHumans() }}</p>
        </div>
      </div>
    @endforeach  
    </aside>
  @endif

    <aside class="single_sidebar_widget tag_cloud_widget">
      <h4 class="widget_title">Tag Clouds</h4>
      <ul class="list">
      @foreach($tags as $tag)
        <li>
          <a href="/blog?tag={{ $tag->slug }}">{{ $tag->name }}</a>
        </li>
      @endforeach
      </ul>
    </aside>            

    <aside class="single_sidebar_widget newsletter_widget">
      <h4 class="widget_title">Newsletter</h4>

      <form action="#">
        <div class="form-group">
          <input type="email" class="form-control" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
        </div>
        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Subscribe</button>
      </form>
    </aside>
  </div>
</div>
<!-- Sidebar-end -->