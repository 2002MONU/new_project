@extends('admin.layout.main')
@section('title')
    Edit Work Process
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
        @if (session('success'))
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
                        <form action="{{ route('work-process.update', $about->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- Row starts -->
                            <div class="row gx-3">
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2">Research  <span class="text-danger">*</span> </label>
                                        <input type="text" class="form-control " name="research"
                                            placeholder="Enter title " value="{{ $about->research }}">
                                        @error('research')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2">Production<span class="text-danger">*</span> </label>
                                        <input type="text" class="form-control " name="production"
                                            placeholder="Enter title " value="{{ $about->production }}">
                                        @error('production')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2">Processing <span class="text-danger">*</span> </label>
                                        <input type="text" class="form-control " name="processing"
                                            placeholder="Enter feature_03 " value="{{ $about->processing }}">
                                        @error('processing')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2">Quality Control <span class="text-danger">*</span> </label>
                                        <input type="text" class="form-control " name="quality_Control"
                                            placeholder="Enter feature_03 " value="{{ $about->quality_Control }}">
                                        @error('quality_Control')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2">Final Product <span class="text-danger">*</span> </label>
                                        <input type="text" class="form-control " name="final_Product"
                                            placeholder="Enter final_Product " value="{{ $about->final_Product }}">
                                        @error('final_Product')
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
