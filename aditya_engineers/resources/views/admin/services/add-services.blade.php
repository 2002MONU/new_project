@extends('admin.layout.main')
@section('title') Add Services  @endsection
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
               <form action="{{route('services.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <!-- Row starts -->
                  <div class="row gx-3">
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Service Name <span class="text-danger">*</span> </label>
                           <input type="text" class="form-control"   name="service_name" placeholder="Enter title " value="{{old('service_name')}}"> 
                           @error('service_name')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Service Images <span class="text-danger">*</span></label>
                           <input type="file" id="fileInput2" class="form-control file-input" name="images[]"   multiple>
                           <span> ( Note:IMG TYPE:- JPEG,PNG,JPG,You can select multiple image)</span>
                           <span id="messagefileInput2" class="text-danger"></span>
                           @error('images.*')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                    </div>
                    <div class="col-xxl-6 col-lg-6 col-sm-12">
                     <div class="mb-3">
                        <label class="form-label" for="a2">Description1 <span class="text-danger">*</span> </label>
                        <textarea type="text" class="form-control ckeditor"   name="description1" placeholder="Enter title " >{{old('description1')}} </textarea>
                        @error('description1')
                        <div class="error text-danger">{{ $message }}</div>
                        @enderror 
                     </div>
                  </div>
                  <div class="col-xxl-6 col-lg-6 col-sm-12">
                     <div class="mb-3">
                        <label class="form-label" for="a2">Title <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control"   name="title" placeholder="Enter title " value="{{old('title')}}"> 
                        @error('title')
                        <div class="error text-danger">{{ $message }}</div>
                        @enderror 
                     </div>
                  </div>
                  <div class="col-xxl-6 col-lg-6 col-sm-12">
                     <div class="mb-3">
                        <label class="form-label" for="a2">Description2 <span class="text-danger">*</span> </label>
                        <textarea type="text" class="form-control ckeditor"   name="description2" placeholder="Enter title " >{{old('description2')}} </textarea>
                        @error('description2')
                        <div class="error text-danger">{{ $message }}</div>
                        @enderror 
                     </div>
                  </div>
                  <div class="col-xxl-6 col-lg-6 col-sm-12">
                     <div class="mb-3">
                        <label class="form-label" for="a2">Service Images 1 <span class="text-danger">*</span></label>
                        <input type="file" id="fileInput3" class="form-control file-input" name="image_01"   >
                        <span> ( Note:IMG TYPE:- JPEG,PNG,JPG,You can select multiple image)</span>
                        <span id="messagefileInput3" class="text-danger"></span>
                        @error('image_01')
                        <div class="error text-danger">{{ $message }}</div>
                        @enderror 
                     </div>
                 </div>
                 <div class="col-xxl-6 col-lg-6 col-sm-12">
                  <div class="mb-3">
                     <label class="form-label" for="a2">Service Images 2 <span class="text-danger">*</span></label>
                     <input type="file" id="fileInput4" class="form-control file-input" name="image_02"   >
                     <span> ( Note:IMG TYPE:- JPEG,PNG,JPG,You can select multiple image)</span>
                     <span id="messagefileInput4" class="text-danger"></span>
                     @error('image_02')
                     <div class="error text-danger">{{ $message }}</div>
                     @enderror 
                  </div>
              </div>
              <div class="col-xxl-6 col-lg-6 col-sm-12">
               <div class="mb-3">
                  <label class="form-label" for="a2">Document <span class="text-danger">*</span> </label>
                  <input type="file" class="form-control"   name="document" > 
                  @error('document')
                  <div class="error text-danger">{{ $message }}</div>
                  @enderror 
               </div>
            </div>
              <div class="col-xxl-6 col-lg-6 col-sm-12">
               <div class="mb-3">
                  <label class="form-label" for="a2">Description3 <span class="text-danger">*</span> </label>
                  <textarea type="text" class="form-control " rows="4"  name="description3" placeholder="Enter description3 " >{{old('description3')}} </textarea>
                  @error('description3')
                  <div class="error text-danger">{{ $message }}</div>
                  @enderror 
               </div>
            </div>
            <div class="col-xxl-6 col-lg-6 col-sm-12">
               <div class="mb-3">
                  <label class="form-label" for="a2">Description4 <span class="text-danger">*</span> </label>
                  <textarea type="text" class="form-control"  rows="4" name="description4" placeholder="Enter description4 " >{{old('description4')}} </textarea>
                  @error('description4')
                  <div class="error text-danger">{{ $message }}</div>
                  @enderror 
               </div>
            </div>
            <div class="col-xxl-6 col-lg-6 col-sm-12">
               <div class="mb-3">
                  <label class="form-label" for="a2">PDF <span class="text-danger">*</span> </label>
                  <input type="file" class="form-control"   name="pdf" > 
                  @error('pdf')
                  <div class="error text-danger">{{ $message }}</div>
                  @enderror 
               </div>
            </div>
            <div class="col-xxl-6 col-lg-6 col-sm-12">
               <div class="mb-3">
                  <label class="form-label" for="a2">Contact <span class="text-danger">*</span> </label>
                  <input type="text" class="form-control"   name="contact" placeholder="Enter contact " value="{{old('contact')}}"> 
                  @error('contact')
                  <div class="error text-danger">{{ $message }}</div>
                  @enderror 
               </div>
            </div>
            <div class="col-xxl-6 col-lg-6 col-sm-12">
               <div class="mb-3">
                  <label class="form-label" for="a2">Brocher_title <span class="text-danger">*</span> </label>
                  <input type="text" class="form-control"   name="brocher_title" placeholder="Enter brocher_title " value="{{old('brocher_title')}}"> 
                  @error('brocher_title')
                  <div class="error text-danger">{{ $message }}</div>
                  @enderror 
               </div>
            </div>
            
                    <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Priority </label>
                           <input type="number" class="form-control"  name="priority" placeholder="Enter priority " value="{{old('priority')}}">
                           @error('priority')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                    </div>
                    <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Status <span class="text-danger">*</span></label>
                           <select name="status" id="" class="form-control">
                              <option default >Status</option>
                              <option value="1">Active</option>
                              <option value="0">Inactive</option>
                           </select>
                           @error('status')
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