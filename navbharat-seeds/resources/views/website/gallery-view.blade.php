@extends('website.layouts.app')
@section('website')
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
  <div class="container z-index-common">
    <div class="breadcumb-content">
      <h1 class="breadcumb-title">Gallery Details</h1>

    </div>
  </div>
</div>


<section  class="work-process-two gallery space">
    <div class="container">


      <div class="process">
        <div class="row clearfix">
          <!-- Image 1 -->
          @php
              $images = json_decode($gallery->images , true);
          @endphp
          @foreach ($images as $image)
          <div class="col-lg-3 text-center col-sm-6 col-md-4 mb-3">
            <a
              data-fancybox="gallery"
              href="{{asset('assets/dynamics/'.$image)}}">
              <img
                class="img-fluid img-thumbnail"
                src="{{asset('assets/dynamics/'.$image)}}"
                alt="Image 1">
            </a>
          </div>
          @endforeach
{{-- 
          <!-- Image 2 -->
          <div class="col-lg-3 text-center col-sm-6 col-md-4 mb-3">
            <a
              data-fancybox="gallery"
              href="images/cotton.jpg">
              <img
                class="img-fluid img-thumbnail"
                src="images/cotton.jpg"
                alt="Image 2">
            </a>
          </div>

          <!-- Image 3 -->
          <div class="col-lg-3 text-center col-sm-6 col-md-4 mb-3">
            <a
              data-fancybox="gallery"
              href="images/seasum.jpg">
              <img
                class="img-fluid img-thumbnail"
                src="images/seasum.jpg"
                alt="Image 3">
            </a>
          </div>

          <!-- Image 4 -->
          <div class="col-lg-3 text-center col-sm-6 col-md-4 mb-3">
            <a
              data-fancybox="gallery"
              href="images/cotton.jpg">
              <img
                class="img-fluid img-thumbnail"
                src="images/cotton.jpg"
                alt="Image 4">
            </a>
          </div>

          <!-- Image 5 -->
          <div class="col-lg-3 text-center col-sm-6 col-md-4 mb-3">
            <a
              data-fancybox="gallery"
              href="images/musterd.jpg">
              <img
                class="img-fluid img-thumbnail"
                src="images/musterd.jpg"
                alt="Image 5">
            </a>
          </div>

          <!-- Image 6 -->
          <div class="col-lg-3 text-center col-sm-6 col-md-4 mb-3">
            <a
              data-fancybox="gallery"
              href="images/caster.jpg">
              <img
                class="img-fluid img-thumbnail"
                src="images/caster.jpg"
                alt="Image 6">
            </a>
          </div>

          <!-- Image 7 -->
          <div class="col-lg-3 text-center col-sm-6 col-md-4 mb-3">
            <a
              data-fancybox="gallery"
              href="images/paddy.jpg">
              <img
                class="img-fluid img-thumbnail"
                src="images/paddy.jpg"
                alt="Image 7">
            </a>
          </div>

          <!-- Image 8 -->
          <div class="col-lg-3 text-center col-sm-6 col-md-4 mb-3">
            <a
              data-fancybox="gallery"
              href="images/cotton.jpg">
              <img
                class="img-fluid img-thumbnail"
                src="images/cotton.jpg"
                alt="Image 8">
            </a>
          </div>





          <!-- Image 1 -->
          <div class="col-lg-3 text-center col-sm-6 col-md-4 mb-3">
            <a
              data-fancybox="gallery"
              href="images/vegitables.jpg">
              <img
                class="img-fluid img-thumbnail"
                src="images/vegitables.jpg"
                alt="Image 1">
            </a>
          </div>

          <!-- Image 2 -->
          <div class="col-lg-3 text-center col-sm-6 col-md-4 mb-3">
            <a
              data-fancybox="gallery"
              href="images/cotton.jpg">
              <img
                class="img-fluid img-thumbnail"
                src="images/cotton.jpg"
                alt="Image 2">
            </a>
          </div>

          <!-- Image 3 -->
          <div class="col-lg-3 text-center col-sm-6 col-md-4 mb-3">
            <a
              data-fancybox="gallery"
              href="images/seasum.jpg">
              <img
                class="img-fluid img-thumbnail"
                src="images/seasum.jpg"
                alt="Image 3">
            </a>
          </div>

          <!-- Image 4 -->
          <div class="col-lg-3 text-center col-sm-6 col-md-4 mb-3">
            <a
              data-fancybox="gallery"
              href="images/cotton.jpg">
              <img
                class="img-fluid img-thumbnail"
                src="images/cotton.jpg"
                alt="Image 4">
            </a>
          </div>


          <div class="col-lg-3 text-center col-sm-6 col-md-4 mb-3">
            <a
              data-fancybox="gallery"
              href="images/musterd.jpg">
              <img
                class="img-fluid img-thumbnail"
                src="images/musterd.jpg"
                alt="Image 5">
            </a>
          </div>

          <!-- Image 6 -->
          <div class="col-lg-3 text-center col-sm-6 col-md-4 mb-3">
            <a
              data-fancybox="gallery"
              href="images/caster.jpg">
              <img
                class="img-fluid img-thumbnail"
                src="images/caster.jpg"
                alt="Image 6">
            </a>
          </div>

          <!-- Image 7 -->
          <div class="col-lg-3 text-center col-sm-6 col-md-4 mb-3">
            <a
              data-fancybox="gallery"
              href="images/paddy.jpg">
              <img
                class="img-fluid img-thumbnail"
                src="images/paddy.jpg"
                alt="Image 7">
            </a>
          </div>

          <!-- Image 8 -->
          <div class="col-lg-3 text-center col-sm-6 col-md-4 mb-3">
            <a
              data-fancybox="gallery"
              href="images/cotton.jpg">
              <img
                class="img-fluid img-thumbnail"
                src="images/cotton.jpg"
                alt="Image 8">
            </a>
          </div> --}}




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

@endsection