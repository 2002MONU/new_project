@extends('admin.layout.main')
@section('title')
    Edit Our Client
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
                        <h5 class="card-title">@yield('title')</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('our-clients.update', $ourClient->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- Row starts -->
                            <div class="row gx-3">
                               
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="image"> Images <span
                                                class="text-danger">*</span></label>
                                        ( <span>Note:IMG TYPE:- JPEG,PNG,JPG,you can select multpile image</span>)
                                        <input type="file" id="fileInput1" class="form-control file-input"
                                            name="images[]" multiple>
                                        <span id="messagefileInput1" class="text-danger"></span>
                                        
                                            <a href="{{ asset('assets/dynamics/' . $ourClient->image) }}" target="_blank">
                                                <img src="{{ asset('assets/dynamics/' . $ourClient->image) }}"
                                                    style="width:80px; height:80px; margin-right: 5px;">
                                            </a>
                                       
                                        @if ($errors->has('images'))
                                            <div class="error text-danger">{{ $errors->first('images') }}</div>
                                        @endif
                                       
                                    </div>
                                </div>

                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="priority">Priority <span
                                                class="text-danger">*</span></label>
                                        <input type="number" class="form-control" name="priority"
                                            placeholder="Enter priority" value="{{ old('priority', $ourClient->priority) }}">
                                        @error('priority')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="status">Status <span
                                                class="text-danger">*</span></label>
                                        <select name="status" class="form-control">
                                            <option value="1"
                                                {{ old('status', $ourClient->status) == 1 ? 'selected' : '' }}>Active
                                            </option>
                                            <option value="0"
                                                {{ old('status', $ourClient->status) == 0 ? 'selected' : '' }}>Inactive
                                            </option>
                                        </select>
                                        @error('status')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="d-flex gap-2 justify-content-end">
                                        <button class="btn btn-primary" type="submit">
                                            Update
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
