@extends('website.layouts.app')
@section('website')
    <div class="preloader">
        <div class="preloader-inner"><span class="loader"></span></div>
    </div>
    <script>
      var msg = '{{Session::get('success')}}';
      var exist = '{{Session::has('success')}}';
      if(exist){
        alert(msg);
      }
    </script>
    <div class="ot-hero-wrapper hero-1 hero-4">
        <div class="hero-slider ot-carousel" data-fade="true" data-adaptive-height="true">
            <div class="ot-hero-slide">
                <div class="ot-hero-bg" data-bg-src="{{ asset('assets/dynamics/' . $slider->banner_image) }}"></div>
                <div class="container z-index-common">
                    <div class="hero-style1">
                        <div class="text-video-btn">
                            <div id="container-01">
                                <div id="circle">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px"
                                        height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300"
                                        xml:space="preserve">
                                        <defs>
                                            <path id="circlePath"
                                                d="M 150, 150 m -60, 0 a 60,60 0 1,1 120,0 a 60,60 0 1,1 -120,0 " />
                                        </defs>
                                        <circle cx="150" cy="150" r="60" fill="none" />
                                        <g>
                                            <use xlink:href="#circlePath" fill="none" />
                                            <text fill="#000" size="14">
                                                <textPath xlink:href="#circlePath"> {{ $slider->round_text }} </textPath>
                                            </text>
                                        </g>
                                    </svg>
                                </div>
                                <img id="center-image" src="{{ asset('assets/dynamics/' . $slider->middle_icon) }}"
                                    alt="Center Image">
                            </div>
                        </div>
                        <span class="hero-subtitle" data-ani="slideinup" data-ani-delay="0.0s">{{ $slider->title }}</span>
                        <h1 class="hero-title">
                            <span class="title1" data-ani="slideinup" data-ani-delay="0.3s">{{ $slider->heading }}</span>
                            {{-- <span class="title2" data-ani="slideinup" data-ani-delay="0.5s">EXCELLENCE </span> --}}


                        </h1>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="feature-sec1">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-xl-4 col-sm-6">
                    <div class="feature-card" data-bg-src="{{ asset('assets/img/bg/feature_card_bg.png') }}">
                        <div class="box-icon">
                            <img src="{{ asset('assets/images/best-seller.png') }}" alt="icon" />

                        </div>
                        <div class="media-body">
                            <p class="box-subtitle">Feature 01</p>
                            <h3 class="box-title">{{ $homefeature->feature_01 }}
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <div class="feature-card" data-bg-src="{{ asset('assets/img/bg/feature_card_bg.png') }}">
                        <div class="box-icon">
                            <img src="{{ asset('assets/images/supply.png') }}" alt="icon" />
                        </div>
                        <div class="media-body">
                            <p class="box-subtitle">Feature 02</p>
                            <h3 class="box-title">{{ $homefeature->feature_02 }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <div class="feature-card" data-bg-src="{{ asset('assets/img/bg/feature_card_bg.png') }}">
                        <div class="box-icon">
                            <img src="{{ asset('assets/images/research.png') }}" alt="icon" />
                        </div>
                        <div class="media-body">
                            <p class="box-subtitle">Feature 03</p>
                            <h3 class="box-title">{{ $homefeature->feature_03 }}
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 mb-40 mb-xl-0">
                    <div class="img-box1">
                        <img src="{{ asset('assets/dynamics/' . $about->image) }}" alt="About" />
                    </div>
                </div>
                <div class="col-xl-5 text-center text-xl-start">
                    <div class="title-area mb-34">
                        <span class="sub-title">About Company</span>
                        <h2 class="sec-title">{{ $about->title }}</h2>
                        {!! $about->description !!}
                    </div>
                    <div class="mb-40">
                        <div class="about-feature-wrap">
                            <div class="about-feature">
                                <div class="box-icon">
                                    <img src="{{ asset('assets/img/icon/about_feature_1.svg') }}" alt="Icon" />
                                </div>
                                <h3 class="box-title">{{ $about->point_01 }}</h3>
                            </div>
                            <div class="about-feature">
                                <div class="box-icon">
                                    <img src="{{ asset('assets/img/icon/about_feature_2.svg') }}" alt="Icon" />
                                </div>
                                <h3 class="box-title">{{ $about->point_01 }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group">
                        <a href="{{ route('website.about-us') }}" class="ot-btn">Read more<i
                                class="fas fa-chevrons-right ms-2"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="bg-smoke2 space" data-bg-src="{{ asset('assets/img/bg/service_bg_1.png') }}">
        <div class="container">
            <div class="row justify-content-md-between justify-content-center align-items-end">
                <div class="col-md-8 mb-n2 mb-md-0">
                    <div class="title-area text-center text-md-start">
                        <span class="sub-title">About Products </span>
                        <h2 class="sec-title">We Offer best Quality Seeds</h2>
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
                @foreach ($fieldCrops as $crop)
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="service-card">
                            <div class="box-img">
                                <img src="{{ asset('assets/dynamics/' . $crop->image) }}" alt="service image" />
                            </div>
                            <div class="box-content">
                                <div class="shape" data-bg-src="{{ asset('assets/img/bg/service_card_bg.png') }}"></div>
                                <div class="box-icon" data-bg-src="{{ asset('assets/img/icon/service_card_icon.svg') }}">
                                    <img src="{{ asset('assets/dynamics/' . $crop->icon) }}" alt="Icon" />
                                </div>
                                <h3 class="box-title">
                                    <a href="{{ route('website.field-category', $crop->slug) }}">{{ $crop->product_name }}
                                    </a>
                                </h3>
                                <p class="box-text">
                                    {{ $crop->title }}
                                </p>
                                <a href="{{ route('website.field-category', $crop->slug) }}" class="ot-btn">Read More<i
                                        class="far fa-chevrons-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach ($vegetables as $crop)
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="service-card">
                            <div class="box-img">
                                <img src="{{ asset('assets/dynamics/' . $crop->image) }}" alt="service image" />
                            </div>
                            <div class="box-content">
                                <div class="shape" data-bg-src="{{ asset('assets/img/bg/service_card_bg.png') }}"></div>
                                <div class="box-icon" data-bg-src="{{ asset('assets/img/icon/service_card_icon.svg') }}">
                                    <img src="{{ asset('assets/dynamics/' . $crop->icon) }}" alt="Icon" />
                                </div>
                                <h3 class="box-title">
                                    <a href="{{ route('website.field-category', $crop->slug) }}">{{ $crop->product_name }}
                                    </a>
                                </h3>
                                <p class="box-text">
                                    {{ $crop->title }}
                                </p>
                                <a href="{{ route('website.vegetable-crops', $crop->slug) }}" class="ot-btn">Read More<i
                                        class="far fa-chevrons-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Work
                    Process</span>
                <h2 class="sec-title">Easy our 5 step work</h2>
            </div>
            <div class="process-card-wrap">
                <div class="process-card">
                    <div class="box-number">01</div>
                    <div class="box-icon">
                        <img src="{{ asset('assets/images/observation.png') }}" alt="Icon" />
                    </div>
                    <h3 class="box-title">Research
                    </h3>
                    <p class="box-text">{{ $workprocess->research }}</p>

                    <a href="{{ route('website.research') }}" class="link-btn steps-5">Read More<i
                            class="fas fa-chevrons-right"></i></a>
                </div>
                <div class="process-card">
                    <div class="box-number">02</div>
                    <div class="box-icon">
                        <img src="{{ asset('assets/images/production.png') }}" alt="Icon" />
                    </div>
                    <h3 class="box-title">Production
                    </h3>
                    <p class="box-text">{{ $workprocess->production }}</p>
                    <a href="{{ route('website.processing-plant') }}#production" class="link-btn steps-5">Read More<i
                            class="fas fa-chevrons-right"></i></a>
                </div>
                <div class="process-card">
                    <div class="box-number">03</div>
                    <div class="box-icon">
                        <img src="{{ asset('assets/images/algorithm.png') }}" alt="Icon" />
                    </div>
                    <h3 class="box-title">Processing
                    </h3>
                    <p class="box-text">{{ $workprocess->processing }}</p>
                    <a href="{{ route('website.processing-plant') }}#production-processing" class="link-btn steps-5">Read
                        More<i class="fas fa-chevrons-right"></i></a>
                </div>
                <div class="process-card">
                    <div class="box-number">04</div>
                    <div class="box-icon">
                        <img src="{{ asset('assets/images/assurance.png') }}" alt="Icon" />
                    </div>
                    <h3 class="box-title">Quality Control
                    </h3>
                    <p class="box-text">{{ $workprocess->quality_Control }}</p>
                    <a href="{{ route('website.processing-plant') }}#quality-testing" class="link-btn steps-5">Read
                        More<i class="fas fa-chevrons-right"></i></a>
                </div>
                <div class="process-card">
                    <div class="box-number">05</div>
                    <div class="box-icon">
                        <img src="{{ asset('assets/images/product-management.png') }}" alt="Icon" />
                    </div>
                    <h3 class="box-title">Final Product
                    </h3>
                    <p class="box-text">{{ $workprocess->final_Product }}</p>
                    <a href="{{ route('website.field-crops') }}" class="link-btn steps-5">Read More<i
                            class="fas fa-chevrons-right"></i></a>
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
                        $image = json_decode($gallery->images, true);
                    @endphp
                    <div class="col-md-6 col-xl-4">
                        <div class="gallery-card">
                            <div class="box-img rounded-0">
                                <img src="{{ asset('assets/dynamics/' . $image[0]) }}" alt="gallery image" />
                                <h6 class="text-center">{{ $gallery->title }}</h6>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <section class="space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Customer Feedback</span>
                <h2 class="sec-title">What our Customer say</h2>
            </div>
            <div class="row ot-carousel" id="testiSlide1" data-slide-show="3" data-lg-slide-show="2"
                data-md-slide-show="2" data-sm-slide-show="1" data-dots="true">
                @foreach ($testimonials as $testi)
                    <div class="col-lg-6">
                        <div class="testi-card" data-bg-src="assets/img/bg/testi_card_bg.png">
                            <div class="box-quote">
                                <svg width="81" height="70" viewBox="0 0 81 70" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M69.4285 34H47.2856V1H80V35C80 53.418 65.4081 68.4501 47.2856 68.9853V59.3127C60.1438 58.7824 70.4285 48.0731 70.4285 35V34H69.4285Z"
                                        stroke="#4AA760" stroke-width="2" />
                                    <path
                                        d="M23.1428 34H1V1H33.7144V35C33.7144 53.418 19.1225 68.4501 1 68.9853V59.3127C13.8581 58.7824 24.1428 48.0731 24.1428 35V34H23.1428Z"
                                        stroke="#4AA760" stroke-width="2" />
                                </svg>
                            </div>
                            <div class="box-img">
                                <img src="{{ asset('assets/dynamics/' . $testi->image) }}" alt="Avater" />
                            </div>
                            <h3 class="box-title">{{ $testi->name }}</h3>
                            <p class="box-desig">{{ $testi->designation }}</p>
                            <p class="box-text">
                                {!! $testi->description !!}
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <section class="video-sec1" data-bg-src="{{ asset('assets/dynamics/' . $achievment->bg_image) }}">
        <div class="container text-center space">
            <div class="mb-5 pt-4">
                <a href="{{ $achievment->youtube_link }}" class="play-btn popup-video"><i class="fas fa-play"></i></a>
            </div>
            <h2 class="fs-60 sec-title text-white mb-n2">
                {{ $achievment->title }}
            </h2>
        </div>
    </section>
    <div class="counter-sec1">
        <div class="container">
            <div class="counter-card-wrap" data-bg-src="{{ asset('assets/img/bg/counter_bg_1.png') }}">
                <div class="counter-card">
                    <div class="box-icon" data-bg-src="{{ asset('assets/img/bg/counter_card_bg.svg') }}">
                        <img src="{{ asset('assets/img/icon/counter_card_1.svg') }}" alt="icon" />
                    </div>
                    <div class="media-body">
                        <h2 class="box-number">
                            <span class="counter-number">{{ $achievment->years_of_excellence }}</span>+
                        </h2>
                        <p class="box-text">Years of Excellence
                        </p>
                    </div>
                </div>
                <div class="counter-card">
                    <div class="box-icon" data-bg-src="{{ asset('assets/img/bg/counter_card_bg.svg') }}">
                        <img src="{{ asset('assets/img/icon/counter_card_2.svg') }}" alt="icon" />
                    </div>
                    <div class="media-body">
                        <h2 class="box-number">
                            <span class="counter-number">{{ $achievment->hybrid_seeds }}</span>K+
                        </h2>
                        <p class="box-text">Hybrid Seeds Developed </p>
                    </div>
                </div>
                <div class="counter-card">
                    <div class="box-icon" data-bg-src="{{ asset('assets/img/bg/counter_card_bg.svg') }}">
                        <img src="{{ asset('assets/img/icon/counter_card_3.svg') }}" alt="icon" />
                    </div>
                    <div class="media-body">
                        <h2 class="box-number">
                            <span class="counter-number">{{ $achievment->satisfied_farmers }}</span>K+
                        </h2>
                        <p class="box-text">Satisfied Farmers </p>
                    </div>
                </div>
                <div class="counter-card">
                    <div class="box-icon" data-bg-src="{{ asset('assets/img/bg/counter_card_bg.svg') }}">
                        <img src="{{ asset('assets/img/icon/counter_card_4.svg') }}" alt="icon" />
                    </div>
                    <div class="media-body">
                        <h2 class="box-number">
                            <span class="counter-number">{{ $achievment->farmer_testimonials }}</span>+
                        </h2>
                        <p class="box-text">Farmer Testimonials</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="space" id="blog-sec">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Blog
                    & News</span>
                <h2 class="sec-title">Latest News & Blog</h2>
            </div>
            <div class="row ot-carousel" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2"
                data-sm-slide-show="1" data-arrows="true">
                @foreach ($blogs as $blog)
                    <div class="col-md-6 col-xl-4">
                        <div class="blog-box">
                            <div class="blog-img">
                                <img src="{{ asset('assets/dynamics/' . $blog->main_image) }}" alt="blog image" />
                                <a class="date" href="{{ route('website.blog') }}">
                                    <span>{{ $blog->created_at->format('d') }}</span>{{ $blog->created_at->format('M') }}
                                </a>

                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title box-title">
                                    <a href="{{ route('website.blog-details', $blog->slug) }}">{{ $blog->title }}</a>
                                </h3>
                                {!! Str::words($blog->main_description, 30, '...') !!}
                                <div class="box-bottom">
                                    <a href="{{ route('website.blog-details', $blog->slug) }}" class="link-btn">Read
                                        More<i class="fas fa-chevrons-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>



    <!-- Popup Form Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-custom" role="document">
            <div class="modal-content modal-content-custom">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Send Us a Message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fa-solid fa-square-xmark"></i></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form id="navbharath-popup" action="{{ route('website.enquiry-form') }}" method="POST"
                            class="contact-form input-white ">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Your Name" />
                                    <i class="fal fa-user"></i>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="tel" class="form-control" name="phone_no" id="number"
                                        placeholder="Phone Number" />
                                    <i class="fal fa-phone"></i>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="crop" id="crop"
                                        placeholder="Crop" />
                                    <i class="fal fa-seedling"></i>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="variety" id="variety"
                                        placeholder="Variety" />
                                    <i class="fal fa-leaf"></i>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="state" id="state"
                                        placeholder="State" />
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="district" id="district"
                                        placeholder="District" />
                                    <i class="fal fa-map-marker"></i>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="tehsil" id="tehsil"
                                        placeholder="Tehsil" />
                                    <i class="fal fa-location-arrow"></i>
                                </div>
                                <div class="form-group col-12">
                                    <textarea name="message" id="message" cols="30" rows="3" class="form-control"
                                        placeholder="Your Message"></textarea>
                                    <i class="fal fa-pencil"></i>
                                </div>
                                <div class="form-group col-12">
                                    <input type="checkbox" id="agree" name="agree" />
                                    <label for="agree">
                                        I agree that by clicking on the button below I am explicitly soliciting a call from
                                        Navbharat Seeds or its partners on my 'Mobile' in order to assist me.
                                    </label>
                                </div>
                                <div class="form-btn col-12 text-center popup-submit-button">
                                    <button class="ot-btn">
                                        Send Message<i class="fas fa-chevron-right ms-2"></i>
                                    </button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script to show the modal after 3 seconds -->
    <script>
        window.onload = function() {
            // Show the modal after 3 seconds (3000 milliseconds)
            setTimeout(function() {
                var myModal = new bootstrap.Modal(document.getElementById('myModal'));
                myModal.show();
            }, 3000); // 3000ms = 3 seconds
        }

        <!-- Your Form HTML here -->


document.getElementById('navbharath-popup').addEventListener('submit', function (e) {
    e.preventDefault();

    // Clear previous error messages
    document.querySelectorAll('.form-group .error-message').forEach(function (el) {
        el.remove();
    });

    // Form fields
    const fields = [
        { id: 'name', name: 'Your Name' },
        { id: 'number', name: 'Phone Number' },
        { id: 'crop', name: 'Crop' },
        { id: 'variety', name: 'Variety' },
        { id: 'state', name: 'State' },
        { id: 'district', name: 'District' },
        { id: 'tehsil', name: 'Tehsil' },
        { id: 'message', name: 'Your Message' }
    ];

    let isValid = true;

    // Validate each field
    fields.forEach(function (field) {
        const input = document.getElementById(field.id);
        if (input.value.trim() === '') {
            isValid = false;
            const errorMessage = document.createElement('span');
            errorMessage.className = 'error-message text-danger';
            errorMessage.innerText = `${field.name} is required`;
            input.parentNode.appendChild(errorMessage);
        }
    });

    // Validate checkbox
    const agreeCheckbox = document.getElementById('agree');
    if (!agreeCheckbox.checked) {
        isValid = false;
        const errorMessage = document.createElement('span');
        errorMessage.className = 'error-message text-danger';
        errorMessage.innerText = 'You must agree to the terms';
        agreeCheckbox.parentNode.appendChild(errorMessage);
    }

    // Submit the form if valid
    if (isValid) {
        this.submit();
    }
});


    </script>
@endsection
