@extends('website.layouts.app')
@section('website')

<!--===== HERO AREA STARTS =======-->
<div class="hero1-section-area about-bg-area">
  <img src="{{asset('assets/dynamics/'.$siteSetting->contact_banner)}}" alt="img" class="header-img1">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 m-auto">
        <div class="hero-heading-area heading1 text-center">
          <h1>Contact Us</h1>
          <a href="{{route('website.index')}}" class="backline">Home <i class="fa-solid fa-angle-right"></i><span>Contact Us</span></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== HERO AREA ENDS =======-->

<!--===== CONTACT AREA STARTS =======-->
<div class="contact1-section-area contact-inner sp1">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="contact-header-area heading2">
          
          <h2 class="tg-element-title"> {{$siteSetting->contact_heading}}</h2>
          <p>{{$siteSetting->contact_title}}</p>
          <div class="space48"></div>
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="contact-auhtor-side">
                <div class="icons-text">
                  <div class="icons">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                  <div class="text">
                    <p>Phone</p>
                    <a href="tel:{{$contact->mobile_no}}">{{$contact->mobile_no}}</a>
                  </div>
                </div>
                <div class="space48"></div>
                <div class="icons-text">
                  <div class="icons">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  <div class="text">
                    <p>Address</p>
                    <a href="tel:{{$contact->mobile_no}}">{{$contact->address}}</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6">
              <div class="space48 d-md-none"></div>
              <div class="contact-auhtor-side">
                <div class="icons-text">
                  <div class="icons">
                    <i class="fa-solid fa-envelope"></i>
                  </div>
                  <div class="text">
                    <p>Email</p>
                    <a href="mailto:{{$contact->email}}">{{$contact->email}} </a>
                  </div>
                </div>
                <div class="space48"></div>
                <div class="icons-text">
                  <div class="icons">
                    <i class="fa-brands fa-linkedin-in"></i>
                  </div>
                  <div class="text">
                    <p>Linkedin</p>
                    <a href="#">{{$contact->linkedin_user}}</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="contact-submit-boxarea">
          <h4>Request A Quote</h4>
          @if(session('success'))
          <div class="alert bg-success text-white alert-dismissible fade show" role="alert">
              {{session('success')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          <form action="{{route('website.contact-form')}}" method="POST">
            @csrf
             <div class="row">
              <div class="col-lg-6">
                <div class="input-area">
                  <p>Name (required)</p>
                  <input type="text" name="name" placeholder="Name" required>
                  @error('name')
                    <div class="text-danger">{{$message}}</div>
                  @enderror
                </div>
              </div>
              <div class="col-lg-6">
                <div class="input-area">
                  <p>Number (required)</p>
                  <input type="number" name="number" required placeholder="Phone">
                  @error('number')
                  <div class="text-danger">{{$message}}</div>
                @enderror
                </div>
              </div>
  
              <div class="col-lg-12">
                <div class="input-area">
                  <p>Email (required)</p>
                  <input type="email"  name="email" required placeholder="Email">
                  @error('email')
                  <div class="text-danger">{{$message}}</div>
                @enderror
                </div>
              </div>
  
              <div class="col-lg-12">
                <div class="input-area">
                  <p>Additional Details (Optional)</p>
                  <textarea name="additonal_details" placeholder="Describe your inquiry" cols="30" rows="10"></textarea>
                  @error('additonal_details')
                  <div class="text-danger">{{$message}}</div>
                @enderror
                </div>
              </div>
              <div class="col-lg-12">
                <div class="input-area1">
                  <input type="checkbox" name="checkbox">
                  <p>I agree with the site privacy policy</p>
                  @error('checkbox')
                  <div class="text-danger">{{$message}}</div>
                @enderror
                </div>
              </div>
  
              <div class="col-lg-12">
                <div class="input-area1">
                  <button type="submit" class="header-btn1">Submit Now <i class="fa-solid fa-arrow-right"></i></button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="mapouter">
  <div class="gmap_canvas">
    <iframe src="{{$contact->map_link}}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>
<!--===== CONTACT AREA ENDS =======-->

@endsection