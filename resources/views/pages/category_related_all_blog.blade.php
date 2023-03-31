@extends('layouts/master_home')

@section('home_content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>
          <ol>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 entries">

          @foreach($category_all_posts as $all_post)
            <article class="entry" data-aos="fade-up">
              <div class="entry-img">
                <img src="{{asset($all_post->blog_image) }}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="{{ route('blogsingle',$all_post->id) }}">{{$all_post->blog_post_title }}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"> Post By </i> <a href="{{ route('blogsingle',$all_post->id) }}">{{ $all_post->user->name }}</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"> Posted </i> <a href="{{ route('blogsingle',$all_post->id) }}"><time datetime="2020-01-01">{{ $all_post->created_at->format('d-M-Y, h:i A') }}</time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="{{ route('blogsingle',$all_post->id) }}">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                {!! Str::limit($all_post->blog_description,200) !!}
                </p>
                <div class="read-more">
                  <a href="{{ route('blogsingle',$all_post->id) }}">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
            @endforeach
            

            <div class="blog-pagination justify-content-center">
            
            {{$category_all_posts->links()}}
            </div>
            

            <!-- <div class="blog-pagination">
              <ul class="justify-content-center">
                <li class="disabled"><i class="icofont-rounded-left"></i></li>
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
              </ul>
            </div> -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar" data-aos="fade-left">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="icofont-search"></i></button>
                </form>

              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                @foreach($categories_all as $cat)
                    <li style="text-transform: uppercase;"><a href="{{ route('category/all_blog',$cat->id) }}">{{ $cat->blog_category_title}} <span>({{$cat->postcategory->count()}})</span></a></li>
                    @endforeach
                </ul>

              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
                @foreach($recent_blog_post as $recent_post)
                <div class="post-item clearfix">
                  <img src="{{asset($recent_post->blog_image )}}" alt="">
                  <h4><a href="{{ route('blogsingle',$recent_post->id) }}">{{ $recent_post->blog_post_title }}</a></h4>
                  <time >{{ $recent_post->created_at->format('d-M-Y, h:i A') }}</time>
                </div>
                @endforeach
                

              </div><!-- End sidebar recent posts-->

              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                    @foreach($recent_blog_post as $tags)
                  <li style="text-transform: uppercase;"><a href="#">{{ $recent_post->tags }}</a></li>
                  @endforeach
                </ul>

              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
@endsection