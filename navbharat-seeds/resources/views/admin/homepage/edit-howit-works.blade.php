@extends('admin.layout.main')
@section('title') Edit How it works  @endsection
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
               <form action="{{route('how-we-do.update',$howwedo->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <!-- Row starts -->
                  <div class="row gx-3">
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">{{$howwedo->title_01}} <span class="text-danger">*</span> </label>
                           <input type="text" class="form-control "   name="title_01" placeholder="Enter {{$howwedo->title_01}} " value="{{$howwedo->title_01}}">
                           @error('title_01')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">{{$howwedo->title_01}} Description <span class="text-danger">*</span> </label>
                           <textarea type="text" class="form-control ckeditor"   name="description_01" placeholder="Enter {{$howwedo->description_01}} " >{{$howwedo->description_01}}</textarea>
                           @error('description_01')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">{{$howwedo->title_02}} <span class="text-danger">*</span> </label>
                           <input type="text" class="form-control "   name="title_02" placeholder="Enter {{$howwedo->title_02}} " value="{{$howwedo->title_02}}">
                           @error('title_02')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">{{$howwedo->title_02}} Description <span class="text-danger">*</span> </label>
                           <textarea type="text" class="form-control ckeditor"   name="description_02" placeholder="Enter {{$howwedo->description_02}} " >{{$howwedo->description_02}}</textarea>
                           @error('description_02')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">{{$howwedo->title_03}} <span class="text-danger">*</span> </label>
                           <input type="text" class="form-control "   name="title_03" placeholder="Enter {{$howwedo->title_03}} " value="{{$howwedo->title_03}}">
                           @error('title_03')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">{{$howwedo->title_03}} Description <span class="text-danger">*</span> </label>
                           <textarea type="text" class="form-control ckeditor"   name="description_03" placeholder="Enter {{$howwedo->description_03}} " >{{$howwedo->description_03}}</textarea>
                           @error('description_03')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">{{$howwedo->title_04}} <span class="text-danger">*</span> </label>
                           <input type="text" class="form-control"   name="title_04" placeholder="Enter {{$howwedo->title_04}} " value="{{$howwedo->title_04}}">
                           @error('title_04')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">{{$howwedo->title_04}} Description <span class="text-danger">*</span> </label>
                           <textarea type="text" class="form-control ckeditor"   name="description_04" placeholder="Enter {{$howwedo->description_04}} " >{{$howwedo->description_04}}</textarea>
                           @error('description_04')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">{{$howwedo->title_01}} Image </label>
                           <input type="file" id="fileInput1" class="form-control file-input" name="icon_01"  >
                           <span> ( Note:IMG TYPE:- JPEG,PNG,JPG,WEBP,SIZE:2MB )</span><br>
                          <span id="messagefileInput1" class="text-danger"></span>
                          <a target="_blank" href="{{asset('assets/dynamics/'.$howwedo->icon_01)}}">
                              <img src="{{asset('assets/dynamics/'.$howwedo->icon_01)}}" style="width: 120px;height:80px;"></a>
                           @error('icon_01')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">{{$howwedo->title_02}} Image </label>
                           <input type="file" id="fileInput1" class="form-control file-input" name="icon_02"  >
                           <span> ( Note:IMG TYPE:- JPEG,PNG,JPG,WEBP,SIZE:2MB)</span><br>
                          <span id="messagefileInput1" class="text-danger"></span>
                          <a target="_blank" href="{{asset('assets/dynamics/'.$howwedo->icon_02)}}">
                              <img src="{{asset('assets/dynamics/'.$howwedo->icon_02)}}" style="width: 120px;height:80px;"></a>
                           @error('icon_02')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">{{$howwedo->title_03}} Image </label>
                           <input type="file" id="fileInput1" class="form-control file-input" name="icon_03"  >
                           <span> ( Note:IMG TYPE:- JPEG,PNG,JPG,WEBP,SIZE:2MB)</span><br>
                          <span id="messagefileInput1" class="text-danger"></span>
                          <a target="_blank" href="{{asset('assets/dynamics/'.$howwedo->icon_03)}}">
                              <img src="{{asset('assets/dynamics/'.$howwedo->icon_03)}}" style="width: 120px;height:80px;"></a>
                           @error('icon_03')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">{{$howwedo->title_04}} Image </label>
                           <input type="file" id="fileInput1" class="form-control file-input" name="icon_04"  >
                           <span> ( Note:IMG TYPE:- JPEG,PNG,JPG,WEBP,SIZE:2MB )</span><br>
                          <span id="messagefileInput1" class="text-danger"></span>
                          <a target="_blank" href="{{asset('assets/dynamics/'.$howwedo->icon_04)}}">
                              <img src="{{asset('assets/dynamics/'.$howwedo->icon_04)}}" style="width: 120px;height:80px;"></a>
                           @error('icon_04')
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