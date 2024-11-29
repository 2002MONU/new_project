@extends('website.layouts.app')
@section('website')
<div class="breadcumb-wrapper" data-bg-src="images/breadcumb-bg.jpg">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Farmer'S Outreach</h1>
        </div>
    </div>
</div>

@php
    $priorityGroups = $farmerImages->groupBy('priority');
@endphp

@foreach ($farmerOutRich as $index => $farmer)
    @if ($index % 2 == 0)
        <section class="space crp-section">
            <div class="container">
                <div class="about-card">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6 col-12">
                            <div class="about-card__img">
                                <img class="w-100" src="{{ asset('assets/dynamics/' . $farmer->image) }}" alt="team image" />
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-12">
                            <div class="about-card__box">
                                <h2 class="about-card__title">{{ $farmer->title }}</h2>
                                {!! $farmer->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section class="space patenrship-section">
            <div class="container mt-3">
                <div class="about-card">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-6 col-12">
                            <div class="about-card__box patnership-list">
                                <h2 class="about-card__title">{{ $farmer->title }}</h2>
                                {!! $farmer->description !!}
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-12">
                            <div class="about-card__img">
                                <img class="w-100" src="{{ asset('assets/dynamics/' . $farmer->image) }}" alt="team image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if (($index + 1) % 2 == 0)
        @php
            $currentPriority = intval(($index + 1) / 2);
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
    @endif
@endforeach
@endsection
