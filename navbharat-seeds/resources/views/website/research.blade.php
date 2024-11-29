@extends('website.layouts.app')
@section('website')
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
   <div class="container z-index-common">
      <div class="breadcumb-content">
         <h1 class="breadcumb-title">Research & Development </h1>
      </div>
   </div>
</div>
<section id="r&d" class="overflow-hidden space ">
   <div class="container">
      <div class="about-card">
         <div class="row align-items-center">
            <div class="col-lg-5 col-md-6 col-12">
               <div class="about-card__img">
                  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                     <div class="carousel-inner">
                        @php
                        $images = json_decode($research->images, true);
                        @endphp
                        @foreach ($images as $image)
                        <div class="carousel-item active">
                           <img src="{{ asset('assets/dynamics/' . $image) }}" class="d-block w-100"
                              alt="...">
                        </div>
                        @endforeach
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-7 col-md-6 col-12">
               <div class="about-card__box">
                  <h2 class="about-card__title">{{ $research->title }} </h2>
                  {!! $research->description !!}
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="space">
   <div class="nav-rd-section">
      <h2>State-of-the-Art R&D Centres</h2>
      <p>Our R&D operations are strategically positioned across two prime agricultural zones in India, ensuring that
         our research is tailored to the specific needs of different regions:
      </p>
      <div class="nav-rd-cards">
         @foreach ($stateOfHeart as $art)
         <div class="nav-rd-card">
            <div class="nav-rd-card-content">
               <h3>{{ $art->title }}</h3>
               {!! $art->description !!}
            </div>
            <div> <img src="{{ asset('assets/dynamics/' . $art->image) }}" alt="state-of-heart"></div>
         </div>
         @endforeach
      </div>
   </div>
</section>
<section class="space">
   <h2 class="text-center"> Innovative Research Initiatives</h2>
   <p class="text-center">{{ $innovative->title }}</p>
   <div class="inno-rese-section">
      <div class="inno-rese-circle">
         <img src="{{ asset('assets/dynamics/' . $innovative->image) }}" alt="Central Image">
      </div>
      <div class="inno-rese-content inno-rese-left-top">
         <h3>{{ $innovative->title_01 }}</h3>
         <p>{{ $innovative->description_01 }}</p>
      </div>
      <div class="inno-rese-content inno-rese-left-bottom">
         <h3>{{ $innovative->title_02 }}</h3>
         <p>{{ $innovative->description_02 }}</p>
      </div>
      <div class="inno-rese-content inno-rese-right-top">
         <h3>{{ $innovative->title_03 }}</h3>
         <p>{{ $innovative->description_03 }}</p>
      </div>
      <div class="inno-rese-content inno-rese-right-bottom">
         <h3>{{ $innovative->title_04 }}</h3>
         <p>{{ $innovative->description_04 }}</p>
      </div>
   </div>
</section>
<section class="notable-achiv-section  space">
   <h2 class="text-center">Notable Achievements</h2>
   <p class="text-center">{{ $achievement->title }}</p>
   <div class="container notable-container">
      <div class="row align-items-center">
         <div class="col-lg-6">
            <div class="notable-card top-card card">
               <img src="{{ asset('assets/dynamics/'.$achievement->image_01) }}" alt="notable">
               <div class="card-bottom">
                  <h3>{{$achievement->title_01}}</h3>
                  <p>{{$achievement->description_01}}
                </p>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="notable-card top-card card">
               <img src="{{ asset('assets/dynamics/'.$achievement->image_02) }}" alt="notable">
               <div class="card-bottom">
                  <h3>{{$achievement->title_02}}</h3>
                  <p>{{$achievement->description_02}}
                </p>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="notable-card card">
               <img src="{{ asset('assets/dynamics/'.$achievement->image_03) }}" alt="notable">
               <div class="card-bottom">
                  <h3>{{$achievement->title_03}}</h3>
                  <p>{{$achievement->description_03}}
                </p>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="notable-card card">
               <img src="{{ asset('assets/dynamics/'.$achievement->image_04) }}" alt="notable">
               <div class="card-bottom">
                  <h3>{{$achievement->title_04}}</h3>
                  <p>{{$achievement->description_04}}
                </p>
               </div>
            </div>
         </div>
         <div class="col-lg-12">
            <div class="notable-card rec-card card">
               <img src="{{ asset('assets/dynamics/'.$achievement->image_05) }}" alt="notable">
               <div class="card-bottom">
                  <h3>{{$achievement->title_05}}</h3>
                  <p>{{$achievement->description_05}}
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section id="r&d" class="overflow-hidden space  stl-section">
   <div class="container">
      <div class="about-card">
         <div class="row align-items-center">
            <div class="col-lg-7 col-md-6 col-12">
               <div class="about-card__box">
                  <h2 class="nav-heading">{{$seedTesting->title}}</h2>
                  {!! $seedTesting->description !!}
               </div>
            </div>
            <div class="col-lg-5 col-md-6 col-12">
               <div class="about-card__img">
                  <img class="w-100" src="{{asset('assets/dynamics/'.$seedTesting->image)}}" alt="team image" />
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section id="r&d" class="overflow-hidden space">
   <div class="container">
      <div class="about-card">
         <div class="row align-items-center">
            <div class="col-lg-5 col-md-6 col-12">
               <div class="about-card__img">
                  <img class="w-100" src="{{asset('assets/dynamics/'.$future->image)}}" alt="team image" />
               </div>
            </div>
            <div class="col-lg-7 col-md-6 col-12">
               <div class="about-card__box">
                  <h2 class="nav-heading">{{$future->title}}</h2>
                  {!! $future->description !!}
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection