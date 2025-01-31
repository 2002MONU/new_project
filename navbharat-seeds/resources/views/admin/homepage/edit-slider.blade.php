@extends('admin.layout.main')
@section('title') EDit Slider  @endsection
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
   
   <!-- Row starts -->
   <div class="row gx-3">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <h5 class="card-title"> @yield('title') </h5>
            </div>
            <div class="card-body">
               <form action="{{route('sliders.update',$slider->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <!-- Row starts -->
                  <div class="row gx-3">
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Title <span class="text-danger">*</span> </label>
                           <input type="text" class="form-control "   name="title" placeholder="Enter title " value="{{$slider->title}}"> 
                           @error('title')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Heading <span class="text-danger">*</span> </label>
                           <input type="text" class="form-control "   name="heading" placeholder="Enter heading " value="{{$slider->heading}}"> 
                           @error('heading')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Round Text  <span class="text-danger">*</span> </label>
                           <input type="text" class="form-control "   name="round_text" placeholder="Enter round_text " value="{{$slider->round_text}}"> 
                           @error('round_text')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     
                     
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2"> Image </label>
                           <input type="file" id="fileInput1" class="form-control file-input" name="banner_image"  >
                           <span> ( Note:IMG TYPE:- JPEG,PNG,JPG,WEBP,SIZE:2MB)</span><br>
                          <span id="messagefileInput1" class="text-danger"></span>
                          <a target="_blank" href="{{asset('assets/dynamics/'.$slider->banner_image)}}">
                              <img src="{{asset('assets/dynamics/'.$slider->banner_image)}}" style="width: 120px;height:80px;"></a>
                           @error('banner_image')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Middle Icon Image </label>
                           <input type="file" id="fileInput2" class="form-control file-input" name="middle_icon"  >
                           <span> ( Note:IMG TYPE:- JPEG,PNG,JPG,WEBP,SIZE:2MB )</span><br>
                          <span id="messagefileInput2" class="text-danger"></span>
                          <a target="_blank" href="{{asset('assets/dynamics/'.$slider->middle_icon)}}">
                              <img src="{{asset('assets/dynamics/'.$slider->middle_icon)}}" style="width: 120px;height:80px;"></a>
                           @error('middle_icon')
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