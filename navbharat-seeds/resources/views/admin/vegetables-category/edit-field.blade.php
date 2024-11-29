@extends('admin.layout.main')
@section('title')
    Edit Vegetables Category  
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
                        <form action="{{ route('vegetable-crop-categories.update', $field->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- Row starts -->
                            <div class="row gx-3">
                                <!-- Existing Fields -->
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="field_crop_id">Field Crop Category <span class="text-danger">*</span></label>
                                        <select name="vegetable_id" id="field_crop_id" class="form-control">
                                            @foreach ($fieldCrop as $crop)
                                                <option value="{{ $crop->id }}" {{ $crop->id == $field->field_crop_id ? 'selected' : '' }}>{{ $crop->product_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('vegetable_id')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="name">Name <span class="text-danger">*</span></label>
                                        <input type="text" id="name" class="form-control" name="name" placeholder="Enter title" value="{{ $field->name }}">
                                        @error('name')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="product_image">Images <span class="text-danger">*</span></label>
                                        <input type="file" id="product_image" class="form-control file-input" name="product_image">
                                        <span> (Note: IMG TYPE: JPEG, PNG, JPG)</span>
                                        <a target="_blank" href="{{ asset('assets/dynamics/' . $field->product_image) }}">
                                            <img src="{{ asset('assets/dynamics/' . $field->product_image) }}" class="bg-dark" style="width: 80px; height: 80px;">
                                        </a>
                                        @error('product_image')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Description <span class="text-danger">*</span></label>
                                        <textarea id="description" class="form-control ckeditor" name="description" placeholder="Enter description">{{ $field->description }}</textarea>
                                        @error('description')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="brocher_image_01">Brochure Images 1 <span class="text-danger">*</span></label>
                                        <input type="file" id="brocher_image_01" class="form-control file-input" name="brocher_image_01">
                                        <span> (Note: IMG TYPE: JPEG, PNG, JPG)</span>
                                        <a target="_blank" href="{{ asset('assets/dynamics/' . $field->brocher_image_01) }}">
                                            <img src="{{ asset('assets/dynamics/' . $field->brocher_image_01) }}" class="bg-dark" style="width: 80px; height: 80px;">
                                        </a>
                                        @error('brocher_image_01')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="brocher_image_02">Brochure Images 2 <span class="text-danger">*</span></label>
                                        <input type="file" id="brocher_image_02" class="form-control file-input" name="brocher_image_02">
                                        <span> (Note: IMG TYPE: JPEG, PNG, JPG)</span>
                                        <a target="_blank" href="{{ asset('assets/dynamics/' . $field->brocher_image_02) }}">
                                            <img src="{{ asset('assets/dynamics/' . $field->brocher_image_02) }}" class="bg-dark" style="width: 80px; height: 80px;">
                                        </a>
                                        @error('brocher_image_02')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="brocher_pdf">Brochure PDF 1 <span class="text-danger">*</span></label>
                                        <input type="file" id="brocher_pdf" class="form-control" name="brocher_pdf">
                                        <a target="_blank" href="{{ asset('assets/dynamics/' . $field->brocher_01) }}">Brochure_01 PDF</a>
                                        @error('brocher_pdf')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="brocher2_pdf">Brochure PDF 2 <span class="text-danger">*</span></label>
                                        <input type="file" id="brocher2_pdf" class="form-control" name="brocher2_pdf">
                                        <a target="_blank" href="{{ asset('assets/dynamics/' . $field->brocher_02) }}">Brochure_02 PDF</a>
                                        @error('brocher2_pdf')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="priority">Priority</label>
                                        <input type="number" id="priority" class="form-control" name="priority" placeholder="Enter priority" value="{{ $field->priority }}">
                                        @error('priority')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="status">Status <span class="text-danger">*</span></label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="" selected>Status</option>
                                            <option value="1" {{ $field->status == 1 ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ $field->status == 0 ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                        @error('status')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="youtube_link">YouTube Link <span class="text-danger">*</span></label>
                                        <input type="url" id="youtube_link" class="form-control" name="youtube_link" placeholder="Enter YouTube link" value="{{ $field->youtube_link }}">
                                        @error('youtube_link')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Submit Button -->
                                <div class="col-sm-12">
                                    <div class="d-flex gap-2 justify-content-end">
                                        <button class="btn btn-primary" type="submit">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Row ends -->
    </div>
    <!-- App body ends -->
@endsection
