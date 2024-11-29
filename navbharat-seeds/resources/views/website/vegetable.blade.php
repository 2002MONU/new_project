@extends('website.layouts.app')
@section('website')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Field Crops</h1>

            </div>
        </div>
    </div>
    <section class="bg-smoke2 space" data-bg-src="assets/img/bg/service_bg_1.png">
        <div class="container">
            <div class="row justify-content-md-between justify-content-center align-items-end">
                <div class="col-md-8 mb-n2 mb-md-0">
                    <div class="title-area text-center text-md-start">
                        <span class="sub-title">About Products </span>
                        <h2 class="sec-title">We Offer best Quality Seeds</h2>
                    </div>
                </div>

            </div>
            <div class="row " id="serviceSlider1" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2"
                data-sm-slide-show="2" data-focuson-select="false">
                @foreach ($vegetables as $vegetable)
                    <div class="col-sm-6 col-lg-4 col-xl-3 mb-3">
                        <div class="service-card">
                            <div class="box-img">
                                <img src="{{asset('assets/dynamics/'.$vegetable->image)}}" alt="service image" />
                            </div>
                            <div class="box-content">
                                <div class="shape" data-bg-src="{{asset('assets/img/bg/service_card_bg.png')}}"></div>
                                <div class="box-icon" data-bg-src="{{asset('assets/img/icon/service_card_icon.svg')}}">
                                    <img src="{{asset('assets/dynamics/'.$vegetable->icon)}}" alt="Icon" />
                                </div>
                                <h3 class="box-title">
                                    <a href="{{route('website.vegetable-category',$vegetable->slug)}}">{{$vegetable->product_name}}
                                    </a>
                                </h3>
                                <p class="box-text">
                                    {{$vegetable->title}}
                                </p>
                                <a href="{{route('website.vegetable-category',$vegetable->slug)}}" class="ot-btn">Read More<i
                                        class="far fa-chevrons-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
