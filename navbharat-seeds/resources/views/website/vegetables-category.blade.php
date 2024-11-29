@extends('website.layouts.app')
@section('website')
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
  <div class="container z-index-common">
    <div class="breadcumb-content">
      <h1 class="breadcumb-title">Vegetable Crops</h1>
    </div>
  </div>
</div>
<section class="">
  <div class="container mt-5">
    <div class="row">
      @if($vegetables->isEmpty())
        <div class="col-12 text-center">
          <p>No records found.</p>
        </div>
      @else
        @foreach ($vegetables as $vegetable)
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card product-card vegitable-crops">
            <a href="{{route('website.vegetable-details',$vegetable->slug)}}">
              <img src="{{ asset('assets/dynamics/'.$vegetable->product_image) }}" class="card-img-top" alt="Product Image">
            </a>
            <div class="card-body text-center">
              <a href="{{route('website.vegetable-details',$vegetable->slug)}}">
                <h5 class="card-title">{{ $vegetable->name }}</h5>
              </a>
            </div>
          </div>
        </div>
        @endforeach
      @endif
    </div>
  </div>
</section>
@endsection
