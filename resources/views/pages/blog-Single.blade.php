@extends('layouts/master_home')

@section('home_content')

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
            
          <article class="entry entry-single" data-aos="fade-up">

            <div class="entry-img">
            
            
              <img src="{{ asset($blog_details->blog_image) }}" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="#">{{ $blog_details->blog_post_title}}</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="icofont-user"> Post By </i> <a href="{{ route('blogsingle',$blog_details->id) }}">{{ $blog_details['user']['name'] }}</a></li>
                <li class="d-flex align-items-center"><i class="icofont-wall-clock"> Posted </i>  <a href="{{ route('blogsingle',$blog_details->id) }}">{{ $blog_details->created_at->format('d-M-Y, h:i A') }}</time></a></li>
                <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="{{ route('blogsingle',$blog_details->id) }}">12 Comments</a></li>
              </ul>
            </div>

            <div class="entry-content">
              <p>
              {!! Str::limit($blog_details->blog_description,200) !!}
              </p>

            </div>

            <div class="entry-footer clearfix">
              <div class="float-left">
                <i class="icofont-folder"></i>
                <ul class="cats">
                  <li><a href="#">Business</a></li>
                </ul>

                <i class="icofont-tags"></i>
                <ul class="tags">
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div>

              <div class="float-right share">
                <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                <a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
              </div>

            </div>

          </article><!-- End blog entry -->
          
          <div class="blog-author clearfix" data-aos="fade-up">
            <img src="assets/img/blog-author.jpg" class="rounded-circle float-left" alt="">
            <h4>Jane Smith</h4>
            <div class="social-links">
              <a href="https://twitters.com/#"><i class="icofont-twitter"></i></a>
              <a href="https://facebook.com/#"><i class="icofont-facebook"></i></a>
              <a href="https://instagram.com/#"><i class="icofont-instagram"></i></a>
            </div>
            <p>
              Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
            </p>
          </div><!-- End blog author bio -->

          <div class="blog-comments" data-aos="fade-up">

            <h4 class="comments-count">8 Comments</h4>

            <div id="comment-1" class="comment clearfix">
              <img src="assets/img/comments-1.jpg" class="comment-img  float-left" alt="">
              <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i class="icofont-reply"></i> Reply</a></h5>
              <time datetime="2020-01-01">01 Jan, 2020</time>
              <p>
                Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente quis molestiae est qui cum soluta.
                Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
              </p>

            </div><!-- End comment #1 -->

            <div id="comment-2" class="comment clearfix">
              <img src="assets/img/comments-2.jpg" class="comment-img  float-left" alt="">
              <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i class="icofont-reply"></i> Reply</a></h5>
              <time datetime="2020-01-01">01 Jan, 2020</time>
              <p>
                Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet saepe. Officiis illo ut beatae.
              </p>

              <div id="comment-reply-1" class="comment comment-reply clearfix">
                <img src="assets/img/comments-3.jpg" class="comment-img  float-left" alt="">
                <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i class="icofont-reply"></i> Reply</a></h5>
                <time datetime="2020-01-01">01 Jan, 2020</time>
                <p>
                  Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam aspernatur ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed necessitatibus aut est. Eum officiis sed repellat maxime vero nisi natus. Amet nesciunt nesciunt qui illum omnis est et dolor recusandae.

                  Recusandae sit ad aut impedit et. Ipsa labore dolor impedit et natus in porro aut. Magnam qui cum. Illo similique occaecati nihil modi eligendi. Pariatur distinctio labore omnis incidunt et illum. Expedita et dignissimos distinctio laborum minima fugiat.

                  Libero corporis qui. Nam illo odio beatae enim ducimus. Harum reiciendis error dolorum non autem quisquam vero rerum neque.
                </p>

                <div id="comment-reply-2" class="comment comment-reply clearfix">
                  <img src="assets/img/comments-4.jpg" class="comment-img  float-left" alt="">
                  <h5><a href="">Sianna Ramsay</a> <a href="#" class="reply"><i class="icofont-reply"></i> Reply</a></h5>
                  <time datetime="2020-01-01">01 Jan, 2020</time>
                  <p>
                    Et dignissimos impedit nulla et quo distinctio ex nemo. Omnis quia dolores cupiditate et. Ut unde qui eligendi sapiente omnis ullam. Placeat porro est commodi est officiis voluptas repellat quisquam possimus. Perferendis id consectetur necessitatibus.
                  </p>

                </div><!-- End comment reply #2-->

              </div><!-- End comment reply #1-->

            </div><!-- End comment #2-->

            <div id="comment-3" class="comment clearfix">
              <img src="assets/img/comments-5.jpg" class="comment-img  float-left" alt="">
              <h5><a href="">Nolan Davidson</a> <a href="#" class="reply"><i class="icofont-reply"></i> Reply</a></h5>
              <time datetime="2020-01-01">01 Jan, 2020</time>
              <p>
                Distinctio nesciunt rerum reprehenderit sed. Iste omnis eius repellendus quia nihil ut accusantium tempore. Nesciunt expedita id dolor exercitationem aspernatur aut quam ut. Voluptatem est accusamus iste at.
                Non aut et et esse qui sit modi neque. Exercitationem et eos aspernatur. Ea est consequuntur officia beatae ea aut eos soluta. Non qui dolorum voluptatibus et optio veniam. Quam officia sit nostrum dolorem.
              </p>

            </div><!-- End comment #3 -->

            <div id="comment-4" class="comment clearfix">
              <img src="assets/img/comments-6.jpg" class="comment-img  float-left" alt="">
              <h5><a href="">Kay Duggan</a> <a href="#" class="reply"><i class="icofont-reply"></i> Reply</a></h5>
              <time datetime="2020-01-01">01 Jan, 2020</time>
              <p>
                Dolorem atque aut. Omnis doloremque blanditiis quia eum porro quis ut velit tempore. Cumque sed quia ut maxime. Est ad aut cum. Ut exercitationem non in fugiat.
              </p>

            </div><!-- End comment #4 -->

            <div class="reply-form">
              <h4>Leave a Reply</h4>
              <p>Your email address will not be published. Required fields are marked * </p>
              <form action="">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input name="name" type="text" class="form-control" placeholder="Your Name*">
                  </div>
                  <div class="col-md-6 form-group">
                    <input name="email" type="text" class="form-control" placeholder="Your Email*">
                  </div>
                </div>
                <div class="row">
                  <div class="col form-group">
                    <input name="website" type="text" class="form-control" placeholder="Your Website">
                  </div>
                </div>
                <div class="row">
                  <div class="col form-group">
                    <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Post Comment</button>

              </form>

            </div>

          </div><!-- End blog comments -->

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
              @foreach($single_categories as $post_cat)
                <li style="text-transform: uppercase;"><a href="{{ route('category/all_blog',$post_cat->id) }}">{{$post_cat->blog_category_title}} <span>({{$post_cat->postcategory->count()}})</span></a></li>
                @endforeach
              </ul>

            </div><!-- End sidebar categories-->

            <h3 class="sidebar-title">Recent Posts</h3>
            <div class="sidebar-item recent-posts">
              @foreach($recent_blog_post_single as $recent_post)
              <div class="post-item clearfix">
                <img src="{{asset($recent_post->blog_image)}}" alt="">
                <h4><a href="{{ route('blogsingle',$recent_post->id) }}">{{$recent_post->blog_post_title}}</a></h4>
                <time datetime="2020-01-01">{{$recent_post->created_at->format('d-M-Y, h:i A')}}</time>
              </div>
              @endforeach
              
            </div><!-- End sidebar recent posts-->

            <h3 class="sidebar-title">Tags</h3>
            <div class="sidebar-item tags">
              <ul>
                @foreach($recent_blog_post_single as $post_tags)
                <li style="text-transform: uppercase;"><a href="#">{{$post_tags->tags}}</a></li>
                @endforeach
              </ul>

            </div><!-- End sidebar tags-->

          </div><!-- End sidebar -->

        </div><!-- End blog sidebar -->

      </div>

    </div>
  </section><!-- End Blog Section -->
@endsection