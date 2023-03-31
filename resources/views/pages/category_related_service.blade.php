@extends('layouts/master_home')

@section('home_content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Services</h2>
        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li>Services Details</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 entries">

          @foreach($category_all_service as $all_service)
            <article class="entry" data-aos="fade-up">
              <!-- <div class="entry-img">
                <img src="{{asset($all_service->blog_image) }}" alt="" class="img-fluid">
              </div> -->

              <h2 class="entry-title">
                <a href="{{ route('blogsingle',$all_service->id) }}">{{$all_service->title }}</a>
              </h2>

            
              <div class="entry-content">
                <p>
                {!! Str::limit($all_service->description,200) !!}
                </p>
               
              </div>

            </article><!-- End blog entry -->
            @endforeach
            
            <div class="blog-pagination justify-content-center">
            
            {{$category_all_service->links()}}
            </div>
            
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
                    <li style="text-transform: uppercase;"><a href="{{ route('category/service',$cat->id) }}">{{ $cat->service_category_name}} <span>({{$cat->servicecategory->count()}})</span></a></li>
                    @endforeach
                </ul>

              </div><!-- End sidebar categories-->

              </div><!-- End sidebar recent posts-->

              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
@endsection