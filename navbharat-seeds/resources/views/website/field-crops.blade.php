@extends('website.layouts.app')
@section('website')
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
  <div class="container z-index-common">
    <div class="breadcumb-content">
      <h1 class="breadcumb-title">Field Crops</h1>
      <!-- <ul class="breadcumb-menu">
        <li><a href="index.html">Home</a></li>
        <li>Field Crops</li>
      </ul> -->
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
    <div class="row " id="serviceSlider1" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="2" data-focuson-select="false">
      @foreach ($fieldCrops as $crop)
        
      <div class="col-sm-6 col-lg-4 col-xl-3 mb-3">
        <div class="service-card">
          <div class="box-img">
            <img src="{{asset('assets/dynamics/'.$crop->image)}}" alt="service image" />
          </div>
          <div class="box-content">
            <div class="shape" data-bg-src="{{asset('assets/img/bg/service_card_bg.png')}}"></div>
            <div class="box-icon" data-bg-src="{{asset('assets/img/icon/service_card_icon.svg')}}">
              <img src="{{asset('assets/dynamics/'.$crop->icon)}}" alt="Icon" />
            </div>
            <h3 class="box-title">
              <a href="{{route('website.field-category',$crop->slug)}}">{{$crop->product_name}}
              </a>
            </h3>
            <p class="box-text">
              {{$crop->title}}
            </p>
            <a href="{{route('website.field-category',$crop->slug)}}" class="ot-btn">Read More<i class="far fa-chevrons-right ms-2"></i></a>
          </div>
        </div>
      </div>
      @endforeach
      {{-- <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="service-card">
          <div class="box-img">
            <img src="images/cotton.jpg" alt="service image" />
          </div>
          <div class="box-content">
            <div class="shape" data-bg-src="assets/img/bg/service_card_bg.png"></div>
            <div class="box-icon" data-bg-src="assets/img/icon/service_card_icon.svg">
              <img src="images/cotton1.png" alt="Icon" />
            </div>
            <h3 class="box-title">
              <a href="field-crops.php">Hybrid Cotton
              </a>
            </h3>
            <p class="box-text">
              Vegetables are unprocessed, Recently harvested
            </p>
            <a href="field-crops.php" class="ot-btn">Read More<i class="far fa-chevrons-right ms-2"></i></a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="service-card">
          <div class="box-img">
            <img src="images/maize.jpg" alt="service image" />
          </div>
          <div class="box-content">
            <div class="shape" data-bg-src="assets/img/bg/service_card_bg.png"></div>
            <div class="box-icon" data-bg-src="assets/img/icon/service_card_icon.svg">
              <img src="images/corn.png" alt="Icon" />
            </div>
            <h3 class="box-title">
              <a href="field-crops.php">Hybrid Maize
              </a>
            </h3>
            <p class="box-text">
              Vegetables are unprocessed, Recently harvested
            </p>
            <a href="field-crops.php" class="ot-btn">Read More<i class="far fa-chevrons-right ms-2"></i></a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="service-card">
          <div class="box-img">
            <img src="images/bajra.jpg" alt="service image" />
          </div>
          <div class="box-content">
            <div class="shape" data-bg-src="assets/img/bg/service_card_bg.png"></div>
            <div class="box-icon" data-bg-src="assets/img/icon/service_card_icon.svg">
              <img src="images/food.png" alt="Icon" />
            </div>
            <h3 class="box-title">
              <a href="field-crops.php">Hybrid Bajra
              </a>
            </h3>
            <p class="box-text">
              Vegetables are unprocessed, Recently harvested
            </p>
            <a href="field-crops.php" class="ot-btn">Read More<i class="far fa-chevrons-right ms-2"></i></a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="service-card">
          <div class="box-img">
            <img src="images/paddy.jpg" alt="service image" />
          </div>
          <div class="box-content">
            <div class="shape" data-bg-src="assets/img/bg/service_card_bg.png"></div>
            <div class="box-icon" data-bg-src="assets/img/icon/service_card_icon.svg">
              <img src="images/paddy.png" alt="Icon" />
            </div>
            <h3 class="box-title">
              <a href="field-crops.php">Paddy
              </a>
            </h3>
            <p class="box-text">
              Vegetables are unprocessed, Recently harvested
            </p>
            <a href="field-crops.php" class="ot-btn">Read More<i class="far fa-chevrons-right ms-2"></i></a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="service-card">
          <div class="box-img">
            <img src="images/seasum.jpg" alt="service image" />
          </div>
          <div class="box-content">
            <div class="shape" data-bg-src="assets/img/bg/service_card_bg.png"></div>
            <div class="box-icon" data-bg-src="assets/img/icon/service_card_icon.svg">
              <img src="images/spice.png" alt="Icon" />
            </div>
            <h3 class="box-title">
              <a href="field-crops.php">Sesamum

              </a>
            </h3>
            <p class="box-text">
              Vegetables are unprocessed, Recently harvested
            </p>
            <a href="field-crops.php" class="ot-btn">Read More<i class="far fa-chevrons-right ms-2"></i></a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="service-card">
          <div class="box-img">
            <img src="images/musterd.jpg" alt="service image" />
          </div>
          <div class="box-content">
            <div class="shape" data-bg-src="assets/img/bg/service_card_bg.png"></div>
            <div class="box-icon" data-bg-src="assets/img/icon/service_card_icon.svg">
              <img src="images/mustard.png" alt="Icon" />
            </div>
            <h3 class="box-title">
              <a href="field-crops.php">Mustard

              </a>
            </h3>
            <p class="box-text">
              Vegetables are unprocessed, Recently harvested
            </p>
            <a href="field-crops.php" class="ot-btn">Read More<i class="far fa-chevrons-right ms-2"></i></a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="service-card">
          <div class="box-img">
            <img src="images/vegitables.jpg" alt="service image" />
          </div>
          <div class="box-content">
            <div class="shape" data-bg-src="assets/img/bg/service_card_bg.png"></div>
            <div class="box-icon" data-bg-src="assets/img/icon/service_card_icon.svg">
              <img src="images/vegetable.png" alt="Icon" />
            </div>
            <h3 class="box-title">
              <a href="field-crops.php">Vegetables seeds

              </a>
            </h3>
            <p class="box-text">
              Vegetables are unprocessed, Recently harvested
            </p>
            <a href="field-crops.php" class="ot-btn">Read More<i class="far fa-chevrons-right ms-2"></i></a>
          </div>
        </div>
      </div> --}}
    </div>
  </div>
</section>

@endsection