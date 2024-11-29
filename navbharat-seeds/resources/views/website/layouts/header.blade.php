@php
    $contact = \App\Models\ContactDetail::find(1);
    $siteSetting = \App\Models\SiteSetting::find(1);
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
<html class="no-js" lang="zxx">

<head>
    <meta name="description" content="{{$description}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="{{$keywords}}" />
    <meta name="description" content="{{$description}}" />
    <meta name="author" content="{{ $meta_tags->author }}">
    <meta name="description" content="{{$description}}" />
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/dynamics/'.$siteSetting->favicon)}}" />
    <title>{{$siteSetting->site_name}} | {{$title}}</title>

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/dynamics/'.$siteSetting->favicon)}}" />
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('assets/dynamics/'.$siteSetting->favicon)}}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/dynamics/'.$siteSetting->favicon)}}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/dynamics/'.$siteSetting->favicon)}}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/dynamics/'.$siteSetting->favicon)}}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/dynamics/'.$siteSetting->favicon)}}" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/dynamics/'.$siteSetting->favicon)}}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/dynamics/'.$siteSetting->favicon)}}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/dynamics/'.$siteSetting->favicon)}}" />
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/dynamics/'.$siteSetting->favicon)}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/dynamics/'.$siteSetting->favicon)}}" />
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/dynamics/'.$siteSetting->favicon)}}" />
    <link rel="manifest" href="{{asset('assets/img/favicons/manifest.json')}}" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="{{asset('assets/img/favicons/ms-icon-144x144.png')}}" />
    <meta name="theme-color" content="#ffffff" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Covered+By+Your+Grace&amp;family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
</head>

<body>

    <div id="QuickView" class="white-popup mfp-hide">
        <div class="container bg-white">
            <div class="row gx-60">
                <div class="col-lg-6">
                    <div class="product-big-img">
                        <div class="img">
                            <img src="{{asset('assets/dynamics/'.$siteSetting->header_logo)}}" alt="Product Image" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="product-about">
                        <p class="price">$32.85<del>$42.99</del></p>
                        <h2 class="product-title">Chard Spring Greens</h2>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                <span style="width: 100%">Rated <strong class="rating">5.00</strong> out of 5 based
                                    on <span class="rating">1</span> customer rating</span>
                            </div>
                            <a href="shop-details.html" class="woocommerce-review-link">(<span
                                    class="count">4</span> customer reviews)</a>
                        </div>
                        <p class="text">
                            Chard Spring Greens is a vibrant and nutrient-rich vegetable,
                            known for its tender leaves and earthy flavor. Packed with
                            vitamins and minerals, it adds a healthy and delicious touch to
                            your meals.
                        </p>
                        <div class="actions">
                            <div class="quantity">
                                <input type="number" class="qty-input" step="1" min="1"
                                    max="100" name="quantity" value="1" title="Qty" />
                                <button class="quantity-plus qty-btn">
                                    <i class="far fa-chevron-up"></i>
                                </button>
                                <button class="quantity-minus qty-btn">
                                    <i class="far fa-chevron-down"></i>
                                </button>
                            </div>
                            <button class="ot-btn">Add to Cart</button>
                        </div>
                        <div class="product_meta">
                            <span class="sku_wrapper">SKU: <span class="sku">chard-spring-greens</span></span>
                            <span class="posted_in">Category: <a href="shop.html" rel="tag">Organic</a></span>
                            <span>Tags: <a href="shop.html">Fresh</a><a href="shop.html">Food</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
        </div>
    </div>
    <div class="sidemenu-wrapper sidemenu-cart d-none d-lg-block">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls">
                <i class="far fa-times"></i>
            </button>
            <div class="widget woocommerce widget_shopping_cart footer-widget">
                <h3 class="widget_title">Shopping cart</h3>
                <div class="widget_shopping_cart_content">
                    <ul class="woocommerce-mini-cart cart_list product_list_widget">
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/product/product_thumb_1_1.jpg"
                                    alt="Cart Image" />Chard Spring</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount"><span
                                        class="woocommerce-Price-currencySymbol">$</span>940.00</span></span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/product/product_thumb_1_2.jpg"
                                    alt="Cart Image" />Broccoli Cauliflower</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount"><span
                                        class="woocommerce-Price-currencySymbol">$</span>899.00</span></span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/product/product_thumb_1_3.jpg"
                                    alt="Cart Image" />Bell Pepper</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount"><span
                                        class="woocommerce-Price-currencySymbol">$</span>756.00</span></span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/product/product_thumb_1_4.jpg"
                                    alt="Cart Image" />Fresh Eggplant</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount"><span
                                        class="woocommerce-Price-currencySymbol">$</span>723.00</span></span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/product/product_thumb_1_5.jpg"
                                    alt="Cart Image" />Carrots Vegetables</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount"><span
                                        class="woocommerce-Price-currencySymbol">$</span>1080.00</span></span>
                        </li>
                    </ul>
                    <p class="woocommerce-mini-cart__total total">
                        <strong>Subtotal:</strong>
                        <span class="woocommerce-Price-amount amount"><span
                                class="woocommerce-Price-currencySymbol">$</span>4398.00</span>
                    </p>
                    <p class="woocommerce-mini-cart__buttons buttons">
                        <a href="cart.html" class="ot-btn style3 wc-forward">View cart</a>
                        <a href="checkout.html" class="ot-btn style3 checkout wc-forward">Checkout</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-search-box d-none d-lg-block">
        <div class="search-content">
            <div class="container">
                <button class="searchClose border-theme text-theme">
                    <i class="far fa-times"></i>
                </button>
                <form action="#">
                    <input type="text" class="border-theme" placeholder="What are you looking for?" />
                    <button type="submit"><i class="fal fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="ot-menu-wrapper">
        <div class="ot-menu-area text-center">
            <button class="ot-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="{{route('website.index')}}"><img src="{{asset('assets/dynamics/'.$siteSetting->header_logo)}}" alt="NavBharat" /></a>
            </div>
            <div class="ot-mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="{{route('website.index')}}">Home</a>

                    </li>
                    <li><a href="#">About Us</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">Service</a>

                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Pages</a>

                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{route('website.blog')}}">Blog</a>

                    </li>
                    <li><a href="{{route('website.index')}}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <header class="ot-header header-layout1">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links">
                            <ul>
                                <li class="d-none d-xl-inline-block">
                                    <i class="fal fa-location-dot"></i><a
                                        href="https://www.google.com/maps">{{$contact->header_address}}</a>
                                </li>
                                <li>
                                    <i class="fal fa-envelope"></i><a
                                        href="mailto:{{$contact->email}}">{{$contact->email}}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <li>
                                    <div class="social-links">
                                        <span class="social-title">Follow Us On :</span>
                                        <a href="{{$contact->facebook_link}}"><i class="fab fa-facebook-f"></i></a>
                                        <a href="{{$contact->twitter_link}}"><i class="fab fa-twitter"></i></a>
                                        <a href="{{$contact->linkedin_link}}"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="{{$contact->instagram}}"><i  class="fab fa-instagram"></i></a>
                                        <a href="{{$contact->youtube_link}}"><i
                                                class="fab fa-youtube"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <div class="menu-area">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="{{route('website.index')}}">
                                    <img src="{{asset('assets/dynamics/'.$siteSetting->header_logo)}}" alt="NavBharat" /></a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li>
                                        <a href="{{route('website.index')}}">Home</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Seeds</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{route('website.cotton-seed')}}">Cotton </a></li>
                                            <li><a href="{{route('website.field-crops')}}">Field Crops </a></li>
                                            <li>
                                                <a href="{{route('website.vegetable-crops')}}">Vegetable Crops </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{route('website.head-office')}}">Infrastructure</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{route('website.head-office')}}">Head & Corporate Offices </a>
                                            </li>
                                           
                                            <li>
                                                <a href="{{route('website.research')}}">Research & Development </a>
                                            </li>
                                            <li>
                                                <a href="{{route('website.processing-plant')}}">Processing Plant </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{route('website.our-community')}}">Outreach
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="{{route('website.farmer-outrich')}}">Farmers Outreach </a></li>
                                            <li><a href="{{route('website.our-community')}}">Partnerships </a></li>
                                            <li><a href="{{route('website.export')}}">Exports </a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{route('website.blog')}}">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{route('website.blog')}}">Latest News </a></li>
                                            <li><a href="{{route('website.farmer-reviews')}}">Farmers Review</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="{{route('website.about-us')}}">About Us</a>
                                        <ul class="sub-menu">
                                           <li><a href="{{route('website.about-us')}}#overview">Overview </a></li>
                                            <li>
                                                <a href="{{route('website.about-us')}}#vision-mission">Vision, Mission
                                                </a>
                                            </li>

                                            <li><a href="{{route('website.about-us')}}#leadership">Leadership </a></li>
                                            <li>
                                                <a href="{{route('website.about-us')}}#awards-accolades">Awards and Accolades </a>
                                            </li>
                                            <li><a href="{{route('website.about-us')}}#milestone">Milestone </a></li>
                                            <li><a href="{{route('website.gallery')}}">Gallery </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <button type="button" class="ot-menu-toggle d-block d-lg-none">
                                <i class="far fa-bars"></i>
                            </button>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button">


                                <a href="{{route('website.index')}}#enquiry" class="ot-btn style4">Enquiry <i
                                        class="fas fa-chevrons-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </header>
