@extends('website.layouts.app')
@section('website')
    <style>
        .slider-container {
            overflow: hidden;
            width: 100%;
            position: relative;
            height: 70px;
            /* Adjust based on logo height */
        }

        .slider {
            display: flex;
            width: calc(100% * 3);
            /* 3 logos at a time */
            animation: slide-left 10s linear infinite;
        }

        .slider img {
            width: 100px;
            /* Logo width */
            margin: 0 10px;
            /* Space between logos */
        }

        /* Right to Left Animation */
        .slider.right-to-left {
            animation: slide-right 10s linear infinite;
        }

        @keyframes slide-left {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-33.33%);
            }

            /* Slide 1/3 of total width */
        }

        @keyframes slide-right {
            0% {
                transform: translateX(33.33%);
            }

            /* Start from 1/3 */
            100% {
                transform: translateX(0);
            }
        }
    </style>





    <div class="breadcumb-wrapper" data-bg-src="{{asset('assets/dynamics/'.$siteSetting->about_bg)}}" >
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">About Us</h1>

            </div>
        </div>
    </div>
    <section id="overview" class=" space  ">
        <div class="container">
            <div class="about-card">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6 col-12">
                        <div class="about-card__img">
                            <img class="w-100" src="{{ asset('assets/dynamics/' . $overview->image) }}" alt="team image" />
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-12">
                        <div class="about-card__box">
                            <h2 class="about-card__title">{{ $overview->title }}</h2>

                            {!! $overview->description !!}

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="about-card__box">
                            {!! $overview->description_01 !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>





    <section id="vision-mission" class=" space vis-miss-section">
        <h3 class="text-center mb-3"> Vision & Mission </h3>
        <div class="container">
            <div class="about-card">
                <div class="row align-items-center">
                    <!-- Vision Card -->
                    <div class="col-md-6 ">
                        <div class="vm-card card shadow-lg p-3">
                            <div class="row">
                                <div class="col-8">
                                    <h4 class="vm-title">{{ $mission->title_01 }} <img
                                            src="{{ asset('assets/images/v1.png') }}" alt="image" class="title-icon">
                                    </h4>
                                    <hr>
                                    {!! $mission->descriotion_01 !!}
                                </div>
                                <div class="col-4">
                                    <img src="{{ asset('assets/dynamics/' . $mission->image_01) }}" alt=""
                                        class="img-fluid vm-image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mission Card -->
                    <div class="col-md-6 ">
                        <div class="vm-card card shadow-lg p-3">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{ asset('assets/dynamics/' . $mission->image_02) }}" alt=""
                                        class="img-fluid vm-image">
                                </div>
                                <div class="col-8">
                                    <h4 class="vm-title text-right">{{ $mission->title_02 }} <img
                                            src="{{ asset('assets/images/m01.png') }}" alt="" class="title-icon">
                                    </h4>
                                    <hr>
                                    {!! $mission->descriotion_02 !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="leadership" class=" team space">
        <div class="container">
            <div class="title-area text-center">

                <h2 class="sec-title">Leadership</h2>
            </div>

            <div class="row gy-30">
                @foreach ($leaderships as $leader)
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="ot-product product-grid">
                            <div class="product-img"><img src="{{ asset('assets/dynamics/' . $leader->image) }}"
                                    alt="Product Image">
                            </div>
                            <div class="product-content">
                                <h3 class="product-title"><a href="javascript:void(0);">{{ $leader->name }}</a>
                                </h3><span class="desig">{{ $leader->designation }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>


    <section id="awards-accolades" class="awards-section">
        <div class="container">
            <div class="row align-itmes-center">
                <div class="col-6">
                    <h3>{{$award->title}}</h3>
                    {!! $award->description !!}

                </div>

                <div class="col-6">
                    <div class="awards-accolad">

                        <!-- Left-to-right slider -->
                        <div class="logo-slider-container">
                            <div class="logo-slider" id="slider-left">
                                @foreach ($awardImages as $image)
                                <div class="col-auto">
                                    <div class="brand-box">
                                        <img src="{{asset('assets/dynamics/'.$image->image)}}" alt="Brand Logo" />
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>

                        <!-- Right-to-left slider -->
                        <div class="logo-slider-container">
                            <div class="logo-slider" id="slider-right">
                                @foreach ($awardImages as $image)
                                <div class="col-auto">
                                    <div class="brand-box">
                                        <img src="{{asset('assets/dynamics/'.$image->image)}}" alt="Brand Logo" />
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>






            </div>

        </div>



    </section>

    <script>
        // Left-to-right slider
        const leftSlider = document.getElementById('slider-left');
        let leftIndex = 0;
        const totalImages = leftSlider.children.length;
        const imagesToShow = 3; // Number of images to show at once
        const interval = 3000; // Time between slides in milliseconds

        function slideLeft() {
            leftIndex += 1; // Move to the next set of images
            if (leftIndex > totalImages - imagesToShow) {
                leftIndex = 0; // Loop back to the start
            }
            updateSlider(leftSlider, leftIndex);
        }

        function updateSlider(slider, index) {
            const offset = index * (100 + 30); // 100px width + 30px (15px margin on both sides)
            slider.style.transform = `translateX(-${offset}px)`;
        }

        // Start sliding every 2 seconds for the left slider
        setInterval(slideLeft, interval);

        // Right-to-left slider
        const rightSlider = document.getElementById('slider-right');
        let rightIndex = totalImages - imagesToShow; // Start from the end

        function slideRight() {
            rightIndex -= 1; // Move to the previous set of images
            if (rightIndex < 0) {
                rightIndex = totalImages - imagesToShow; // Loop back to the end
            }
            updateSlider(rightSlider, rightIndex);
        }

        // Start sliding every 2 seconds for the right slider
        setInterval(slideRight, interval);
    </script>




    <section id="milestone" class="mile-stone">
        <div class="container-fluid blue-bg">
            <div class="container">
                <h2 class="pb-3 pt-2 text-center">Mile Stone</h2>

                <!-- First Section -->
                <div class="row align-items-center how-it-works">
                    <div class="col-2 text-center bottom">
                        <div class="circle circle-1">
                            <i class="fas fa-users"></i> <!-- Icon for SadiraSoft -->
                        </div>
                    </div>
                    <div class="col-6">
                        <h5>{{$milestone->title_01}}</h5>
                        <p>{!! $milestone->descriotion_01 !!}
                        </p>
                    </div>
                </div>

                <!-- Path between 1-2 -->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner top-right"></div>
                    </div>
                    <div class="col-8">
                        <hr>
                    </div>
                    <div class="col-2">
                        <div class="corner left-bottom"></div>
                    </div>
                </div>

                <!-- Second Section -->
                <div class="row align-items-center justify-content-end how-it-works">
                    <div class="col-6 text-right">
                        <h5>{{$milestone->title_02}}</h5>
                        <p>{!! $milestone->descriotion_02 !!}
                    </div>
                    <div class="col-2 text-center full">
                        <div class="circle circle-2">
                            <i class="fas fa-brain"></i> <!-- Icon for Growth Mindset -->
                        </div>
                    </div>
                </div>

                <!-- Path between 2-3 -->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner right-bottom"></div>
                    </div>
                    <div class="col-8">
                        <hr>
                    </div>
                    <div class="col-2">
                        <div class="corner top-left"></div>
                    </div>
                </div>

                <!-- Third Section -->
                <div class="row align-items-center how-it-works">
                    <div class="col-2 text-center top">
                        <div class="circle circle-3">
                            <i class="fas fa-ban"></i> <!-- Icon for No Politics -->
                        </div>
                    </div>
                    <div class="col-6">
                        <h5>{{$milestone->title_03}}</h5>
                        <p>{!! $milestone->descriotion_03 !!}
                    </div>
                </div>

                <!-- Path between 3-4 -->
                <div class="row timeline">
                    <div class="col-2">
                        <div class="corner top-right"></div>
                    </div>
                    <div class="col-8">
                        <hr>
                    </div>
                    <div class="col-2">
                        <div class="corner left-bottom"></div>
                    </div>
                </div>

                <!-- Fourth Section -->
                <div class="row align-items-center justify-content-end how-it-works">
                    <div class="col-6 text-right">
                        <h5>{{$milestone->title_04}}</h5>
                        <p>{!! $milestone->descriotion_04 !!}
                    </div>
                    <div class="col-2 text-center full">
                        <div class="circle circle-4">
                            <i class="fas fa-handshake"></i> <!-- Icon for Employee Respect -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
