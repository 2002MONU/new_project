@extends('website.layouts.app')
@section('website')

<!--===== HERO AREA STARTS =======-->
<div class="hero1-section-area about-bg-area">
  <img src="{{asset('assets/dynamics/'.$siteSetting->service_banner)}}" alt="img" class="header-img1">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 m-auto">
        <div class="hero-heading-area heading1 text-center">
          <h1>Services </h1>
          <a href="index.php" class="backline">Home <i class="fa-solid fa-angle-right"></i><span>Services </span></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== HERO AREA ENDS =======-->



<!--===== SERVICE AREA STARTS =======-->
<div class="service1-section-area leftside sp1">
    <div class="container">
      <div class="row justify-content-center">
       
  @foreach ($services as $service)
  @php
    $image = json_decode($service->images, true);
  @endphp
  <div class="col-lg-3 col-md-6">
    <div class="service-auhtor-boxarea">
      <div class="img1">
        <img src="{{asset('assets/dynamics/'.$image[0])}}" alt="img">
      </div>
      <div class="content-area">
       {{-- {{dd($service->slug)}} --}}
        <a href="{{route('website.service-details',$service->slug)}}">{{$service->title}}</a>
        {!! \Illuminate\Support\Str::words($service->description1, 30, '...') !!}
        <a href="{{route('website.service-details',$service->slug)}}" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
    
  @endforeach
  
        {{-- <div class="col-lg-3 col-md-6">
          <div class="service-auhtor-boxarea">
            <div class="img1">
              <img src="assets/images/s2.jpg" alt="">
            </div>
            <div class="content-area">
             
              <a href="Service-details.php">Pannel Board Design &  Service</a>
              <p> Our team of experts is committed to delivering high-quality services</p>
              <a href="Service-details.php" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="service-auhtor-boxarea">
              <div class="img1">
                <img src="assets/images/s1.jpg" alt="">
              </div>
              <div class="content-area">
               
                <a href="Service-details.php">AMC</a>
                <p>That's why we're committed to delivering top-notch services</p>
                <a href="Service-details.php" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
    
          <div class="col-lg-3 col-md-6">
            <div class="service-auhtor-boxarea">
              <div class="img1">
                <img src="assets/images/s2.jpg" alt="">
              </div>
              <div class="content-area">
               
                <a href="Service-details.php">New Generator Sales</a>
                <p>We offer a comprehensive range of solutions designed to empower</p>
                <a href="Service-details.php" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
    
          <div class="col-lg-3 col-md-6">
            <div class="service-auhtor-boxarea">
              <div class="img1">
                <img src="assets/images/s1.jpg" alt="">
              </div>
              <div class="content-area">
               
                <a href="Service-details.php">Generators For Rent</a>
                <p>The lights on and the energy flowing, powering your present</p>
                <a href="Service-details.php" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
          <div class="service-auhtor-boxarea">
            <div class="img1">
              <img src="assets/images/s2.jpg" alt="">
            </div>
            <div class="content-area">
             
              <a href="Service-details.php">Generator Spares</a>
              <p>With cutting-edge technology & industry expertise, we empower</p>
              <a href="Service-details.php" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div> --}}
          
    
          
          <div class="col-lg-12">
            <div class="pagination-area">
                <div class="page">
                    <ul class="pagination">
                      <li class="page-item">
                        {!! $services->appends(['sort' => 'department'])->links() !!}
                      </li>
                      
                    </ul>
                </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <!--===== SERVICE AREA ENDS =======-->


@endsection