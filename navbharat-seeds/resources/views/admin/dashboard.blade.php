@extends('admin.layout.main') 
@section('title') Admin  @endsection
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
         Dashboard
      </li>
   </ol>
   <!-- Breadcrumb ends -->
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
   @if(session('error'))
   <div class="alert bg-danger text-white alert-dismissible fade show" role="alert">
      {{session('error')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
   @endif
   <!-- Row starts -->
   <div class="row gx-3">
      <div class="col-xl-3 col-sm-6 col-12">
         <a href="{{route('cottons.index')}}">
            <div class="card mb-3">
               <div class="card-body">
                  <div class="d-flex align-items-center">
                     <div class="p-2 border border-success rounded-circle me-3">
                        <div class="icon-box md bg-success-subtle rounded-5">
                           <i class="ri-home-4-fill fs-4 text-success"></i>
                        </div>
                     </div>
                     <div class="d-flex flex-column">
                        <h2 class="lh-1">{{$cotton}}</h2>
                        <p class="m-0">Cotton Product </p>
                     </div>
                  </div>
               </div>
            </div>
         </a>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
         <a href="{{route('field-crops.index')}}">
            <div class="card mb-3">
               <div class="card-body">
                  <div class="d-flex align-items-center">
                     <div class="p-2 border border-primary rounded-circle me-3">
                        <div class="icon-box md bg-primary-subtle rounded-5">
                           
                           <i class="ri-building-line fs-4 text-primary"></i>
                        </div>
                     </div>
                     <div class="d-flex flex-column">
                        <h2 class="lh-1">{{$fieldcrop}}</h2>
                        <p class="m-0">Field Crops</p>
                     </div>
                  </div>
               </div>
            </div>
         </a>
      </div>
      {{-- <div class="col-xl-3 col-sm-6 col-12">
         <a href="">
            <div class="card mb-3">
               <div class="card-body">
                  <div class="d-flex align-items-center">
                     <div class="p-2 border border-danger rounded-circle me-3">
                        <div class="icon-box md bg-danger-subtle rounded-5">
                           <i class="ri-user-heart-fill  fs-4 text-info"></i>
                        </div>
                     </div>
                     <div class="d-flex flex-column">
                        <h2 class="lh-1"></h2>
                        <p class="m-0">Blog</p>
                     </div>
                  </div>
               </div>
            </div>
         </a>
      </div> --}}
       <div class="col-xl-3 col-sm-6 col-12">
         <a href="{{route('vegetable-crops.index')}}">
            <div class="card mb-3">
               <div class="card-body">
                  <div class="d-flex align-items-center">
                     <div class="p-2 border border-danger rounded-circle me-3">
                        <div class="icon-box md bg-danger-subtle rounded-5">
                           
                           <i class="ri-mail-line fs-4 text-warning"></i>
                        </div>
                     </div>
                     <div class="d-flex flex-column">
                        <h2 class="lh-1">{{$vegetableCrop}}</h2>
                        <p class="m-0">Vegetable Cropes </p>
                     </div>
                  </div>
               </div>
            </div>
         </a>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
         <a href="{{route('admin.enquiry-details')}}">
            <div class="card mb-3">
               <div class="card-body">
                  <div class="d-flex align-items-center">
                     <div class="p-2 border border-secondary rounded-circle me-3">
                        <div class="icon-box md bg-danger-subtle rounded-5">
                           
                           <i class="ri-global-line fs-4 text-warning"></i>
                        </div>
                     </div>
                     <div class="d-flex flex-column">
                        <h2 class="lh-1">{{$enquiry}}</h2>
                        <p class="m-0">Enquiry  Message </p>
                     </div>
                  </div>
               </div>
            </div>
         </a>
      </div>
      {{-- <div class="col-xl-3 col-sm-6 col-12">
         <a href="">
            <div class="card mb-3">
               <div class="card-body">
                  <div class="d-flex align-items-center">
                     <div class="p-2 border border-secondary rounded-circle me-3">
                        <div class="icon-box md bg-danger-subtle rounded-5">
                           
                           <i class="ri-shut-down-fill fs-4 text-warning"></i>
                        </div>
                     </div>
                     <div class="d-flex flex-column">
                        <h2 class="lh-1"></h2>
                        <p class="m-0">Contact Enquiry  </p>
                     </div>
                  </div>
               </div>
            </div>
         </a>
      </div> --}}
   </div>
   <!-- Row ends -->
</div>
<!-- App body ends -->
@endsection