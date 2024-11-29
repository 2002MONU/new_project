@extends('website.layouts.app')
@section('website')
<!--===== PRELOADER STARTS =======-->
<div class="preloader">
  <div class="loading-container">
    <div class="loading"></div>
    <div id="loading-icon">
      <img src="{{asset('assets/dynamics/'.$siteSetting->favicon)}}" alt="favicon">
    </div>
  </div>
</div>
<!--===== PRELOADER ENDS =======-->


<!--===== PROGRESS STARTS=======-->
<div class="paginacontainer">
  <div class="progress-wrap">
    <svg
      class="progress-circle svg-content"
      width="100%"
      height="100%"
      viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
</div>
<!--===== PROGRESS ENDS=======-->

<!--===== HERO AREA STARTS =======-->
<div class="slider-header-carousel owl-carousel">
  @foreach ($sliders as $slider)
  <div class="hero1-section-area">
    <img src="{{asset('assets/dynamics/'.$slider->image)}}" alt="" class="header-img1">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="hero-heading-area heading1">
            <h5>{{$slider->title}}</h5>
            <h1 class="main-heading">
             {{$slider->heading}}
            </h1>
            <p class="pera">
             {{$slider->description}}
            </p>
            <div class="btn-area">
              <a href="{{route('website.about')}}" class="header-btn1">Discover More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach

</div>
<!--===== HERO AREA ENDS =======-->

<!--===== ABOUT AREA STARTS =======-->
<div id="about-us" class="about4-section-area sp1">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="about-header-area heading9">
          <h5
            data-aos="fade-left"
            data-aos-duration="800"
            class="aos-init aos-animate">
            About Us
          </h5>
          <h2>{{$homeAbout->title}}</h2>
          <p
            data-aos="fade-left"
            data-aos-duration="1000"
            class="aos-init aos-animate">
            {!! $homeAbout->description !!}
          </p>
          <div class="row">
            <div
              class="col-lg-6 col-md-6 aos-init"
              data-aos="zoom-in"
              data-aos-duration="1000">
              <div class="counter-box">
                <h2><span class="counter">{{$homeAbout->active_client}}</span>+</h2>
                <p>Active Clients</p>
              </div>
            </div>

            <div
              class="col-lg-6 col-md-6 aos-init"
              data-aos="zoom-in"
              data-aos-duration="1200">
              <div class="counter-box">
                <h2><span class="counter">{{$homeAbout->electricity_Services}}</span>+</h2>
                <p>Electricity Services</p>
              </div>
            </div>

            <div
              class="col-lg-6 col-md-6 aos-init"
              data-aos="zoom-in"
              data-aos-duration="1000">
              <div class="counter-box">
                <h2><span class="counter">{{$homeAbout->team_Advisors}}</span>+</h2>
                <p>Team Advisors</p>
              </div>
            </div>

            <div
              class="col-lg-6 col-md-6 aos-init"
              data-aos="zoom-in"
              data-aos-duration="1200">
              <div class="counter-box">
                <h2><span class="counter">{{$homeAbout->years_of_Experienced}}</span>+</h2>
                <p>Years of Experienced</p>
              </div>
            </div>
          </div>
          <div
            class="btn-area aos-init"
            data-aos="fade-left"
            data-aos-duration="1200">
            <a href="{{route('website.index')}}" class="header-btn7">Read More<i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="about-images-area">
          <div
            class="img1 aos-init aos-animate"
            data-aos="zoom-in"
            data-aos-duration="1000">
            <img src="{{asset('assets/dynamics/'.$homeAbout->top_image)}}" alt="img">
           
          </div>
          <div
            class="img2 aos-init"
            data-aos="zoom-in"
            data-aos-duration="1100">
            <img src="{{asset('assets/dynamics/'.$homeAbout->bottom_image)}}" alt="img">
          </div>
          <div
            class="content-experiance aos-init"
            data-aos="zoom-in"
            data-aos-duration="1200">
            <h3>Our Company</h3>
            <h2><span class="counter">{{$homeAbout->years_of_Experienced}}</span>+</h2>
            <p>Years of Experienced</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== ABOUT AREA ENDS =======-->

<!--===== SERVICE AREA STARTS =======-->
<div id="services" class="casestudy-section-area sp1">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto">
        <div class="casestudy-header heading4 text-center">
          <h5
            data-aos="fade-up"
            data-aos-duration="800"
            class="aos-init aos-animate">
            Services
          </h5>
          <h2>Our All Services Here</h2>
          <p data-aos="fade-up" data-aos-duration="1000" class="aos-init">
            {{$siteSetting->service_box_title}}
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div
        class="col-lg-12 aos-init"
        data-aos="fade-up"
        data-aos-duration="1000">
        <div class="casestudy-slider-area owl-carousel owl-loaded owl-drag">
          <div class="owl-stage-outer">
            <div class="owl-stage">
              @foreach ($services as $service)
              @php
                $image = json_decode($service->images,true);
              @endphp
              <div class="owl-item">
                <div class="case-author-boxarea">
                  <div class="imges">
                    <img src="{{asset('assets/dynamics/'.$image[0])}}" alt="img">
                  </div>
                  <div class="case-content">
                    <div class="text">
                      <a href="{{route('website.service-details',$service->slug)}}">{{$service->title}}</a>
                    </div>
                    <div class="icons">
                      <a href="{{route('website.service-details',$service->slug)}}"><span><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
             
            </div>
          </div>
          <div class="owl-nav">
            <button type="button"  class="owl-prev">
              <i class="fa-solid fa-arrow-left"></i></button><button type="button" class="owl-next">
              <i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>
          <div class="owl-dots disabled"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<script></script>
<!--===== SERVICE AREA ENDS =======-->
<div id="our-clients" class="slider-section-area">
  <div class="container">
    <div class="casestudy-header heading4 text-center">
      <h5
        data-aos="fade-up"
        data-aos-duration="800"
        class="aos-init aos-animate">
        Our Clients
      </h5>
    </div>

    <div class="row">
      <div class="col-lg-5 m-auto">
        <div class="header-slider text-center">
          <h3>{{$siteSetting->client_heading}}</h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="slider-images owl-carousel owl-loaded owl-drag">
          <div class="owl-stage-outer">
            <div
              class="owl-stage"
              style="
                    transform: translate3d(-1856px, 0px, 0px);
                    transition: 2s;
                    width: 3978px;
                  ">
                  @foreach ($clients as $client)
                  <div
                    class="owl-item"
                    style="width: 235.2px; margin-right: 30px">
                    <div class="img1">
                      <img src="{{asset('assets/dynamics/'.$client->image)}}" alt="img">
                    </div>
                  </div>
                  @endforeach
              
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>

<section id="gallery" class="work-process-two">
  <div class="container">
    <div class="col-lg-6 m-auto">
      <div class="casestudy-header heading4 text-center">
        <h5
          data-aos="fade-up"
          data-aos-duration="800"
          class="aos-init aos-animate">
          Gallery
        </h5>
        <h2>Our All Galleries</h2>
        <p data-aos="fade-up" data-aos-duration="1000" class="aos-init">
          {{$siteSetting->gallery_title}}
        </p>
      </div>
    </div>

    <div class="process">
      <div class="row clearfix">
        @foreach($galleries as $gallery)
        @php
            $images = json_decode($gallery->images, true);
        @endphp
        @if(!empty($images))
            <!-- Display only the first image -->
            <div class="col-lg-3 text-center col-sm-6 col-md-4 mb-3">
                <a data-fancybox="gallery" href="{{ asset('assets/dynamics/' . $images[0]) }}">
                    <img
                        class="img-fluid img-thumbnail"
                        src="{{ asset('assets/dynamics/' . $images[0]) }}"
                        alt="Gallery Image">
                </a>
            </div>
        @endif
    @endforeach
    
     </div>

    <!-- View All Button -->
    <div class="lower-box clearfix text-center">
      <div
        class="btn-area aos-init"
        data-aos="fade-left"
        data-aos-duration="1200">
        <a href="{{route('website.gallery')}}" class="header-btn7">View More<i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- Include Fancybox from CDN -->

<script>
  // Initialize Fancybox with navigation and all images grouped
  Fancybox.bind("[data-fancybox='gallery']", {
    loop: true, // Loop through the images infinitely
    buttons: [
      "zoom",
      "slideShow",
      "fullScreen",
      "download",
      "thumbs",
      "close",
    ], // Enable prev/next buttons and toolbar
    toolbar: true,
    arrows: true, // Show arrows for navigation
    Image: {
      zoom: true, // Allow zooming on images
      fit: "contain", // Fit images in the viewport
    },
  });
</script>

<div class="testimonial4-section-area sp1">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="testimonial-header heading9">
          <h5
            data-aos="fade-left"
            data-aos-duration="800"
            class="aos-init aos-animate">
            Testimonials
          </h5>
          <h2>Happy customers Testimonials</h2>
          <p
            data-aos="fade-left"
            data-aos-duration="1000"
            class="aos-init aos-animate">
           {{$siteSetting->testimonial_title}}
          </p>
          <div
            class="btn-area aos-init aos-animate"
            data-aos="fade-left"
            data-aos-duration="1200">
            <a href="{{route('website.index')}}" class="header-btn7">Contact Us <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div
          class="testimonial-slider-boxarea4 owl-carousel owl-loaded owl-drag">
          <div class="owl-stage-outer">
            <div
              class="owl-stage"
              style="
                    transform: translate3d(-1771px, 0px, 0px);
                    transition: 3s;
                    width: 3544px;
                  ">
                  @foreach ($testimonials as $testimonial)
                    
                  <div
                    class="owl-item"
                    style="width: 412.993px; margin-right: 30px">
                    <div class="tesimonial-slider">
                      <p>
                       {!!$testimonial->description!!}
                      </p>
                      <div class="auhtor-images">
                        <div class="img1">
                          <img src="{{asset('assets/dynamics/'.$testimonial->image)}}" alt="img">
                        </div>
                        <div class="text">
                          <a href="javascript:void(0);">{{$testimonial->name}}</a>
                          <p>{{$testimonial->designation}}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
             
            </div>
          </div>
          <div class="owl-nav"></div>
          <div class="owl-dots disabled"></div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection