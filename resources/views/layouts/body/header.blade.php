
@php
    $Social_infos =DB::table('footer_addresses')->get();
@endphp
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="{{ url('/') }}"><span>Com</span>pany</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{ url('/') }}">Home</a></li>

          <li class="drop-down"><a href="">About</a>
            <ul>
              <li><a href="{{ route('about/us') }}">About Us</a></li>
              <li><a href="{{ route('team') }}">Team</a></li>
              <li><a href="{{ route('testimonial') }}">Testimonials</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li>

          <li><a href="{{ route('service') }}">Services</a></li>
          <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
          <li><a href="{{ route('pricing') }}">Pricing</a></li>
          <li><a href="{{ route('blog') }}">Blog</a></li>
          <li><a href="{{ route('contact') }}">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->
        @foreach($Social_infos as $links)
      <div class="header-social-links">
        <a href="{{$links->twitter_url}}" class="twitter" target="_blank"><i class="{{$links->twitter_icon}}"></i></a>
        <a href="{{$links->facebook_url}}" class="facebook" target="_blank"><i class="{{$links->facebook_icon}}"></i></a>
        <a href="{{$links->instragram_url}}" class="instagram" target="_blank"><i class="{{$links->instragram_icon}}"></i></a>
        <a href="{{$links->skype_url}}" class="google-plus" target="_blank"><i class="{{$links->skype_icon}}"></i></a>
        <a href="{{$links->linkedin_url}}" class="linkedin" target="_blank"><i class="{{$links->linkedin_icon}}"></i></a>
      </div>
        @endforeach
    </div>
  </header>
