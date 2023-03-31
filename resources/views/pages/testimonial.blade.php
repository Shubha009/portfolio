
@extends('layouts/master_home')

@section('home_content')

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>Testimonials</h2>
            <ol>
              <li><a href="{{ url('/') }}">Home</a></li>
              <li>Testimonials</li>
            </ol>
          </div>
  
        </div>
      </section><!-- End Breadcrumbs -->
  
      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials section-bg">
        <div class="container">
  
          <div class="row">
            @php
                ($i = 0)
            @endphp
           @foreach ($testimonials as $testimonial)
           <div class="col-lg-6" data-aos="fade-up" data-aos-delay="{{$i+=100}}">
            <div class="testimonial-item">
              <img src="{{ asset($testimonial->image) }}" class="testimonial-img" alt="">
              <h3>{{ $testimonial->title }}</h3>
              <h4>{{ $testimonial->designation }}</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                {{ $testimonial->description }}
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
          
           @endforeach
          </div>
        </div>
      </section><!-- End Testimonials Section -->
@endsection