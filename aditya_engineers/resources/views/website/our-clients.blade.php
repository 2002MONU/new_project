@extends('website.layouts.app')
@section('website')

<!--===== HERO AREA STARTS =======-->
<div class="hero1-section-area about-bg-area">
  <img src="{{asset('assets/dynamics/'.$siteSetting->client_banner)}}" alt="" class="header-img1">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 m-auto">
        <div class="hero-heading-area heading1 text-center">
          <h1>Our Clients</h1>
          <a href="{{route('website.index')}}"   class="backline">Home <i class="fa-solid fa-angle-right"></i><span>Our Clients </span></a>
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
        <div class="about-header-area heading2">

          <h2 class="tg-element-title">{{$about->title}}</h2>
              {!! $about->description !!}

        </div>
      </div>
      <div class="col-lg-6">
        <div class="about-images-area">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              @php
                $images = json_decode($about->images,true)
              @endphp
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
      </div>


    </div>
  </div>
</div>

<section class="clients-section">
  <div class="container">
    <!-- <h2>Our Clients</h2> -->
    <div class="clients-grid">
      <!-- Repeat this block for each client logo -->
      @foreach ($clients as $client)
      <div class="client-logo">
        <img src="{{asset('assets/dynamics/'.$client->image)}}" alt="Client 1">
      </div>
      @endforeach
      
      <!-- Add as many logos as needed -->
    </div>
  </div>
</section>
@endsection