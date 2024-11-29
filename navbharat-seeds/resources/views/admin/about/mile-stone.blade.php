@extends('admin.layout.main')
@section('title') Edit Mile Stone @endsection
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
               <form action="{{ route('mile-stones.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <!-- Row starts -->
                  <div class="row gx-3">
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="title"> Title <span class="text-danger">*</span></label>
                           <input type="text" class="form-control" name="title_01" placeholder="Enter title_01" value="{{ $about->title_01 }}">
                           @error('title_01')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="description"> Description <span class="text-danger">*</span></label>
                           <textarea class="form-control " name="descriotion_01" placeholder="Enter descriotion_01">{{ $about->descriotion_01 }}</textarea>
                           @error('descriotion_01')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="title"> Title <span class="text-danger">*</span></label>
                           <input type="text" class="form-control" name="title_02" placeholder="Enter title_02" value="{{ $about->title_02 }}">
                           @error('title_02')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="description_02"> Description 2 <span class="text-danger">*</span></label>
                           <textarea class="form-control " name="descriotion_02" placeholder="Enter description">{{ $about->descriotion_02 }}</textarea>
                           @error('descriotion_02')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="title"> Title <span class="text-danger">*</span></label>
                           <input type="text" class="form-control" name="title_03" placeholder="Enter title_03" value="{{ $about->title_03 }}">
                           @error('title_03')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="description_02"> Description 3 <span class="text-danger">*</span></label>
                           <textarea class="form-control " name="descriotion_03" placeholder="Enter description">{{ $about->descriotion_03 }}</textarea>
                           @error('descriotion_03')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="title"> Title <span class="text-danger">*</span></label>
                           <input type="text" class="form-control" name="title_04" placeholder="Enter title_02" value="{{ $about->title_04 }}">
                           @error('title_04')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="descriotion_04"> Description 4 <span class="text-danger">*</span></label>
                           <textarea class="form-control " name="descriotion_04" placeholder="Enter description">{{ $about->descriotion_04 }}</textarea>
                           @error('descriotion_04')
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
