@extends('admin.layout.main')
@section('title')
    Add Vegetables Crop
@endsection
@section('maindashboard')
    <!-- App container starts -->
    <!-- App hero header starts -->
    <div class="app-hero-header d-flex align-items-center">
        <!-- Breadcrumb starts -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <i class="ri-home-8-line lh-1 pe-3 me-3 border-end"></i>
                <a href="{{ route('admin.dashboard') }}">Home</a>
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
                        <form action="{{ route('vegetable-crop-categories.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Row starts -->
                            <div class="row gx-3">
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2">Vegetable Crop Category <span
                                                class="text-danger">*</span> </label>
                                       <select name="vegetable_id" class="form-control">
                                        @foreach ($fieldCrop as $crop)
                                        <option value="{{$crop->id}}">{{$crop->product_name}}</option>
                                        @endforeach
                                       </select>
                                        @error('vegetable_id')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class=" col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2"> Name <span
                                                class="text-danger">*</span> </label>
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Enter title " value="{{ old('name') }}">
                                        @error('name')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2"> Images <span
                                                class="text-danger">*</span></label>
                                        <input type="file" id="fileInput2" class="form-control file-input"
                                            name="product_image" >
                                        <span> ( Note:IMG TYPE:- JPEG,PNG,JPG)</span>
                                        <span id="messagefileInput2" class="text-danger"></span>
                                        @error('product_image')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2">Description <span
                                                class="text-danger">*</span> </label>
                                        <textarea type="text" class="form-control ckeditor" name="description" placeholder="Enter title ">{{ old('descritption') }} </textarea>
                                        @error('description')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2">Brocher Images 1 <span
                                                class="text-danger">*</span></label>
                                        <input type="file" id="fileInput3" class="form-control file-input"
                                            name="brocher_image_01">
                                        <span> ( Note:IMG TYPE:- JPEG,PNG,JPG,)</span>
                                        <span id="messagefileInput3" class="text-danger"></span>
                                        @error('brocher_image_01')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2">Brocher Images 2 <span
                                                class="text-danger">*</span></label>
                                        <input type="file" id="fileInput4" class="form-control file-input"
                                            name="brocher_image_02">
                                        <span> ( Note:IMG TYPE:- JPEG,PNG,JPG,)</span>
                                        <span id="messagefileInput4" class="text-danger"></span>
                                        @error('brocher_image_02')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2">Brocher PDF 1 <span
                                                class="text-danger">*</span> </label>
                                        <input type="file" class="form-control" name="brocher_pdf">
                                        @error('brocher_pdf')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2">Brocher PDF 2 <span
                                                class="text-danger">*</span> </label>
                                        <input type="file" class="form-control" name="brocher2_pdf">
                                        @error('brocher2_pdf')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2">Priority </label>
                                        <input type="number" class="form-control" name="priority"
                                            placeholder="Enter priority " value="{{ old('priority') }}">
                                        @error('priority')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2">Status <span
                                                class="text-danger">*</span></label>
                                        <select name="status" id="" class="form-control">
                                            <option default>Status</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                        @error('status')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2">Youtube Link <span
                                             class="text-danger">*</span> </label>
                                        <input type="url" class="form-control" name="youtube_link"
                                         placeholder="Enter title " value="{{ old('youtube_link') }}">
                                        @error('youtube_link')
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
