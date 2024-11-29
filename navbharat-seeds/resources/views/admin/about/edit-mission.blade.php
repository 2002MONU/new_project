@extends('admin.layout.main')
@section('title') Edit Vision & Mission @endsection
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
         <a href="javascript:history.back()">Back</a>
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
      {{ session('success') }}
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
               <form action="{{ route('missions.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <!-- Row starts -->
                  <div class="row gx-3">
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="title">Vision Title <span class="text-danger">*</span></label>
                           <input type="text" class="form-control" name="title_01" placeholder="Enter title_01" value="{{ $about->title_01 }}">
                           @error('title_01')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="title">Mission Title <span class="text-danger">*</span></label>
                           <input type="text" class="form-control" name="title_02" placeholder="Enter title_02" value="{{ $about->title_02 }}">
                           @error('title_02')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="images">Vision Image</label>
                           <input type="file" id="fileInput1" class="form-control file-input" name="image_01" >
                           <span>(Note: IMG TYPE: JPEG, PNG, JPG, WEBP, SIZE: 2MB)</span><br>
                           <a href="{{ asset('assets/dynamics/' . $about->image_01) }}" target="_blank">
                               <img src="{{ asset('assets/dynamics/' . $about->image_01) }}" style="width:80px; height:80px; margin-right: 5px;">
                           </a>
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="images">Mission Image</label>
                           <input type="file" id="fileInput1" class="form-control file-input" name="image_02" >
                           <span>(Note: IMG TYPE: JPEG, PNG, JPG, WEBP, SIZE: 2MB)</span><br>
                           <a href="{{ asset('assets/dynamics/' . $about->image_02) }}" target="_blank">
                               <img src="{{ asset('assets/dynamics/' . $about->image_02) }}" style="width:80px; height:80px; margin-right: 5px;">
                           </a>
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="description">Vision Description <span class="text-danger">*</span></label>
                           <textarea class="form-control ckeditor" name="descriotion_01" placeholder="Enter descriotion_01">{{ $about->descriotion_01 }}</textarea>
                           @error('descriotion_01')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="description_02">Mission Description 2 <span class="text-danger">*</span></label>
                           <textarea class="form-control ckeditor" name="descriotion_02" placeholder="Enter description">{{ $about->descriotion_02 }}</textarea>
                           @error('description_02')
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
