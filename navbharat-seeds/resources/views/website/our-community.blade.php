@extends('website.layouts.app')
@section('website')
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
  <div class="container z-index-common">
    <div class="breadcumb-content">
      <h1 class="breadcumb-title">Our Community</h1>
    </div>
  </div>
</div>

@php
  // Group images by priority
  $priorityGroups = $communityImages->groupBy('priority');
@endphp

@foreach ($ourCommunity as $index => $community)
  @if ($index % 2 == 0)
    <section id="formers-outreach" class="crp-section">
      <div class="container">
        <div class="about-card">
          <div class="row align-items-center">
            <div class="col-lg-5 col-md-6 col-12">
              <div class="about-card__img">
                <img class="w-100" src="{{ asset('assets/dynamics/' . $community->image) }}" alt="team image" />
              </div>
            </div>
            <div class="col-lg-7 col-md-6 col-12">
              <div class="about-card__box">
                <h2 class="about-card__title">{{ $community->title }}</h2>
                {!! $community->description !!}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @else
    <section id="partnership" class="space patenrship-section">
      <div class="container mt-3">
        <div class="about-card">
          <div class="row align-items-center">
            <div class="col-lg-7 col-md-6 col-12">
              <div class="about-card__box">
                <h2 class="about-card__title">{{ $community->title }}</h2>
                {!! $community->description !!}
              </div>
            </div>
            <div class="col-lg-5 col-md-6 col-12">
              <div class="about-card__img">
                <img class="w-100" src="{{ asset('assets/dynamics/' . $community->image) }}" alt="team image" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endif

  @php
    // Calculate the current priority
    $currentPriority = intdiv($index + 1, 1);
    $images = $priorityGroups->get($currentPriority, collect());
  @endphp

  @if ($images->isNotEmpty())
    <section>
      <div class="container">
        <div class="row ot-carousel" id="brandSlide{{ $currentPriority }}" data-slide-show="5" data-ml-slide-show="5" data-lg-slide-show="4" data-md-slide-show="3" data-sm-slide-show="3" data-xs-slide-show="3">
          @foreach ($images as $image)
            <div class="col-auto">
              <div class="brand-box">
                <img src="{{ asset('assets/dynamics/' . $image->image) }}" alt="Brand Logo" />
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>
  @endif
@endforeach

@endsection
