
   @php
     $contact = \App\Models\ContactDetail::find(1);
     $siteSetting = \App\Models\SiteSetting::find(1);
   @endphp
   <!-- Popup Container -->
   <div id="enquiryPopup" class="popup-overlay">
    <div class="popup-content">
      <span class="close-btn" onclick="closePopup()">&times;</span>
      <!-- Enquiry Form -->
      <form action="{{route('website.enquiry-form')}}" method="post" id="enquiryForm">
          @csrf
        <div class="form-group">
          <label for="name"><i class="fa-solid fa-user"></i> Name:</label>
          <input type="text" id="name" name="name" required >
           @error('name')
                    <div class="text-danger">{{$message}}</div>
                  @enderror
        </div>
        <div class="form-group">
          <label for="mobile"
            ><i class="fa-solid fa-phone"></i> Mobile:</label
          >
          <input type="tel" id="mobile" name="mobile" required >
           @error('mobile')
                    <div class="text-danger">{{$message}}</div>
                  @enderror
        </div>
        <div class="form-group">
          <label for="email"
            ><i class="fa-solid fa-envelope"></i> Email:</label
          >
          <input type="email" id="email" name="email" required >
           @error('email')
                    <div class="text-danger">{{$message}}</div>
                  @enderror
        </div>
        <div class="form-group">
          <label for="message"
            ><i class="fa-solid fa-comment"></i>Your Message:</label
          >
          <textarea id="message" name="message" required></textarea>
           @error('message')
                    <div class="text-danger">{{$message}}</div>
                  @enderror
        </div>
        <!-- <button type="submit" id="submitBtn">Submit</button> -->
        <div class="input-area1">
          <button type="submit" class="header-btn1">
            Submit Now <i class="fa-solid fa-arrow-right"></i>
          </button>
        </div>
      </form>
    </div>
  </div>

  <script>
    function openPopup() {
      document.getElementById("enquiryPopup").style.display = "flex";
    }

    function closePopup() {
      document.getElementById("enquiryPopup").style.display = "none";
    }
  </script>
 
 
 
 
 
 <!--===== FOOTER AREA STARTS =======-->
  <div id="contact-us" class="footer1-section-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="footer-logo-content sp4">
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="logo-content">
                  <img src="{{asset('assets/dynamics/'.$siteSetting->footer_logo)}}" alt="img" >
                  <p>
                    {{$siteSetting->footer_title}}
                  </p>
                  <ul>
                    <li>
                      <a href="{{$contact->facebook}}"><i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                    <li>
                      <a href="{{$contact->instagram}}"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li>
                      <a href="{{$contact->linkedin}}"><i class="fa-brands fa-linkedin-in"></i></a>
                    </li>
                    <li>
                      <a href="{{$contact->youtube}}"><i class="fa-brands fa-youtube"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-2 col-md-6">
                <div class="space30 d-md-block d-lg-none"></div>
                <div class="service-heading">
                  <h2>Quick Links</h2>
                  <ul>
                    <li><a href="{{route('website.index')}}">Home </a></li>
                    <li><a href="{{route('website.about')}}">About Us  </a></li>
                    <li><a href="{{route('website.service')}}">Services</a></li>
                    <li><a href="{{route('website.our-clients')}}"> Our Clients</a></li>
                    <li><a href="{{route('website.gallery')}}">Gallery</a></li>
                  </ul>
                </div>
              </div>

              <div class="col-lg-3 col-md-6">
                <div class="space30 d-md-block d-lg-none"></div>
                <div class="service-heading contact">
                  <h2>Contact US</h2>
                  <ul>
                    <li>
                      <a href="tel:+{{$contact->mobile_no}}">
                        <span class="icons"
                          ><i class="fa-solid fa-phone"></i></span
                        ><span>+ {{$contact->mobile_no}}</span></a
                      >
                    </li>
                    <li>
                      <a href="mailto:{{$contact->email}}">
                        <span class="icons"
                          ><i class="fa-solid fa-envelope"></i></span
                        ><span>{{$contact->email}} </span></a
                      >
                    </li>
                    <li>
                      <a href="#">
                        <span class="icons"
                          ><i class="fa-solid fa-location-dot"></i></span
                        ><span>{{$contact->address}}</span></a
                      >
                    </li>
                  </ul>
                </div>
              </div>

              <div class="col-lg-4 col-md-6">
                <div class="space30 d-block d-md-none"></div>
                <div class="service-heading">
                  <h2>Our Location</h2>
                  <div class="map-container">
                    <iframe
                      src="{{$contact->map_link}}"
                      style="border: 0"
                      allowfullscreen=""
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                    >
                    </iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="copyright">
            <div class="row">
              <div class="col-md-6">
                <p>© Copyright 2024 Aditya Engineers. All Right Reserved</p>
              </div>
              <div class="col-md-6">
                <p>
                  Design & Developed By
                  <a href="https://thecolourmoon.com/" target="_blank">
                    Colour Moon</a
                  >
                  Technologies
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--===== FOOTER AREA ENDS =======-->

  <!--===== JS SCRIPT LINK =======-->
  <script src="{{asset('assets/js/plugins/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/fontawesome.js')}}"></script>
  <script src="{{asset('assets/js/plugins/aos.js')}}"></script>
  <script src="{{asset('assets/js/plugins/counter.js')}}"></script>
  <script src="{{asset('assets/js/plugins/gsap.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/ScrollTrigger.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/Splitetext.js')}}"></script>
  <script src="{{asset('assets/js/plugins/sidebar.js')}}"></script>
  <script src="{{asset('assets/js/plugins/magnific-popup.js')}}"></script>
  <script src="{{asset('assets/js/plugins/mobilemenu.js')}}"></script>
  <script src="{{asset('assets/js/plugins/owlcarousel.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/gsap-animation.js')}}"></script>
  <script src="{{asset('assets/js/plugins/nice-select.js')}}"></script>
  <script src="{{asset('assets/js/plugins/slick-slider.js')}}"></script>
  <script src="{{asset('assets/js/plugins/waypoints.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0.30/dist/fancybox.umd.js"></script>
</body>
</html>
