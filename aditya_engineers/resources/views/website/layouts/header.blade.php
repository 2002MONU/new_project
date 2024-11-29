@php
    $services = \App\Models\Service::where('status', 1)->orderBy('priority', 'asc')->get();
    $site_setting = \App\Models\SiteSetting::find(1);
    $contact = \App\Models\ContactDetail::find(1);
    $path = request()->path();
    $seo_details = \App\Models\SeoSetting::where('page_name', $path)->first();
    $title = $description = $keywords = '';
    if ($seo_details != '') {
        $title = $seo_details->title;
        $description = $seo_details->description;
        $keywords = $seo_details->keywords;
    }
    $meta_tags = \App\Models\MetaTag::find(1);
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="{{ $keywords }}">
    <meta name="description" content="{{ $description }}">
    <meta name="author" content="{{ $meta_tags->author }}">
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
    <link rel="canonical" href="{{ $meta_tags->canonical }}">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="{{ $meta_tags->og_type }}">
    <meta property="og:title" content="{{ $meta_tags->og_title }}">
    <meta property="og:description" content="{{ $meta_tags->og_description }}">
    <meta property="og:url" content="{{ $meta_tags->og_url }}">
    <meta property="og:site_name" content="{{ $meta_tags->og_site_name }}">
    <meta property="og:updated_time" content="{{ $meta_tags->updated_at }}">
    <meta property="og:image" content="{{ asset('assets/dynamics/' . $meta_tags->og_image) }}">
    <meta property="og:image:secure_url" content="{{ $meta_tags->og_secure_url }}">
    <meta property="og:image:width" content="{{ $meta_tags->width }}">
    <meta property="og:image:height" content="{{ $meta_tags->height }}">
    <meta property="og:image:alt" content="Homepage">
    <meta property="og:image:type" content="{{ $meta_tags->og_type }}">
    <meta name="twitter:card" content="{{ $meta_tags->twitter_card }}">
    <meta name="twitter:title" content="{{ $meta_tags->twitter_title }}">
    <meta name="twitter:image" content="{{ asset('assets/dynamics/' . $meta_tags->twitter_image) }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/dynamics/' . $site_setting->favicon) }}">
    <title>{{ $site_setting->site_name }} | {{ $title }}</title>

    <!--=====FAB ICON=======-->
    <link rel="shortcut icon" href="{{ asset('assets/dynamics/' . $site_setting->favicon) }}" type="image/x-icon">

    <!--===== CSS LINK =======-->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/mobile.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/owlcarousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">

    <!--=====  JS SCRIPT LINK =======-->
    <script src="{{ asset('assets/js/plugins/jquery-3-6-0.min.js') }}"></script>
</head>

<body class="homepage1-body tg-heading-subheading animation-style3">

<script>
            var msg = '{{Session::get('success')}}';
            var exist = '{{Session::has('success')}}';
            if(exist){
              alert(msg);
            }
  </script>


    <!--=====HEADER START=======-->
    <header>
        <div class="header-area homepage1 header header-sticky d-none d-lg-block" id="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-elements">
                            <div class="site-logo">
                                <a href="index.php"><img
                                        src="{{ asset('assets/dynamics/' . $site_setting->header_logo) }}"
                                        alt="img"></a>
                            </div>
                            <div class="main-menu">
                                <ul>
                                    <li><a href="{{ route('website.index') }}">Home </a></li>
                                    <li><a href="{{ route('website.about') }}">About</a></li>
                                    <li>
                                        <a href="{{ route('website.service') }}">Services <i
                                                class="fa-solid fa-angle-down"></i></a>
                                        <ul class="dropdown-padding">
                                            @foreach ($services as $service)
                                                <li>
                                                    <a
                                                        href="{{ route('website.service-details', $service->slug) }}">{{ $service->title }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('website.our-clients') }}">Our Clients</a></li>
                                    <li><a href="{{ route('website.gallery') }}">Gallery </a></li>

                                    <li><a href="{{ route('website.contact') }}">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="btn-area">
                                <a class="header-btn1" onclick="openPopup()">
                                    Enquiry <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--=====HEADER END =======-->

    <!--===== MOBILE HEADER STARTS =======-->
    <div class="mobile-header mobile-haeder1 d-block d-lg-none">
        <div class="container-fluid">
            <div class="col-12">
                <div class="mobile-header-elements">
                    <div class="mobile-logo">
                        <a href="index.php"><img src="{{ asset('assets/dynamics/' . $site_setting->header_logo) }}"
                                alt="img"></a>
                    </div>
                    <div class="mobile-nav-icon dots-menu">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-sidebar mobile-sidebar1">
        <div class="logosicon-area">
            <div class="logos" style="height: 70px;">
                <img src="{{ asset('assets/dynamics/' . $site_setting->header_logo) }}" alt="img">
            </div>
            <div class="menu-close">
                <i class="fa-solid fa-xmark"></i>
            </div>
        </div>
        <div class="mobile-nav mobile-nav1">
            <ul class="mobile-nav-list nav-list1">
                <li><a href="{{ route('website.index') }}">Home </a></li>
                <li><a href="{{ route('website.about') }}">About</a></li>
                <li>
                    <a href="{{ route('website.service') }}">Services</a>
                    <ul class="sub-menu">
                        @foreach ($services as $service)
                            <li>
                                <a
                                    href="{{ route('website.service-details', $service->slug) }}">{{ $service->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li><a href="{{ route('website.our-clients') }}">Our Clients</a></li>
                <li><a href="{{ route('website.gallery') }}">Gallery</a></li>
                <li><a href="{{ route('website.contact') }}">Contact Us</a></li>
            </ul>

            <div class="allmobilesection">
                <a href="{{ route('website.service') }}" class="header-btn1">Get Started <i
                        class="fa-solid fa-arrow-right"></i></a>
                <div class="single-footer">
                    <h3>Contact Info</h3>
                    <div class="footer1-contact-info">
                        <div class="contact-info-single">
                            <div class="contact-info-icon">
                                <i class="fa-solid fa-phone-volume"></i>
                            </div>
                            <div class="contact-info-text">
                                <a href="tel:+{{ $contact->mobile_no }}">+{{ $contact->mobile_no }}</a>
                            </div>
                        </div>

                        <div class="contact-info-single">
                            <div class="contact-info-icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="contact-info-text">
                                <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                            </div>
                        </div>

                        <div class="single-footer">
                            <h3>Our Location</h3>

                            <div class="contact-info-single">
                                <div class="contact-info-icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="contact-info-text">
                                    <a href="mailto:{{ $contact->email }}">{{ $contact->address }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-footer">
                            <h3>Social Links</h3>

                            <div class="social-links-mobile-menu">
                                <ul>
                                    <li>
                                        <a href="{{ $contact->facebook }}"><i
                                                class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ $contact->instagram }}"><i
                                                class="fa-brands fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ $contact->linkedin }}"><i
                                                class="fa-brands fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ $contact->youtube }}"><i class="fa-brands fa-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== MOBILE HEADER STARTS =======-->
