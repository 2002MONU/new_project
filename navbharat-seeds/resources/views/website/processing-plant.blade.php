@extends('website.layouts.app')
@section('website')
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
  <div class="container z-index-common">
    <div class="breadcumb-content">
      <h1 class="breadcumb-title">Processing Plant </h1>

    </div>
  </div>
</div>

<section id="processing-plant" class="overflow-hidden space  ">
  <div class="container">
    <div class="about-card">
      <div class="row align-items-center">

        <div class="col-lg-7 col-md-6 col-12">
          <div class="about-card__box">
            <h2 class="about-card__title ">{{$plant->title}}</h2>
             {!! $plant->description !!}
          </div>
        </div>
        <div class="col-lg-5 col-md-6 col-12">
          <div class="about-card__img">
             <img class="w-100" src="{{asset('assets/dynamics/'.$plant->image)}}" alt="team image"> 
            {{-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="images/i4.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/sp1.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/i3.jpeg" class="d-block w-100" alt="...">
                </div>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section id="production-processing" class="sppf-container">
  <div class="container">
    <h3 class="text-center">Seed Production & Processing Facilities</h3>
    <p class="text-center">Our processing plants are strategically located across India to serve diverse agricultural regions:</p>
    <div class="row ">
        @foreach ($seedProduction as $production)
        <div class="col-lg-4 card sppf-card">
           <div class="content">
            <h4 > {{$production->title}}</h4>
            {!! $production->description !!}
          </div>
          <div><img src="{{asset('assets/dynamics/'.$production->image)}}" alt="production"></div>
  
        </div>
        @endforeach
     

    </div>

  </div>
</section>






<section class="ascs-container">
  <div class="container">
    <h3 class="text-center ">Advanced Seed Conditioning & Storage</h3>
    <p class="text-center">Our processing plants are complemented by extensive seed conditioning and storage capabilities:</p>
    <div class="row ">
        @foreach ($advanceSeed as $seed)
        <div class="col-lg-4 ">
          <div class="ascs-card">
            <div>
              <div class="content">
                <h4>
                 {{$seed->title}}
                </h4>
               {!! $seed->description !!}
              </div>
            </div>
            <img src="{{asset('assets/dynamics/'.$seed->image)}}" alt="img">
          </div>
  
        </div>
        @endforeach
     
    </div>
  </div>
</section>





<section id="quality-testing" class="quality-section">

  <div class="container">
    <h3 class="text-center">Quality Assurance & Testing</h3>
    <p class="text-center">Quality control is integral to our seed processing operations. We have established Quality Control Laboratories & have Field Test Farms of 10 Acres at each at our Ahmedabad and Hyderabad facilities, where every batch of seeds undergoes rigorous testing to ensure compliance with our high standards.</p>
    <div class="row">
      <!-- Vertical Tabs -->
      <div class="col-md-3">
        <ul class="nav flex-column nav-pills custom-tabs" id="tabMenu" role="tablist">
            @foreach ($qualityTesting as $quality)
                <li class="nav-item" role="presentation">
                    <a 
                        class="nav-link {{ $loop->first ? 'active' : '' }}" 
                        id="tab-{{ $quality->id }}" 
                        data-bs-toggle="pill" 
                        href="#content-{{ $quality->id }}" 
                        role="tab" 
                        aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                        <i class="fa fa-table" aria-hidden="true"></i> {{ $quality->title }}
                    </a>
                </li>
            @endforeach
        </ul>
        
      </div>

      <!-- Tab Content -->
      <div class="col-md-9">
        <div class="tab-content" id="tabContent">
            @foreach ($qualityTesting as $quality)
                <div 
                    class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" 
                    id="content-{{ $quality->id }}" 
                    role="tabpanel" 
                    aria-labelledby="tab-{{ $quality->id }}">
                    <div class="row card spectial">
                        <div class="col-lg-6">
                            <img src="{{ asset('assets/dynamics/'.$quality->image) }}" alt="Quality Image">
                        </div>
                        <div class="col-lg-6">
                            <h5>{{ $quality->title }}</h5>
                            {!! $quality->description !!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
  </div>





  <script>
    // Activate the first tab and content on load
    document.addEventListener('DOMContentLoaded', function() {
      var firstTab = new bootstrap.Tab(document.querySelector('#tabMenu .nav-link.active'));
      firstTab.show();
    });
  </script>
</section>

<section class="overflow-hidden space  com-ec-section">
  <div class="container">
    <div class="about-card">
      <div class="row align-items-center">
        <div class="col-lg-4 col-md-6 col-12">
          <div class="about-card__img">
            <img class="w-100" src="{{asset('assets/dynamics/'.$commitment->image)}}" alt="team image">
          </div>
        </div>

        <div class="col-lg-8 col-md-6 col-12">
          <div class="about-card__box">
            <h2 class="about-card__title">{{$commitment->title}}</h2>
            {!! $commitment->description  !!}
          </div>
        </div>

      </div>
    </div>
  </div>
</section>



<section id="production" class="map-section">

  <div class=" container ">
    <div class="row ">
      <div class="col-lg-6">
        <img src="{{asset('assets/dynamics/'.$productionarea->image)}}" alt="production">

      </div>
      <div class="col-lg-6 con">
        <h3>{{$productionarea->title}}</h3>
        
       {!! $productionarea->description !!}

      </div>

    </div>

  </div>
</section>
@endsection