@extends('website.layouts.app')
@section('website')
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
  <div class="container z-index-common">
    <div class="breadcumb-content">
      <h1 class="breadcumb-title">Cotton Crops</h1>
      <!-- <ul class="breadcumb-menu">
        <li><a href="index.html">Home</a></li>
        <li>Cotton Crops</li>
      </ul> -->
    </div>
  </div>
</div>
<section class="">
  <div class="container mt-5">
    <div class="row">
        @foreach ($cottonSeed as $seed)
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card product-card">
            <a href="{{route('website.cotton-seed-details',$seed->slug)}}"><img src="{{asset('assets/dynamics/'.$seed->product_image)}}" class="card-img-top" alt="Product Image"></a>
            <!-- <hr class="products-below"> -->
            <div class="card-body text-center">
              <a href="{{route('website.cotton-seed-details',$seed->slug)}}"><h5 class="card-title  ">{{$seed->type}}</h5></a>
              <p class="card-text  ">{{$seed->name}}</p>
            </div>
          </div>
        </div>
         @endforeach
     
    </div>
  </div>


</section>
@endsection