@extends('admin.layout.main')
@section('title') Edit About  @endsection
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
               <form action="{{route('notable-achievements.update',$about->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <!-- Row starts -->
                  <div class="row gx-3">
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Title 1<span class="text-danger">*</span> </label>
                           <input type="text" class="form-control "   name="title_01" placeholder="Enter title " value="{{$about->title_01}}">
                           @error('title_01')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Description 1 <span class="text-danger">*</span> </label>
                           <textarea type="text" class="form-control "  rows="4"  name="description_01" placeholder="Enter description " >{{$about->description_01}}</textarea>
                           @error('description_01')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Title 2<span class="text-danger">*</span> </label>
                           <input type="text" class="form-control "   name="title_02" placeholder="Enter title " value="{{$about->title_02}}">
                           @error('title_02')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Description 2<span class="text-danger">*</span> </label>
                           <textarea type="text" class="form-control "  rows="4"  name="description_02" placeholder="Enter description " >{{$about->description_02}}</textarea>
                           @error('description_02')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Title 3<span class="text-danger">*</span> </label>
                           <input type="text" class="form-control "   name="title_03" placeholder="Enter title " value="{{$about->title_03}}">
                           @error('title_03')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Description 3<span class="text-danger">*</span> </label>
                           <textarea type="text" class="form-control "  rows="4"  name="description_03" placeholder="Enter description " >{{$about->description_03}}</textarea>
                           @error('description_03')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Title 4<span class="text-danger">*</span> </label>
                           <input type="text" class="form-control "   name="title_04" placeholder="Enter title " value="{{$about->title_04}}">
                           @error('title_04')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Description 4 <span class="text-danger">*</span> </label>
                           <textarea type="text" class="form-control "  rows="4"  name="description_04" placeholder="Enter description " >{{$about->description_04}}</textarea>
                           @error('description_04')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Title 5 <span class="text-danger">*</span> </label>
                           <input type="text" class="form-control "   name="title_05" placeholder="Enter title " value="{{$about->title_05}}">
                           @error('title_05')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Description 5 <span class="text-danger">*</span> </label>
                           <textarea type="text" class="form-control "  rows="4"  name="description_05" placeholder="Enter description " >{{$about->description_05}}</textarea>
                           @error('description_05')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                    <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2"> Image 1 </label>
                           <input type="file" id="fileInput1" class="form-control file-input" name="image_01"  >
                           <span> ( Note:IMG TYPE:- JPEG,PNG,JPG,WEBP,SIZE:2MB )</span><br>
                           <a target="_blank" href="{{asset('assets/dynamics/'.$about->image_01)}}">
                              <img src="{{asset('assets/dynamics/'.$about->image_01)}}" style="width: 100px;height:120px;"></a>
                           <span id="messagefileInput1" class="text-danger"></span>
                           @error('image_01')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                    <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2"> image_02 </label>
                           <input type="file" id="fileInput2" class="form-control file-input" name="image_02"  >
                           <span> ( Note:IMG TYPE:- JPEG,PNG,JPG,WEBP,SIZE:2MB )</span><br>
                           <a target="_blank" href="{{asset('assets/dynamics/'.$about->image_02)}}">
                              <img src="{{asset('assets/dynamics/'.$about->image_02)}}" style="width: 100px;height:120px;"></a>
                           <span id="messagefileInput2" class="text-danger"></span>
                           @error('image_02')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                    <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2"> Image </label>
                           <input type="file" id="fileInput3" class="form-control file-input" name="image_03"  >
                           <span> ( Note:IMG TYPE:- JPEG,PNG,JPG,WEBP,SIZE:2MB )</span><br>
                           <a target="_blank" href="{{asset('assets/dynamics/'.$about->image_03)}}">
                              <img src="{{asset('assets/dynamics/'.$about->image_03)}}" style="width: 100px;height:120px;"></a>
                           <span id="messagefileInput3" class="text-danger"></span>
                           @error('image_03')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                    <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2"> image_04 </label>
                           <input type="file" id="fileInput4" class="form-control file-input" name="image_04"  >
                           <span> ( Note:IMG TYPE:- JPEG,PNG,JPG,WEBP,SIZE:2MB )</span><br>
                           <a target="_blank" href="{{asset('assets/dynamics/'.$about->image_04)}}">
                              <img src="{{asset('assets/dynamics/'.$about->image_04)}}" style="width: 100px;height:120px;"></a>
                           <span id="messagefileInput4" class="text-danger"></span>
                           @error('image_04')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                    <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2"> Image </label>
                           <input type="file" id="fileInput5" class="form-control file-input" name="image_05"  >
                           <span> ( Note:IMG TYPE:- JPEG,PNG,JPG,WEBP,SIZE:2MB )</span><br>
                           <a target="_blank" href="{{asset('assets/dynamics/'.$about->image_05)}}">
                              <img src="{{asset('assets/dynamics/'.$about->image_05)}}" style="width: 100px;height:120px;"></a>
                           <span id="messagefileInput5" class="text-danger"></span>
                           @error('image_05')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Title <span class="text-danger">*</span> </label>
                           <input type="text" class="form-control "   name="title" placeholder="Enter title " value="{{$about->title}}">
                           @error('title')
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