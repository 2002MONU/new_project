@extends('website.layouts.app')
@section('website')
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
   <div class="container z-index-common">
      <div class="breadcumb-content">
         <h1 class="breadcumb-title">Infrastructure</h1>
      </div>
   </div>
</div>
<section class="head office-section ">
   <div class="container">
      <div class="row">
         <div class="col-md-6 col-12 pr-5">
            <div class="office-headings">
               <h2>{{$head->branch_type}}</h2>
               <h3>{{$head->branch_location}}</h3>
            </div>
            <img src="{{asset('assets/dynamics/'.$head->image)}}" alt="head-office">
            <div class="address-block">
               <div class="img-text">
                  <div><img src="{{asset('assets/dynamics/'.$head->logo)}}" alt="logo"></div>
                  <div>
                     <h3>{{$head->branch_name}}</h3>
                  </div>
               </div>
               <p><i class="fas fa-map-marker-alt"></i> {{$head->address}}
               </p>
               <p><i class="fas fa-phone"></i> Tel: {{$head->telephone}}</p>
               <p><i class="fas fa-fax"></i> Fax: {{$head->fax}}</p>
            </div>
         </div>
         <div class="col-md-6  col-12 pl-5">
            <div class="office-headings-1">
                <h2>{{$corporate->branch_type}}</h2>
               <h3>{{$corporate->branch_location}}</h3>
            </div>
            <img src="{{asset('assets/dynamics/'.$corporate->image)}}" alt="logo">
            <div class="address-block">
               <div class="img-text">
                  <div><img src="{{asset('assets/dynamics/'.$corporate->logo)}}" alt=""></div>
                  <div>
                     <h3>{{$corporate->branch_name}}</h3>
                  </div>
               </div>
               <p><i class="fas fa-map-marker-alt"></i> {{$corporate->address}}
               </p>
               <p><i class="fas fa-phone"></i> Tel: {{$corporate->telephone}}</p>
               <p><i class="fas fa-fax"></i> Fax - {{$corporate->fax}}</p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="space   other-offices">
   <div class="container">
      <div class="title-area text-center">
         <h2>C & F</h2>
      </div>
      <div class="row ">
         <div class="col-lg-3">
            <div class="other-office-card card">
               <div class="address-block adb2">
                  <p>Hyderabad, Telangana</p>
                  <!-- <p><i class="fas fa-map-marker-alt"></i> # 8-2-293/82/A/714 &amp; 714/1, 3rd Floor,<br>
                     Silver Square, Opp. Croma Show Room,<br>
                     Road No-36, Jubilee Hills,<br> Hyderabad – 500033
                     Telangana – India</p>
                     <p><i class="fas fa-phone"></i> Tel: +91-40-23550648 / 23550938</p>
                     <p><i class="fas fa-fax"></i> Fax - +91-40-23550838</p> -->
               </div>
            </div>
         </div>
         <div class="col-lg-3">
            <div class="other-office-card card">
               <div class="address-block adb2">
                  <p>Mumbai, Maharastra</p>
               </div>
            </div>
         </div>
         <div class="col-lg-3">
            <div class="other-office-card card">
               <div class="address-block adb2">
                  <p>Chennai, TamilNadiu</p>
               </div>
            </div>
         </div>
         <div class="col-lg-3">
            <div class="other-office-card card">
               <div class="address-block adb2">
                  <p>Amaravathi, Andhra pradesh</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<div class=" overflow-hidden space    gallery-con">
   <div class="container">
      <div class="row justify-content-md-between justify-content-center align-items-end">
         <div class="col-md-8 mb-n2 mb-md-0">
            <div class="title-area text-center text-md-start">
               <span class="sub-title">Recent Activities
               </span>
               <h2 class="sec-title">Our Gallery</h2>
            </div>
         </div>
         <div class="col-auto">
            <div class="sec-btn">
               <div class="icon-box">
                  <button data-slick-prev=".gallery-slider1" class="slick-arrow default">
                  <i class="far fa-chevrons-left"></i>
                  </button>
                  <button data-slick-next=".gallery-slider1" class="slick-arrow default">
                  <i class="far fa-chevrons-right"></i>
                  </button>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="z-index-common">
      <div class="row gallery-slider1">
        @foreach ($galleries as $gallery)
        @php
            $image = json_decode($gallery->images , true)
        @endphp
        <div class="col-md-6 col-xl-4">
           <div class="gallery-card">
              <div class="box-img rounded-0">
                 <img src="{{asset('assets/dynamics/'.$image[0])}}" alt="gallery image" />
                 <h6 class="text-center">{{$gallery->title}}</h6>
              </div>
           </div>
        </div>
        @endforeach
       
      </div>
   </div>
</div>
@endsection