@php
  $contact = \App\Models\ContactDetail::find(1);
  $blogs = \App\Models\Blog::where('status',1)->latest()->limit(2)->get();
  $vegetables = \App\Models\VegetableCrop::where('status',1)->latest()->limit(4)->get();
  $fieldCrops = \App\Models\FieldCrop::where('status',1)->latest()->limit(4)->
         get();
  $cottonSeed = \App\Models\Cotton::where('status',1)->latest()->limit(4)->get();
 $siteSetting = \App\Models\SiteSetting::find(1);
@endphp
<footer
class="footer-wrapper footer-layout1"
data-bg-src="{{asset('assets/img/bg/footer_bg_1.jpg')}}"
>
<div class="pt-5 pb-5">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-md-6 col-xl-3">
        <div class="widget footer-widget">
          <div class="ot-widget-about">
            <div class="about-logo">
              <a href="{{route('website.index')}}"
                ><img src="{{asset('assets/dynamics/'.$siteSetting->footer_logo)}}" alt="Navbharat"
              /></a>
            </div>
            <p class="about-text">
           {{$contact->footer_about}}
            </p>
            <div class="ot-social">
              <a href="{{$contact->facebook_link}}"
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a href="{{$contact->twitter_link}}"
                ><i class="fab fa-twitter"></i
              ></a>
              <a href="{{$contact->linkedin_link}}"
                ><i class="fab fa-linkedin-in"></i
              ></a>
              <a href="https://api.whatsapp.com/send?phone=<?= @$contact->whatsapps ?>
                  ""
                ><i class="fab fa-whatsapp"></i
              ></a>
              <a href="{{$contact->youtube_link}}
                  "><i class="fab fa-youtube"></i
                ></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-auto">
        <div class="widget widget_nav_menu footer-widget">
          <h3 class="widget_title">Products</h3>
          <div class="menu-all-pages-container">
            <ul class="menu">
              @foreach ($vegetables as $vege)
              <li><a href="{{route('website.vegetable-category',$vege->slug)}}">{{$vege->product_name}}
             </a></li>
              @endforeach
              @foreach ($cottonSeed as $cotton)
              <li><a href="{{route('website.cotton-seed',$cotton->slug)}}">{{$cotton->product_name}}
             </a></li>
              @endforeach
              @foreach ($fieldCrops as $crop)
              <li><a href="{{route('website.field-category',$crop->slug)}}">{{$crop->product_name}}
             </a></li>
              @endforeach
              
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-auto">
        <div class="widget footer-widget">
          <h3 class="widget_title">Contact Us</h3>
          <div class="ot-widget-contact">
            <div class="info-box">
              <div class="info-box_icon">
                <i class="fas fa-location-dot"></i>
              </div>
              <p class="info-box_text">
            {{$contact->address}}  
            </p>
            </div>
            <div class="info-box">
              <div class="info-box_icon">
                <i class="fas fa-phone"></i>
              </div>
              <p class="info-box_text">
                <a href="tel:+{{$contact->contact}}" class="info-box_link"
                  >+{{$contact->contact}}</a
                >
              </p>
            </div>
            <div class="info-box">
              <div class="info-box_icon">
                <i class="fas fa-envelope"></i>
              </div>
              <p class="info-box_text">
                <a
                  href="mailto:{{$contact->email}}"
                  class="info-box_link"
                  >{{$contact->email}}
                </a>
              </p>
            </div>
            <div class="info-box">
              <div class="info-box_icon">
                <i class="fas fa-clock"></i>
              </div>
              <p class="info-box_text">{{$contact->office_time}}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-auto">
        <div class="widget footer-widget">
          <h3 class="widget_title">Recent Posts</h3>
          <div class="recent-post-wrap">
            @foreach ($blogs as $blog)
            <div class="recent-post">
              <div class="media-img">
                <a href="{{route('website.blog-details',$blog->slug)}}"
                  ><img
                    src="{{asset('assets/dynamics/'.$blog->main_image)}}"
                    alt="Blog Image"
                /></a>
              </div>
              <div class="media-body">
                <h4 class="post-title">
                  <a class="text-inherit" href="{{route('website.blog-details',$blog->slug)}}"
                    >{{$blog->title}}</a
                  >
                </h4>
                <div class="recent-post-meta">
                  <a href="blog.php"
                    ><i class="fas fa-calendar-days"></i>{{$blog->created_at->format('d M Y')}}</a
                  >
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div
  class="copyright-wrap bg-style1"
  data-bg-src="assets/img/bg/copyright_bg_1.png"
>
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6">
        <p class="copyright-text">
          <i class="fal fa-copyright"></i> Copyright 2024 by
          <a href="index.php">Navbharat</a>. All rights reserved.
        </p>
      </div>
      <div class="col-lg-6 text-end d-none d-lg-block">
        <div class="footer-links">
          <ul>
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy & Policy</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</footer>
<div class="scroll-top">
<svg
  class="progress-circle svg-content"
  width="100%"
  height="100%"
  viewBox="-1 -1 102 102"
>
  <path
    d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
    style="
      transition: stroke-dashoffset 10ms linear 0s;
      stroke-dasharray: 307.919, 307.919;
      stroke-dashoffset: 307.919;
    "
  ></path>
</svg>
</div>
<script src="{{asset('assets/js/vendor/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('assets/js/app.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0.30/dist/fancybox.umd.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();
</script>
</body>
</html>

