@extends('website.layouts.app')
@section('website')

<!--===== HERO AREA STARTS =======-->
<div class="hero1-section-area about-bg-area">
  <img src="{{asset('assets/dynamics/'.$siteSetting->about_banner)}}" alt="" class="header-img1">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 m-auto">
        <div class="hero-heading-area heading1 text-center">
          <h1>About Us</h1>
          <a href="{{route('website.index')}}" class="backline">Home <i class="fa-solid fa-angle-right"></i><span>About Us</span></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== HERO AREA ENDS =======-->

<!--===== ABOUT AREA STARTS =======-->
<div class="about1-section-area sp1">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="about-images-area">
          <div class="img1">
            <img src="{{asset('assets/dynamics/'.$about->top_image)}}" alt="img">
          </div>
          <div class="img2">
            <img src="{{asset('assets/dynamics/'.$about->bottom_image)}}" alt="img">
          </div>
          <div class="conter-area">
            <h3><span class="counter">{{$about->years_of_Experienced}}</span>+</h3>
            <p>Years of Experienced</p>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="about-header-area heading2">
          <h5>About Us</h5>
          <h2 class="tg-element-title">{{$about->title}}</h2>
          {!! $about->description !!}

          
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== ABOUT AREA ENDS =======-->

<!--===== ABOUT AREA STARTS =======-->
<div class="about3-section-area aboutpage-inner sp1">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5">
        <div class="about3-header-area heading2">
          <h5>Who Are We</h5>
          <h2 class="tg-element-title">{{$whoWeAre->title}}</h2>
          {!! $whoWeAre->description !!}
          
          <div class="btn-area">
            <a href="services.php" class="header-btn1">View All Service <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-1"></div>
      <div class="col-lg-6">
        <div class="about-images-area">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="img1">
                <div class="space70 d-md-block d-none"></div>
                <div class="space30 d-md-none d-block"></div>
                <img src="{{asset('assets/dynamics/'.$whoWeAre->top_image)}}" alt="">
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="img1">
                <div class="space30 d-md-none d-block"></div>
                <!-- <img src="assets/img/all-images/about-img6.png" alt=""> -->
                 <img src="{{asset('assets/dynamics/'.$whoWeAre->bottom_image)}}" alt="">
                <div class="about-footer-bottom">
                  {{-- <div class="img">
                    <img src="{{asset('https://png.pngtree.com/element_our/png/20181008/star-logo-design-png_123799.jpg')}}" alt="">
                  </div> --}}
                  <div class="content">
                    <span>{{$whoWeAre->image_title}} </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== ABOUT AREA ENDS =======-->






<!--===== TEAM AREA STARTS =======-->
<div class="team1-section-area sp2">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto">
        <div class="team-header-area heading2 text-center">
          <h5 data-aos="fade-left" data-aos-duration="800">Our Team</h5>
          <h2 class="tg-element-title">Electricity Service Offerings</h2>
          <p data-aos="fade-left" data-aos-duration="1000">{{$siteSetting->service_offering_title}}</p>
        </div>
      </div>
    </div>

    <div class="row">
      @foreach ($outTeam as $team)
      <div class="col-lg-3 col-md-6">
        <div class="team-auhtor-boxarea">
          <div class="images">
            <img src="{{asset('assets/dynamics/'.$team->image)}}" alt="img">
            <div class="team-social-area">
              <div class="icons">
                
              </div>
            </div>
          </div>
          <div class="content-area">
            <a href="javascript:void(0);">{{$team->name}}</a>
            <p>{{$team->designations}}</p>
          </div>
        </div>
      </div>
      @endforeach

      
    </div>
  </div>
</div>
<!--===== TEAM AREA ENDS =======-->

@endsection