@extends('layouts/master_home')

@section('home_content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Team</h2>
        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li>Team</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Our Team Section ======= -->
  <section id="team" class="team section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Our <strong>Team</strong></h2>
        <p> {{ $team_headings->heading }}</p>
      </div>

      <div class="row">

        @foreach ($team_membars as $team_membar)
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up">
            <div class="member-img">
              <img src="{{ asset($team_membar->image) }}" class="img-fluid" alt="">
              <div class="social">
                <a href="{{ url($team_membar->url1) }}" target="_blank"><i class="icofont-{{ $team_membar->icon1 }}"></i></a>
                <a href="{{ url($team_membar->url2) }}" target="_blank"><i class="icofont-{{ $team_membar->icon2 }}"></i></a>
                <a href="{{ url($team_membar->url3) }}" target="_blank"><i class="icofont-{{ $team_membar->icon3 }}"></i></a>
                <a href="{{ url($team_membar->url4) }}" target="_blank"><i class="icofont-{{ $team_membar->icon4 }}"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>{{ $team_membar->title }}</h4>
              <span>{{ $team_membar->designation }}</span>
            </div>
          </div>
        </div>
        @endforeach

        

      </div>

    </div>
  </section><!-- End Our Team Section -->
@endsection