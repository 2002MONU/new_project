@extends('admin.layout.main')
@section('title')
    Edit Field Crops
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
                        <form action="{{ route('head-corporates.update',$fielddCrop->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <!-- Row starts -->
                              <div class="row gx-3">
                                 <div class=" col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2"> Branch_type <span
                                                class="text-danger">*</span> </label>
                                        <input type="text" class="form-control" name="branch_type"
                                            placeholder="Enter title " value="{{ $fielddCrop->branch_type }}">
                                        @error('branch_type')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                 <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2">Branch_location<span
                                                class="text-danger">*</span> </label>
                                        <textarea type="text" class="form-control" name="branch_location"
                                            placeholder="Enter title">{{ $fielddCrop->branch_location }}</textarea>
                                        @error('branch_location')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                 <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2">Branch_name<span
                                                class="text-danger">*</span> </label>
                                        <textarea type="text" class="form-control" name="branch_name"
                                            placeholder="Enter title">{{ $fielddCrop->branch_name }}</textarea>
                                        @error('branch_name')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                 <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2">Address<span
                                                class="text-danger">*</span> </label>
                                        <textarea type="text" class="form-control" name="address"
                                            placeholder="Enter title">{{ $fielddCrop->address }}</textarea>
                                        @error('address')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                 <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2">Telephone<span
                                                class="text-danger">*</span> </label>
                                        <textarea type="text" class="form-control" name="telephone"
                                            placeholder="Enter title">{{ $fielddCrop->address }}</textarea>
                                        @error('telephone')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                 </div>
                                 <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2">Fax<span
                                                class="text-danger">*</span> </label>
                                        <textarea type="text" class="form-control" name="fax"
                                            placeholder="Enter title">{{ $fielddCrop->fax }}</textarea>
                                        @error('fax')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2"> Images <span
                                                class="text-danger">*</span></label>
                                        <input type="file" id="fileInput3" class="form-control file-input"
                                            name="image" >
                                        <span> ( Note:IMG TYPE:- JPEG,PNG,JPG)</span>
                                        <a  target="_blank" href="{{asset('assets/dynamics/'.$fielddCrop->image)}}" target="_blank">
                                          <img src="{{asset('assets/dynamics/'.$fielddCrop->image)}}" class="bg-dark" style="width:80px;height:80px;"></a>
                                        <span id="messagefileInput3" class="text-danger"></span>
                                        @error('image')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2"> Logo <span
                                                class="text-danger">*</span></label>
                                        <input type="file" id="fileInput3" class="form-control file-input"
                                            name="logo" >
                                        <span> ( Note:IMG TYPE:- JPEG,PNG,JPG)</span>
                                        <a  target="_blank" href="{{asset('assets/dynamics/'.$fielddCrop->logo)}}" target="_blank">
                                          <img src="{{asset('assets/dynamics/'.$fielddCrop->logo)}}" class="bg-dark" style="width:80px;height:80px;"></a>
                                        <span id="messagefileInput3" class="text-danger"></span>
                                        @error('logo')
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
