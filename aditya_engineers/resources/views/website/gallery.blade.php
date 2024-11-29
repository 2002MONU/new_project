@extends('website.layouts.app')
@section('website')

<!--===== HERO AREA STARTS =======-->
<div class="hero1-section-area about-bg-area">
  <img src="{{asset('assets/dynamics/'.$siteSetting->gallery_banner)}}" alt="" class="header-img1">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 m-auto">
        <div class="hero-heading-area heading1 text-center">
          <h1>Gallery</h1>
          <a href="{{route('website.index')}}" class="backline">Home <i class="fa-solid fa-angle-right"></i><span>Gallery</span></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== HERO AREA ENDS =======-->

<section class="plants-section">
    <div class="container">
      <div class="row justify-content-center">
        @foreach ($galleries as $gallery)
          @php
            $image = json_decode($gallery->images ,true);
          @endphp
        <div class="col-lg-3 col-md-4 col-12">
          <div class="gal-card">
            <div class="plants-gal-card-img">
              <a href="{{route('website.gallery-view',$gallery->slug)}}">
                <img src="{{asset('assets/dynamics/'.$image[0])}}" alt="">
              </a>
            </div>
            <div class="plants-gal-card-content  photo-content">
              <h4><a href="{{route('website.gallery-view',$gallery->slug)}}">{{$gallery->title}}</a></h4>
              

            </div>
          </div>
        </div>
        @endforeach
        {{-- <div class="col-lg-3 col-md-4 col-12">
          <div class="gal-card">
            <div class="plants-gal-card-img">
              <a href="gallery-view.php"><img src="assets/images/b2.jpg" alt=""></a>

            </div>
            <div class="plants-gal-card-content photo-content">
              <h4><a href="gallery-view.php">Gallery Images</a></h4>
              

            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12">
          <div class="gal-card">
            <div class="plants-gal-card-img">
              <a href="gallery-view.php"><img src="assets/images/b2.jpg" alt=""></a>

            </div>
            <div class="plants-gal-card-content photo-content">
              <h4><a href="gallery-view.php">Gallery Images</a></h4>
              

            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12">
          <div class="gal-card">
            <div class="plants-gal-card-img">
              <a href="gallery-view.php"><img src="assets/images/b2.jpg" alt=""></a>

            </div>
            <div class="plants-gal-card-content photo-content">
              <h4><a href="gallery-view.php">Gallery Images</a></h4>
              

            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12">
          <div class="gal-card">
            <div class="plants-gal-card-img">
              <a href="gallery-view.php"><img src="assets/images/b2.jpg" alt=""></a>

            </div>
            <div class="plants-gal-card-content photo-content">
              <h4><a href="gallery-view.php">Gallery Images</a></h4>
              

            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-12">
          <div class="gal-card">
            <div class="plants-gal-card-img">
              <a href="gallery-view.php"><img src="assets/images/b2.jpg" alt=""></a>

            </div>
            <div class="plants-gal-card-content photo-content">
              <h4><a href="gallery-view.php">Gallery Images</a></h4>
              

            </div>
          </div>
        </div> --}}

      </div>
    </div>
  </section>

@endsection