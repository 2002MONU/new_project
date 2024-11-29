@extends('website.layouts.app')
@section('website')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ $vegetable->name }}</h1>
                <!-- <ul class="breadcumb-menu">
            <li><a href="index.html">Home</a></li>
            <li>Vegitable Crop Details</li>
          </ul> -->
            </div>
        </div>
    </div>



    <!-- Section 1: Image and Text -->
    <section class="row  about-product">
        <div class="col-lg-6 col-md-12    productroad" data-aos="fade-right" data-aos-offset="300"
            data-aos-easing="ease-in-sine">
            <img src="{{asset('assets/dynamics/'.$vegetable->product_image)}}" alt="Product Image">
        </div>
        <div class="col-lg-6 col-md-12" data-aos="fade-left">
            <h2>{{ $vegetable->name }}</h2>
            <div class="p-3 mb-3">
                <div class="p-3 mb-3 text-center">
                  {!! $vegetable->description !!}
                </div>
            </div>
        </div>
    </section>



    <section class="brochure-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="fade-up-right">
                    <div class="brochure-card">
                        <img src="{{asset('assets/dynamics/'.$vegetable->brocher_image_01)}}" alt="Brochure 1" onclick="openPopup(0)">
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up-left">
                    <div class="brochure-card">
                        <img src="{{asset('assets/dynamics/'.$vegetable->brocher_image_02)}}" alt="Brochure 2" onclick="openPopup(1)">
                    </div>
                </div>
            </div>
            <div class="buttons-section" data-aos="flip-left">
                <button class="brocher-download-button"><a href="{{asset('assets/dynamics/'.$vegetable->brocher_01)}}" download>
                        Brocher Download
                    </a></button>
                <button class="brocher-download-button"><a href="{{asset('assets/dynamics/'.$vegetable->brocher_02)}}" download>
                        Brocher Download
                    </a></button>
            </div>
        </div>
    </section>

    <div id="popup" class="popup">
        <div class="popup-content">
            <button class="popup-close" onclick="closePopup()"><i class="fa fa-times"></i></button>
            <button class="popup-prev" onclick="prevImage()">&#9664;</button>
            <img id="popup-image" src="" alt="Popup Image">
            <button class="popup-next" onclick="nextImage()">&#9654;</button>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();

        const images = [
            "{{asset('assets/dynamics/'.$vegetable->brocher_01)}}",
            '{{asset('assets/dynamics/'.$vegetable->brocher_01)}}'
        ];

        let currentIndex = 0;

        function openPopup(index) {
            currentIndex = index;
            document.getElementById('popup-image').src = images[currentIndex];
            document.getElementById('popup').style.display = 'flex';
        }

        function closePopup() {
            document.getElementById('popup').style.display = 'none';
        }

        function prevImage() {
            currentIndex = (currentIndex === 0) ? images.length - 1 : currentIndex - 1;
            document.getElementById('popup-image').src = images[currentIndex];
        }

        function nextImage() {
            currentIndex = (currentIndex === images.length - 1) ? 0 : currentIndex + 1;
            document.getElementById('popup-image').src = images[currentIndex];
        }
    </script>

    <!-- Section 2: Full-Width Video -->
    <section class=" align-items-center product-video-section">


        <div class="vid-sec-vid">
            <iframe
            src="{{$vegetable->youtube_link}}"
            title="YouTube video player" height="400px"
            frameborder="0"
            allow="autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen>
          </iframe>
        </div>

    </section>


    <section class="bg-smoke2 space" data-bg-src="assets/img/bg/service_bg_1.png">
        <div class="container">
            <div class="row justify-content-md-between justify-content-center align-items-end">
                <div class="col-md-8 mb-n2 mb-md-0">
                    <div class="title-area text-center text-md-start">

                        <h2 class="sec-title">Related Seeds</h2>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <div class="icon-box">
                            <button data-slick-prev="#serviceSlider1" class="slick-arrow default">
                                <i class="far fa-chevrons-left"></i>
                            </button>
                            <button data-slick-next="#serviceSlider1" class="slick-arrow default">
                                <i class="far fa-chevrons-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row slider-shadow ot-carousel" id="serviceSlider1" data-slide-show="4" data-lg-slide-show="3"
                data-md-slide-show="2" data-sm-slide-show="2" data-focuson-select="false">
               @foreach ($vegetablerelated as $related)
                <div class="col-sm-6 col-lg-4 ">
                   <div class="card product-card vegitable-crops">
                       <a href="{{route('website.vegetable-category',$related->slug)}}">
                        <img src="{{asset('assets/dynamics/'.$related->image)}}" class="card-img-top"
                               alt="Product Image"></a>
                       <!-- <hr class="products-below"> -->
                       <div class="card-body text-center">
                           <a href="{{route('website.vegetable-category',$related->slug)}}">
                               <h5 class="card-title  ">{{$related->product_name}}</h5>
                           </a>
                           <!-- <p class="card-text  ">Hybrid Cotton</p> -->
                       </div>
                   </div>
               </div>
               @endforeach
                
            </div>
        </div>
    </section>




















    <style>
        .product-list img {
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }

        .product-list li {
            display: flex;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        .product-list li:last-child {
            border-bottom: none;
        }

        .product-details .col-5 img {
            width: 100%;
            height: auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product-details .table {
            margin-top: 20px;
        }

        .product-details .table th,
        .product-details .table td {
            text-align: center;
        }

        .product-details .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 200px;
            overflow: hidden;
            max-width: 100%;
            background: #000;
        }

        .product-details .video-container iframe,
        .product-details .video-container object,
        .product-details .video-container embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }


        .product-video-section {
            padding: 100px;
            background-color: darkcyan;
        }


        .about-product {
            padding: 30px 30px;
        }

        .about-product p {
            text-align: justify;
        }

        .product-table-section {
            padding: 50px 120px;
        }



        .brocher-section {
            padding: 10px 150px;
        }






        .brochure-card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 0px;
            overflow: hidden;
            margin-bottom: 20px;
            padding: 7px;
        }

        .brochure-card img {
            width: 100%;
            height: auto;
            border-radius: 0px;
        }

        .download-button {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        .download-button .btn {
            flex: 1;
            margin: 0 5px;
        }

        .btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
        }

        .buttons-section {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .buttons-section a {
            color: white;
        }

        .buttons-section a:hover {
            color: lavender;
        }

        .brocher-download-button {
            height: 40px;
            border-radius: 25px;
            margin: 5px;
            padding: 5px 15px;
            background-color: #009944;
            color: white !important;
            z-index: 2;
            border: 0;
        }

        .brocher-download-button:hover {
            height: 40px;
            border-radius: 25px;
            margin: 5px;
            padding: 5px 15px;
            background-color: orange;
            color: green !important;
            z-index: 2;
            border: 0;
        }
    </style>
@endsection
