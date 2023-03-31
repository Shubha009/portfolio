@extends('layouts/master_home')

@section('home_content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Portolio</h2>
        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li>Portolio</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter=.all class="filter-active">All</li>
            @foreach ($categories as $category)
          <li data-filter=".filter{{ $category->id }}">{{ $category->category_name }}</li>
          @endforeach
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up">
      @foreach ($portfolioes as $portfolio)
      <div class="col-lg-4 col-md-6 portfolio-item all filter{{ $portfolio->category_id }}">
        
        <img src="{{ asset($portfolio->image) }}" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>{{ $category->category_name }}</h4>
          <p>App</p>
          <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
          <a href="{{ route('portfolio/details',$portfolio->id) }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>
      @endforeach
      
    </div>
    {{ $portfolioes->links()}}

    </div>
  </section><!-- End Portfolio Section -->
@endsection