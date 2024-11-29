@extends('website.layouts.app')
@section('website')
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
  <div class="container z-index-common">
    <div class="breadcumb-content">
      <h1 class="breadcumb-title">Field Crops</h1>
    </div>
  </div>
</div>
<section class="">
  <div class="container mt-5">
    <div class="row">
      @if($fieldCrops->isEmpty())
        <div class="col-12 text-center">
          <p>No records found.</p>
        </div>
      @else
        @foreach ($fieldCrops as $crop)
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card product-card field-crops">
            <a href="{{route('website.field-category-details',$crop->slug)}}"><img src="{{ asset('assets/dynamics/'.$crop->product_image) }}" class="card-img-top" alt="Product Image"></a>
            <div class="card-body text-center">
              <a href="{{route('website.field-category-details',$crop->slug)}}"><h5 class="card-title">{{$crop->name}}</h5></a>
            </div>
          </div>
        </div>
        @endforeach
      @endif
    </div>
  </div>
</section>
@endsection
