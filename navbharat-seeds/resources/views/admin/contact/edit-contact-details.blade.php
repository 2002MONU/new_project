@extends('admin.layout.main')
@section('title') Edit Contact  @endsection
@section('maindashboard')
<!-- App container starts -->
<!-- App hero header starts -->
<div class="app-hero-header d-flex align-items-center">
   <!-- Breadcrumb starts -->
   <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <i class="ri-home-8-line lh-1 pe-3 me-3 border-end"></i>
         <a href="{{route('admin.dashboard')}}">Home</a>
      </li>
      <li class="breadcrumb-item text-primary" aria-current="page">
         <a href="javascript:history.back()"> Back</a>
      </li>
      <li class="breadcrumb-item text-primary" aria-current="page">
         @yield('title')
      </li>
   </ol>
</div>
<!-- App Hero header ends -->
<!-- App body starts -->
<div class="app-body">
   @if(session('success'))
    <div class="alert bg-success text-white alert-dismissible fade show" role="alert">
        {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
   <!-- Row starts -->
   <div class="row gx-3">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <h5 class="card-title"> @yield('title') </h5>
            </div>
            <div class="card-body">
               <form action="{{route('contact-details.update', ['contact_detail' => $contact->id])}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <!-- Row starts -->
                  <div class="row gx-3">
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="contact">Contact <span class="text-danger">*</span> </label>
                           <input type="text" class="form-control" name="contact" placeholder="Enter contact number" value="{{$contact->contact}}">
                           @error('contact')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="whatsapps">WhatsApp <span class="text-danger">*</span> </label>
                           <input type="text" class="form-control" name="whatsapps" placeholder="Enter WhatsApp number" value="{{$contact->whatsapps}}">
                           @error('whatsapps')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="email">Email <span class="text-danger">*</span> </label>
                           <input type="email" class="form-control" name="email" placeholder="Enter email" value="{{$contact->email}}">
                           @error('email')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="address">Address <span class="text-danger">*</span> </label>
                           <textarea class="form-control" name="address" rows="3" placeholder="Enter address">{{$contact->address}}</textarea>
                           @error('address')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="address">Header Address <span class="text-danger">*</span> </label>
                           <textarea class="form-control" name="header_address" rows="3" placeholder="Enter address">{{$contact->header_address}}</textarea>
                           @error('header_address')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="footer_about">Footer About <span class="text-danger">*</span> </label>
                           <textarea class="form-control" name="footer_about" rows="3" placeholder="Enter footer about">{{$contact->footer_about}}</textarea>
                           @error('footer_about')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="office_time">Office Time <span class="text-danger">*</span> </label>
                           <input type="text" class="form-control" name="office_time" placeholder="Enter office time" value="{{$contact->office_time}}">
                           @error('office_time')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="facebook_link">Facebook Link</label>
                           <input type="url" class="form-control" name="facebook_link" placeholder="Enter Facebook link" value="{{$contact->facebook_link}}">
                           @error('facebook_link')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="facebook_link">Instagram Link</label>
                           <input type="url" class="form-control" name="instagram_link" placeholder="Enter Instagram link" value="{{$contact->instagram_link}}">
                           @error('instagram_link')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="twitter_link">Twitter Link</label>
                           <input type="url" class="form-control" name="twitter_link" placeholder="Enter Twitter link" value="{{$contact->twitter_link}}">
                           @error('twitter_link')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="linkedin_link">LinkedIn Link</label>
                           <input type="url" class="form-control" name="linkedin_link" placeholder="Enter LinkedIn link" value="{{$contact->linkedin_link}}">
                           @error('linkedin_link')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="youtube_link">YouTube Link</label>
                           <input type="url" class="form-control" name="youtube_link" placeholder="Enter YouTube link" value="{{$contact->youtube_link}}">
                           @error('youtube_link')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-sm-12">
                        <div class="d-flex gap-2 justify-content-end">
                           <button class="btn btn-primary" type="submit">
                           Submit
                           </button>
                        </div>
                     </div>
                  </div>
                  <!-- Row ends -->
               </form>
            </div>
         </div>
      </div>
   </div>
   <!-- Row ends -->
</div>
<!-- App body ends -->
@endsection
