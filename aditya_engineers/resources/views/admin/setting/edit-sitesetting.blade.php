@extends('admin.layout.main')
@section('title') Edit Site Settings  @endsection
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
               <h5 class="card-title">@yield('title')</h5>
            </div>
            <div class="card-body">
               <form action="{{route('site-settings.update',['site_setting' => $site_setting->id ])}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <!-- Row starts -->
                  <div class="row gx-3">
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a1">Site Name <span class="text-danger">*</span></label>
                           <input type="text" class="form-control" name="site_name" placeholder="Enter Site name" value="{{$site_setting->site_name}}">
                           @error('site_name')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror  
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a1">Footer Title <span class="text-danger">*</span></label>
                           <input type="text" class="form-control" name="footer_title" placeholder="Enter footer_title" value="{{$site_setting->footer_title}}">
                           @error('footer_title')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror  
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a1">Client_heading  <span class="text-danger">*</span></label>
                           <input type="text" class="form-control" name="client_heading" placeholder="Enter client_heading" value="{{$site_setting->client_heading}}">
                           @error('client_heading')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror  
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a1">Service_box_title  <span class="text-danger">*</span></label>
                           <input type="text" class="form-control" name="service_box_title" placeholder="Enter service_box_title" value="{{$site_setting->service_box_title}}">
                           @error('service_box_title')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror  
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a1">Gallery_title  <span class="text-danger">*</span></label>
                           <input type="text" class="form-control" name="gallery_title" placeholder="Enter gallery_title" value="{{$site_setting->gallery_title}}">
                           @error('gallery_title')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror  
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a1">Contact_heading  <span class="text-danger">*</span></label>
                           <input type="text" class="form-control" name="contact_heading" placeholder="Enter contact_heading" value="{{$site_setting->contact_heading}}">
                           @error('contact_heading')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror  
                        </div>
                     </div>
                     
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a1">Contact_title  <span class="text-danger">*</span></label>
                           <input type="text" class="form-control" name="contact_title" placeholder="Enter contact_title" value="{{$site_setting->contact_title}}">
                           @error('contact_title')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror  
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a1">Testimonial_title  <span class="text-danger">*</span></label>
                           <input type="text" class="form-control" name="testimonial_title" placeholder="Enter testimonial_title" value="{{$site_setting->testimonial_title }}">
                           @error('testimonial_title')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror  
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a1">Service_offering_title  <span class="text-danger">*</span></label>
                           <textarea type="text" class="form-control" name="service_offering_title" placeholder="Enter service_offering_title" >{{$site_setting->service_offering_title}}</textarea>
                           @error('service_offering_title')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror  
                        </div>
                     </div>
                     
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Header Logo <span >( IMG-TYPE: JPG,PNG,JPEG,WEP, SIZE:2MB )</span></label>
                           <input type="file" class="form-control file-input"  id="fileInput2" name="header_logo" >
                          <a target="_blank" href="{{asset('assets/dynamics/'.$site_setting->header_logo)}}">
                           <img src="{{asset('assets/dynamics/'.$site_setting->header_logo)}}" style="width:120px;height:80px;" ></a>
                          <span id="messagefileInput2" class="text-danger"></span>
                          @error('header_logo')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                  
                   <div class="col-xxl-6 col-lg-6 col-sm-12">
                     <div class="mb-3">
                        <label class="form-label" for="a2">Favicon  <span >( IMG-TYPE: JPG,PNG,JPEG, SIZE:2MB )</span></label>
                        <input type="file" class="form-control file-input"  id="fileInput3" name="favicon" >
                        <a target="_blank" href="{{asset('assets/dynamics/'.$site_setting->favicon)}}">
                           <img src="{{asset('assets/dynamics/'.$site_setting->favicon)}}" style="width:120px;height:80px;"></a>
                       <span id="messagefileInput3" class="text-danger"></span>
                        @error('favicon')
                        <div class="error text-danger">{{ $message }}</div>
                        @enderror
                     </div>
                  </div>
                   <div class="col-xxl-6 col-lg-6 col-sm-12">
                     <div class="mb-3">
                        <label class="form-label" for="a2">Footer Logo  <span >( IMG-TYPE: JPG,PNG,JPEG, SIZE:2MB )</span></label>
                        <input type="file" class="form-control file-input"  id="fileInput3" name="footer_logo" >
                        <a target="_blank" href="{{asset('assets/dynamics/'.$site_setting->footer_logo)}}">
                           <img src="{{asset('assets/dynamics/'.$site_setting->footer_logo)}}" style="width:120px;height:80px;"></a>
                       <span id="messagefileInput3" class="text-danger"></span>
                        @error('footer_logo')
                        <div class="error text-danger">{{ $message }}</div>
                        @enderror
                     </div>
                  </div>
                   <div class="col-xxl-6 col-lg-6 col-sm-12">
                     <div class="mb-3">
                        <label class="form-label" for="a2">About_banner  <span >( IMG-TYPE: JPG,PNG,JPEG, SIZE:2MB )</span></label>
                        <input type="file" class="form-control file-input"  id="fileInput9" name="about_banner" >
                        <a target="_blank" href="{{asset('assets/dynamics/'.$site_setting->about_banner)}}">
                           <img src="{{asset('assets/dynamics/'.$site_setting->about_banner)}}" style="width:120px;height:80px;"></a>
                       <span id="messagefileInput9" class="text-danger"></span>
                        @error('about_banner')
                        <div class="error text-danger">{{ $message }}</div>
                        @enderror
                     </div>
                  </div>
                   <div class="col-xxl-6 col-lg-6 col-sm-12">
                     <div class="mb-3">
                        <label class="form-label" for="a2">Gallery_banner  background  <span >( IMG-TYPE: JPG,PNG,JPEG, SIZE:2MB )</span></label>
                        <input type="file" class="form-control file-input"  id="fileInput10" name="gallery_banner" >
                        <a target="_blank" href="{{asset('assets/dynamics/'.$site_setting->gallery_banner)}}">
                           <img src="{{asset('assets/dynamics/'.$site_setting->gallery_banner)}}" style="width:120px;height:80px;"></a>
                       <span id="messagefileInput10" class="text-danger"></span>
                        @error('gallery_banner')
                        <div class="error text-danger">{{ $message }}</div>
                        @enderror
                     </div>
                  </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Service_banner <span>( IMG-TYPE: JPG,PNG,JPEG, SIZE:2MB )</span></label>
                           <input type="file" class="form-control file-input"  id="fileInput4" name="service_banner" >
                          <a target="_blank" href="{{asset('assets/dynamics/'.$site_setting->service_banner)}}">
                           <img src="{{asset('assets/dynamics/'.$site_setting->service_banner)}}" style="width:120px;height:80px;"></a>
                         <span id="messagefileInput4" class="text-danger"></span>
                          @error('service_banner')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Contact_banner<span >( IMG-TYPE: JPG,PNG,JPEG,WEBP, SIZE:2MB )</span></label>
                           <input type="file" class="form-control file-input"  id="fileInput5" name="contact_banner" >
                           <a target="_blank" href="{{asset('assets/dynamics/'.$site_setting->contact_banner)}}">
                              <img src="{{asset('assets/dynamics/'.$site_setting->contact_banner)}}" style="width:120px;height:80px;"></a>
                          <span id="messagefileInput5" class="text-danger"></span>
                           @error('contact_banner')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Client_banner<span >( IMG-TYPE: JPG,PNG,JPEG,WEBP, SIZE:2MB )</span></label>
                           <input type="file" class="form-control file-input"  id="fileInput6" name="client_banner" >
                           <a target="_blank" href="{{asset('assets/dynamics/'.$site_setting->client_banner)}}">
                              <img src="{{asset('assets/dynamics/'.$site_setting->client_banner)}}" style="width:120px;height:80px;"></a>
                          <span id="messagefileInput6" class="text-danger"></span>
                           @error('client_banner')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
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