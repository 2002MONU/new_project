@extends('admin.layout.main')
@section('title')  Edit Blog  @endsection
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
               <form action="{{route('blogs.update',$blog->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <!-- Row starts -->
                  <div class="row gx-3">
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Title <span class="text-danger">*</span> </label>
                           <input type="text" class="form-control "   name="title" placeholder="Enter title " value="{{$blog->title}}"> 
                           @error('title')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Post By <span class="text-danger">*</span> </label>
                           <input type="text" class="form-control "   name="postBy" placeholder="Enter post by " value="{{$blog->postBy}}"> 
                           @error('postBy')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Main Image <span class="text-danger">*</span></label>
                           <input type="file" id="fileInput1" class="form-control file-input" name="main_image"  >
                           <a target="_blank" href="{{asset('assets/dynamics/'.$blog->main_image)}}" target="_blank">
                              <img src="{{asset('assets/dynamics/'.$blog->main_image)}}" style="width:80px;height:80px;"></a>
                           <span> ( Note:IMG TYPE:-JPEG,PNG,JPG,WEBP,SIZE:2MB Dimension:- 1200X600 PX)</span>
                           <span id="messagefileInput1" class="text-danger"></span>
                           @error('main_image')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Thought User <span class="text-danger">*</span> </label>
                           <input type="text" class="form-control "   name="thought_user" placeholder="Enter thought_user " value="{{$blog->thought_user}}"> 
                           @error('thought_user')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Thought Title<span class="text-danger">*</span> </label>
                           <textarea type="text" class="form-control "   name="thought_title" placeholder="Enter thought_title " > {{$blog->thought_title}}</textarea>
                           @error('thought_title')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                   
                     
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Priority <span class="text-danger">*</span></label>
                           <input type="number" class="form-control"  name="priority" placeholder="Enter priority " value="{{$blog->priority}}">
                           @error('priority')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Status <span class="text-danger">*</span></label>
                           <select name="status" id="" class="form-control">
                              <option value="" >Status</option>
                              <option value="1" {{$blog->status == 1 ? 'selected' : ''}}>Active</option>
                              <option value="0" {{$blog->status == 0 ? 'selected' : ''}}>Inactive</option>
                           </select>
                           @error('status')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                    
                     <div class="col-xxl-12 col-lg-12 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Blog Description <span class="text-danger">*</span> </label>
                           <textarea type="text" class="form-control ckeditor"   name="main_description" placeholder="Enter main_description " value=""> {{$blog->main_description}}</textarea>
                           @error('main_description')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                      <div class="col-xxl-12 col-lg-12 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Description 2<span class="text-danger">*</span> </label>
                           <textarea type="text" class="form-control ckeditor"   name="description_02" placeholder="Enter description_02 " value=""> {{$blog->description_02}}</textarea>
                           @error('description_02')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2"> Image 1<span class="text-danger">*</span></label>
                           <input type="file" id="fileInput2" class="form-control file-input" name="image_01"  >
                           <span> ( Note:IMG TYPE:-JPEG,PNG,JPG,WEBP,SIZE:2MB )</span>
                           <a target="_blank" href="{{asset('assets/dynamics/'.$blog->image_01)}}" target="_blank">
                              <img src="{{asset('assets/dynamics/'.$blog->image_01)}}" style="width:80px;height:80px;"></a>
                           <span id="messagefileInput2" class="text-danger"></span>
                           @error('image_01')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2"> Image 2<span class="text-danger">*</span></label>
                           <input type="file" id="fileInput3" class="form-control file-input" name="image_02"  >
                           <span> ( Note:IMG TYPE:-JPEG,PNG,JPG,WEBP,SIZE:2MB )</span>
                           <a target="_blank" href="{{asset('assets/dynamics/'.$blog->image_02)}}" target="_blank">
                              <img src="{{asset('assets/dynamics/'.$blog->image_02)}}" style="width:80px;height:80px;"></a>
                           <span id="messagefileInput3" class="text-danger"></span>
                           @error('image_02')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-6 col-lg-6 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Title 2<span class="text-danger">*</span> </label>
                           <input type="text" class="form-control "   name="title_01" placeholder="Enter title_01 " value="{{$blog->title_01}}"> 
                           @error('title_01')
                           <div class="error text-danger">{{ $message }}</div>
                           @enderror 
                        </div>
                     </div>
                     <div class="col-xxl-12 col-lg-12 col-sm-12">
                        <div class="mb-3">
                           <label class="form-label" for="a2">Description 3<span class="text-danger">*</span> </label>
                           <textarea type="text" class="form-control ckeditor"   name="description_03" placeholder="Enter description_03 " value=""> {{$blog->description_03}}</textarea>
                           @error('description_03')
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