@extends('admin.layout.main')
@section('title')
    Edit Field Category
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
                        <form action="{{ route('field-crops-categories.update',$field->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- Row starts -->
                            <div class="row gx-3">
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2">Field Crop Category <span
                                                class="text-danger">*</span> </label>
                                       <select name="field_crop_id" class="form-control">
                                        @foreach ($fieldCrop as $crop)
                                        <option value="{{$crop->id}}" {{$crop->id == $field->field_crop_id ? 'selected' :''}}>{{$crop->product_name}}</option>
                                        @endforeach
                                       </select>
                                        @error('type')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class=" col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2"> Name <span
                                                class="text-danger">*</span> </label>
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Enter title " value="{{ $field->name }}">
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
                                        <a  target="_blank" href="{{asset('assets/dynamics/'.$field->product_image)}}" target="_blank">
                                          <img src="{{asset('assets/dynamics/'.$field->product_image)}}" class="bg-dark" style="width:80px;height:80px;"></a>
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
                                        <textarea type="text" class="form-control ckeditor" name="description" placeholder="Enter title ">{{ $field->description }} </textarea>
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
                                        <a  target="_blank" href="{{asset('assets/dynamics/'.$field->brocher_image_01)}}" target="_blank">
                                          <img src="{{asset('assets/dynamics/'.$field->brocher_image_01)}}" class="bg-dark" style="width:80px;height:80px;"></a>
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
                                        <a  target="_blank" href="{{asset('assets/dynamics/'.$field->brocher_image_02)}}" target="_blank">
                                          <img src="{{asset('assets/dynamics/'.$field->brocher_image_02)}}" class="bg-dark" style="width:80px;height:80px;"></a>
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
                                        <a  target="_blank" href="{{asset('assets/dynamics/'.$field->brocher_01)}}" target="_blank">Brocher_01 PDF</a>
                                          {{-- <img src="{{asset('assets/dynamics/'.$field->brocher_01)}}" class="bg-dark" style="width:80px;height:80px;"></a> --}}
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
                                        <a  target="_blank" href="{{asset('assets/dynamics/'.$field->brocher_02)}}" target="_blank">Brocher_02 PDF</a>
                                          {{-- <img src="{{asset('assets/dynamics/'.$field->brocher_02)}}" class="bg-dark" style="width:80px;height:80px;"></a> --}}
                                        @error('brocher2_pdf')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2">Priority </label>
                                        <input type="number" class="form-control" name="priority"
                                            placeholder="Enter priority " value="{{ $field->priority }}">
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
                                            <option value="1" {{$field->status == 1 ? 'selected' :''}}>Active</option>
                                            <option value="0" {{$field->status == 0 ? 'selected' :''}}>Inactive</option>
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
                                         placeholder="Enter title " value="{{ $field->youtube_link}}">
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
