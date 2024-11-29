@extends('website.layouts.app')
@section('website')
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
  <div class="container z-index-common">
    <div class="breadcumb-content">
      <h1 class="breadcumb-title">Gallery</h1>

    </div>
  </div>
</div>
<section class="plants-section space">
    <div class="container">
      <div class="row">
        @foreach ($galleries as $gallery)  
        @php
            $images = json_decode($gallery->images , true);
        @endphp 
         
        <div class="col-md-4 col-12">
          <div class="card">
            <div class="plants-card-img">
              <a href="{{route('website.gallery-details',$gallery->slug)}}"><img src="{{asset('assets/dynamics/'.$images[0])}}" alt=""></a>

            </div>
            <div class="plants-card-content  photo-content">
              <h4><a href="{{route('website.gallery-details',$gallery->slug)}}">{{$gallery->title}}</a></h4>
              

            </div>
          </div>
        </div>
        @endforeach
        

      </div>
    </div>
  </section>
@endsection