@extends('layouts/master_home')

@section('home_content')

<main id="main">

<!-- ============ Note =============== -->
<!-- Portfolio Details page used for slider details -->
<!-- ============= Note ============== -->

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Slider Details</h2>
          <ol>
            <li><a href="{{url('/')}}">Home</a></li>
            <li>Slider Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Slider Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">
        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="{{asset($sliderdetails->image)}}" class="img-fluid" alt="">
            
          </div>

        </div>
            
        <div class="portfolio-description">
          <h2>{{ $sliderdetails->title }}</h2>
          <p>
          {!! $sliderdetails->description !!}
          </p>
        </div>
        
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

@endsection