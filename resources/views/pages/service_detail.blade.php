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

        <article class="entry entry-single" data-aos="fade-up">

          <div class="entry-img">
            <img src="assets/img/blog-1.jpg" alt="" class="img-fluid">
          </div>

          <h2 class="entry-title">
            <a href="blog-single.html"> {{$service_details->title}} </a>
          </h2>

          

          <div class="entry-content">
            <p>
            {!! $service_details->description !!}
            </p>

            
          </div>

          

        </article><!-- End blog entry -->

        

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
            @foreach($services_cats as $services_cat)
                <li style="text-transform: uppercase;"><a href="{{ route('category/service',$services_cat->id) }}">{{$services_cat->service_category_name}} <span>({{$services_cat->servicecategory->count()}})</span></a></li>
                @endforeach
            </ul>

          </div><!-- End sidebar categories-->

        </div><!-- End sidebar -->

      </div><!-- End blog sidebar -->

    </div>

  </div>
</section><!-- End Blog Section -->

</main><!-- End #main -->


@endsection