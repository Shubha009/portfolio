@extends('layouts/master_home')

@section('home_content')



<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfolio Details</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Portfolio Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->



    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">
        <div class="portfolio-details-container">

        
          <div class="owl-carousel portfolio-details-carousel">
            <img src="{{ asset($portfolioes->image)}}" class="img-fluid" alt="" >
          </div>
          

          <div class="portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: {{$portfolioes['portfolio_cat']['category_name']}}</li>
              <li><strong>Portfolio Nmae</strong>: {{$portfolioes->portfolio_name}}</li>
              <li><strong>Client</strong>: {{$portfolioes->client_name}}</li>
              <li><strong>Project date</strong>: {{$portfolioes->project_date}}</li>
              <li><strong>Project URL</strong>: <a href="#">{{$portfolioes->project_url}}</a></li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>This is an example of portfolio detail</h2>
          <p>
          {{$portfolioes->description}}
          </p>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

@endsection