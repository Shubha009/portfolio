
@php
    $footer_infos =DB::table('footer_addresses')->get();

    $footer_useful_links =DB::table('footer_usefull_links')->get();


    $categories_all = App\Models\Service_category::with("servicecategory")->orderBy('service_category_name','ASC')->get();

    
@endphp


<footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">
            @foreach($footer_infos as $info)
          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>{{$info->company_name}}</h3>
            <p>
            {{$info->address}}
            <br><br>
              <strong>Phone:</strong> {{$info->phone}}<br>
              <strong>Email:</strong> {{$info->email}}<br>
            </p>
          </div>
          @endforeach

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              @foreach($footer_useful_links as $link)
              <li><i class="bx bx-chevron-right"></i> <a href="{{$link->link_url}}">{{$link->link_name}}</a></li>
                @endforeach
              
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              @foreach($categories_all as $cat)
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('category/service',$cat->id) }}"> {{$cat->service_category_name}}</a></li>
              @endforeach
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">
        @foreach($footer_infos as $info)
      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">

          {{$info->copywrite_first}} <strong><span>{{$info->developer_name}}</span></strong>. {{$info->copywrite_last}}
        </div>
        <div class="credits">
          Developed by <a href="{{$info->developer_url}}" target="_blank">{{$info->developer_name}}</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="{{$info->twitter_url}}" class="twitter" target="_blank"><i class="{{$info->twitter_icon}}"></i></a>
        <a href="{{$info->facebook_url}}" class="facebook" target="_blank"><i class="{{$info->facebook_icon}}"></i></a>
        <a href="{{$info->instragram_url}}" class="instagram" target="_blank"><i class="{{$info->instragram_icon}}"></i></a>
        <a href="{{$info->skype_url}}" class="google-plus" target="_blank"><i class="{{$info->skype_icon}}"></i></a>
        <a href="{{$info->linkedin_url}}" class="linkedin" target="_blank"><i class="{{$info->linkedin_icon}}"></i></a>
      </div>
      @endforeach
    </div>
  </footer>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>