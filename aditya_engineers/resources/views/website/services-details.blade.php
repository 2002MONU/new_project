@extends('website.layouts.app')
@section('website')

<!--===== HERO AREA STARTS =======-->
<div class="hero1-section-area about-bg-area">
  <img src="{{asset('assets/dynamics/'.$siteSetting->service_banner)}}" alt="img" class="header-img1">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 m-auto">
        <div class="hero-heading-area heading1 text-center">
          <h1>Service Details</h1>
          <a href="{{route('website.index')}}" class="backline">Home <i class="fa-solid fa-angle-right"></i><span>Service Details</span></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== HERO AREA ENDS =======-->

<!--===== SERVICE AREA STARTS =======-->
<div class="service-leftside-area sp8">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="service-rightside-area heading2 rightsidebar">
          <div class="img1">
            <!-- <img src="assets/img/all-images/service-img13.png" alt=""> -->

            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
    @php
      $images = json_decode($service->images,true);
    @endphp
  <div class="carousel-inner">
    @foreach ($images as $image)
     <div class="carousel-item active">
      <img src="{{asset('assets/dynamics/'.$image)}}" class="d-block w-100" alt="...">
    </div>
    @endforeach
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
          </div>
          <div class="space32"></div>
          <h3>{{$service->title}}</h3>
          {!! $service->description1 !!}
          <div class="space16"></div>
          < <h3>{{$service->title2}}</h3>
          {!! $service->description2 !!}

          <div class="row">
            <div class="col-lg-6">
              <div class="space32"></div>
              <div class="img1">
                <img src="{{asset('assets/dynamics/'.$service->image_01)}}" alt="img">
                <div class="space32"></div>
                <p>{{$service->description3}}</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="space32"></div>
              <div class="img1">
                <img src="{{asset('assets/dynamics/'.$service->image_02)}}" alt="img">
                <div class="space32"></div>
                <p>{{$service->description4}}</p>
              </div>
            </div>
          </div>
          <div class="space32"></div>

        </div>
      </div>
      <div class="col-lg-4">
        <div class="service-leftside">
          <div class="service-author-list">
            <h3>Our Other Services</h3>
            <ul>
              @foreach ($services as $service)
              <li><a href="{{route('website.service-details',$service->slug)}}">{{$service->title}}<i class="fa-solid fa-arrow-right"></i></a></li>
                
              @endforeach
              
            </ul>
          </div>

          <div class="helping-area">
            <h3>If You Need Any Help <br class="d-lg-block d-none"> Contact With Us</h3>
            <div class="btn-area">
              <a href="tel:+{{$service->contact}}" class="header-btn1"><i class="fa-solid fa-phone-volume"></i>+{{$service->contact}}</a>
            </div>
          </div>
          <div class="download-broucher">
            <h3>Download Brochure</h3>
            <p>{{$service->brocher_title}}</p>
            <div class="btn-area">
              <a target="_blank" href="{{asset('assets/dynamics/'.$service->pdf)}}" class="header-btn1"><img src="assets/images/download1.svg" alt="">Pdf Download</a>
              <a target="_blank" href="{{asset('assets/dynamics/'.$service->document)}}" class="header-btn2"><img src="assets/images/download1.svg" alt="">Doc Download</a>
            </div>
          </div>
          <div class="social-icons">
            <h3>Follow Us</h3>
            <ul>
              <li><a href="{{$contact->facebook}}"><i class="fa-brands fa-facebook-f"></i></a></li>
              <li><a href="{{$contact->instagram}}"><i class="fa-brands fa-instagram"></i></a></li>
              <li><a href="{{$contact->linkedin}}"><i class="fa-brands fa-linkedin-in"></i></a></li>
              <li>
                <a href="{{$contact->linkedin}}"><i class="fa-brands fa-youtube"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== SERVICE AREA ENDS =======-->
@endsection