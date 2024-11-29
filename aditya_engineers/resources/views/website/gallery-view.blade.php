@extends('website.layouts.app')
@section('website')

<!--===== HERO AREA STARTS =======-->
<div class="hero1-section-area about-bg-area">
    <img src="{{asset('assets/dynamics/'.$siteSetting->gallery_banner)}}" alt="" class="header-img1">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="hero-heading-area heading1 text-center">
                    <h1>Gallery View</h1>
                    <a href="{{route('website.index')}}" class="backline">Home <i class="fa-solid fa-angle-right"></i><span>Gallery
                            View</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== HERO AREA ENDS =======-->




<section class="work-process-two gallery">
    <div class="container">


        <div class="process">
            <div class="row clearfix justify-content-center">
                <!-- Image 1 -->
                @php
                    $galleries = json_decode($gallery->images, true);
                @endphp
                @foreach ($galleries as $gallery)
                <div class="col-lg-3 text-center col-sm-6 col-md-4 mb-3">
                    <a data-fancybox="gallery" href="{{asset('assets/dynamics/'.$gallery)}}">
                        <img class="img-fluid img-thumbnail" src="{{asset('assets/dynamics/'.$gallery)}}" alt="Image 1">
                    </a>
                </div>
                @endforeach
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
