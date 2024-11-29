@extends('admin.layout.main')
@section('title')
Edit Services
@endsection
@section('maindashboard')
<!-- App container starts -->
<div class="app-hero-header d-flex align-items-center">
   <!-- Breadcrumb starts -->
   <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <i class="ri-home-8-line lh-1 pe-3 me-3 border-end"></i>
         <a href="{{ route('admin.dashboard') }}">Home</a>
      </li>
      <li class="breadcrumb-item text-primary" aria-current="page">
         <a href="javascript:history.back()">Back</a>
      </li>
      <li class="breadcrumb-item text-primary" aria-current="page">
         @yield('title')
      </li>
   </ol>
   <!-- Breadcrumb ends -->
</div>
<div class="app-body">
<!-- Row starts -->
<div class="row gx-3">
   <div class="col-sm-12">
      <div class="card">
         <div class="card-header">
            <h5 class="card-title"> @yield('title') </h5>
         </div>
         <div class="card-body">
            <form action="{{ route('services.update', $service->id) }}" method="POST"
               enctype="multipart/form-data">
               @csrf
               @method('PUT')
               <!-- Row starts -->
               <div class="row gx-3">
                  <!-- Service Name -->
                  <div class="col-xxl-6 col-lg-6 col-sm-12">
                     <div class="mb-3">
                        <label class="form-label">Service Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="service_name"
                           placeholder="Enter service name"
                           value="{{ old('service_name', $service->title) }}">
                        @error('service_name')
                        <div class="error text-danger">{{ $message }}</div>
                        @enderror
                     </div>
                  </div>
                  <!-- Service Images -->
                  <div class="col-xxl-6 col-lg-6 col-sm-12">
                     <div class="mb-3">
                        <label class="form-label">Service Images <span class="text-danger">*</span></label>
                        <input type="file" class="form-control file-input" name="images[]" multiple>
                        <span>(Note: Allowed formats - JPEG, PNG, JPG)</span>
                        <div class="mt-2">
                           @if ($service->images)
                           @foreach (json_decode($service->images) as $image)
                           <img src="{{ asset('assets/dynamics/' . $image) }}" alt="Service Image"
                              class="img-thumbnail" width="100">
                           @endforeach
                           @endif
                        </div>
                        @error('images.*')
                        <div class="error text-danger">{{ $message }}</div>
                        @enderror
                     </div>
                  </div>
                  <!-- Description1 -->
                  <div class="col-xxl-6 col-lg-6 col-sm-12">
                     <div class="mb-3">
                        <label class="form-label">Description 1 <span class="text-danger">*</span></label>
                        <textarea class="form-control ckeditor" name="description1">{{ old('description1', $service->description1) }}</textarea>
                        @error('description1')
                        <div class="error text-danger">{{ $message }}</div>
                        @enderror
                     </div>
                  </div>
                  <!-- Title -->
                  <div class="col-xxl-6 col-lg-6 col-sm-12">
                     <div class="mb-3">
                        <label class="form-label">Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="title" placeholder="Enter title"
                           value="{{ old('title', $service->title2) }}">
                        @error('title')
                        <div class="error text-danger">{{ $message }}</div>
                        @enderror
                     </div>
                  </div>
                  
                     <!-- Description2 -->
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label">Description 2 <span
                              class="text-danger">*</span></label>
                           <textarea class="form-control ckeditor" name="description2">{{ old('description2', $service->description2) }}</textarea>
                           @error('description2')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <!-- Service Image 1 -->
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label">Service Image 1 <span
                              class="text-danger">*</span></label>
                           <input type="file" class="form-control" name="image_01">
                           @if ($service->image_01)
                           <img src="{{ asset('assets/dynamics/' . $service->image_01) }}"
                              alt="Image 1" class="img-thumbnail" width="100">
                           @endif
                           @error('image_01')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <!-- Service Image 2 -->
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label">Service Image 2 <span
                              class="text-danger">*</span></label>
                           <input type="file" class="form-control" name="image_02">
                           @if ($service->image_02)
                           <img src="{{ asset('assets/dynamics/' . $service->image_02) }}"
                              alt="Image 2" class="img-thumbnail" width="100">
                           @endif
                           @error('image_02')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Description3 <span
                              class="text-danger">*</span> </label>
                           <textarea type="text" class="form-control " rows="4" name="description3"
                              placeholder="Enter description3 ">{{ $service->description3 }} </textarea>
                           @error('description3')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Description4 <span
                              class="text-danger">*</span> </label>
                           <textarea type="text" class="form-control" rows="4" name="description4" placeholder="Enter description4 ">{{ $service->description4 }} </textarea>
                           @error('description4')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     
                   
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Brocher_title <span
                              class="text-danger">*</span> </label>
                           <input type="text" class="form-control" name="brocher_title"
                              placeholder="Enter brocher_title " value="{{ $service->brocher_title }}">
                           @error('brocher_title')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <!-- Document -->
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label">Document <span class="text-danger">*</span></label>
                           <input type="file" class="form-control" name="document">
                           @if ($service->document)
                           <a href="{{ asset('assets/dynamics/' . $service->document) }}"
                              target="_blank">View Document</a>
                           @endif
                           @error('document')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <!-- PDF -->
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label">PDF <span class="text-danger">*</span></label>
                           <input type="file" class="form-control" name="pdf">
                           @if ($service->pdf)
                           <a href="{{ asset('assets/dynamics/' . $service->pdf) }}"
                              target="_blank">View PDF</a>
                           @endif
                           @error('pdf')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <!-- Contact -->
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label">Contact <span class="text-danger">*</span></label>
                           <input type="text" class="form-control" name="contact"
                              value="{{ old('contact', $service->contact) }}">
                           @error('contact')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <!-- Priority -->
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label">Priority</label>
                           <input type="number" class="form-control" name="priority"
                              value="{{ old('priority', $service->priority) }}">
                           @error('priority')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <!-- Status -->
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label">Status <span class="text-danger">*</span></label>
                           <select name="status" class="form-control">
                           <option value="1" {{ $service->status == 1 ? 'selected' : '' }}>
                           Active</option>
                           <option value="0" {{ $service->status == 0 ? 'selected' : '' }}>
                           Inactive</option>
                           </select>
                           @error('status')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror
                        </div>
                     </div>
                     <div class="col-sm-12">
                        <div class="d-flex gap-2 justify-content-end">
                           <button class="btn btn-primary" type="submit">Update</button>
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
@endsection