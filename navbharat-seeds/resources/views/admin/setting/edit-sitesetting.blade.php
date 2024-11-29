@extends('admin.layout.main')
@section('title')
    Edit Site Settings
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
                        <h5 class="card-title">@yield('title')</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('site-settings.update', ['site_setting' => $site_setting->id]) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- Row starts -->
                            <div class="row gx-3">
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a1">Site Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="site_name"
                                            placeholder="Enter Site name" value="{{ $site_setting->site_name }}">
                                        @error('site_name')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2">Header Logo <span>( IMG-TYPE:
                                                JPG,PNG,JPEG,WEP, SIZE:2MB )</span></label>
                                        <input type="file" class="form-control file-input" id="fileInput2"
                                            name="header_logo">
                                        <a target="_blank"
                                            href="{{ asset('assets/dynamics/' . $site_setting->header_logo) }}">
                                            <img src="{{ asset('assets/dynamics/' . $site_setting->header_logo) }}"
                                                style="width:120px;height:80px;"></a>
                                        <span id="messagefileInput2" class="text-danger"></span>
                                        @error('header_logo')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2">Favicon <span>( IMG-TYPE: JPG,PNG,JPEG,
                                                SIZE:2MB )</span></label>
                                        <input type="file" class="form-control file-input" id="fileInput3"
                                            name="favicon">
                                        <a target="_blank" href="{{ asset('assets/dynamics/' . $site_setting->favicon) }}">
                                            <img src="{{ asset('assets/dynamics/' . $site_setting->favicon) }}"
                                                style="width:120px;height:80px;"></a>
                                        <span id="messagefileInput3" class="text-danger"></span>
                                        @error('favicon')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2">Footer Logo <span>( IMG-TYPE: JPG,PNG,JPEG,
                                                SIZE:2MB )</span></label>
                                        <input type="file" class="form-control file-input" id="fileInput3"
                                            name="footer_logo">
                                        <a target="_blank"
                                            href="{{ asset('assets/dynamics/' . $site_setting->footer_logo) }}">
                                            <img src="{{ asset('assets/dynamics/' . $site_setting->footer_logo) }}"
                                                style="width:120px;height:80px;"></a>
                                        <span id="messagefileInput3" class="text-danger"></span>
                                        @error('footer_logo')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2">cotton_bg <span>( IMG-TYPE: JPG,PNG,JPEG,
                                                SIZE:2MB )</span></label>
                                        <input type="file" class="form-control file-input" id="fileInput9"
                                            name="cotton_bg">
                                        <a target="_blank" href="{{ asset('assets/dynamics/' . $site_setting->cotton_bg) }}">
                                            <img src="{{ asset('assets/dynamics/' . $site_setting->cotton_bg) }}"
                                                style="width:120px;height:80px;"></a>
                                        <span id="messagefileInput9" class="text-danger"></span>
                                        @error('cotton_bg')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="a2">field_bg <span>( IMG-TYPE: JPG,PNG,JPEG,
                                                SIZE:2MB )</span></label>
                                        <input type="file" class="form-control file-input" id="fileInput9"
                                            name="field_bg">
                                        <a target="_blank"
                                            href="{{ asset('assets/dynamics/' . $site_setting->field_bg) }}">
                                            <img src="{{ asset('assets/dynamics/' . $site_setting->field_bg) }}"
                                                style="width:120px;height:80px;"></a>
                                        <span id="messagefileInput9" class="text-danger"></span>
                                        @error('field_bg')
                                            <div class="error text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <!-- Vegetable Background -->
                                    <div class="form-group">
                                        <label for="vegetable_bg">Vegetable Background</label>
                                        <input type="file" name="vegetable_bg" id="vegetable_bg"
                                            class="form-control">
                                            <a target="_blank"
                                            href="{{ asset('assets/dynamics/' . $site_setting->vegetable_bg) }}">
                                            <img src="{{ asset('assets/dynamics/' . $site_setting->vegetable_bg) }}"
                                                style="width:120px;height:80px;"></a>
                                        @error('vegetable_bg')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <!-- Head Background -->
                                    <div class="form-group">
                                        <label for="head_bg">Head Office Background</label>
                                        <input type="file" name="head_bg" id="head_bg" class="form-control">
                                        <a target="_blank"
                                            href="{{ asset('assets/dynamics/' . $site_setting->head_bg) }}">
                                            <img src="{{ asset('assets/dynamics/' . $site_setting->head_bg) }}"
                                                style="width:120px;height:80px;"></a>
                                        @error('head_bg')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <!-- Research Background -->
                                    <div class="form-group">
                                        <label for="research_bg">Research Background</label>
                                        <input type="file" name="research_bg" id="research_bg" class="form-control">
                                        <a target="_blank"
                                        href="{{ asset('assets/dynamics/' . $site_setting->research_bg) }}">
                                        <img src="{{ asset('assets/dynamics/' . $site_setting->research_bg) }}"
                                            style="width:120px;height:80px;"></a>
                                        @error('research_bg')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <!-- Processing Background -->
                                    <div class="form-group">
                                        <label for="processing_bg">Processing Background</label>
                                        <input type="file" name="processing_bg" id="processing_bg"
                                            class="form-control">
                                            <a target="_blank"
                                            href="{{ asset('assets/dynamics/' . $site_setting->processing_bg) }}">
                                            <img src="{{ asset('assets/dynamics/' . $site_setting->processing_bg) }}"
                                                style="width:120px;height:80px;"></a>
                                        @error('processing_bg')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <!-- Outrich Background -->
                                    <div class="form-group">
                                        <label for="outrich_bg">Outrich Background</label>
                                        <input type="file" name="outrich_bg" id="outrich_bg" class="form-control">
                                        <a target="_blank"
                                            href="{{ asset('assets/dynamics/' . $site_setting->outrich_bg) }}">
                                            <img src="{{ asset('assets/dynamics/' . $site_setting->outrich_bg) }}"
                                                style="width:120px;height:80px;"></a>
                                        @error('outrich_bg')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <!-- Outrich Background -->
                                    <div class="form-group">
                                        <label for="patnership_bg">Patnership Background</label>
                                        <input type="file" name="patnership_bg" id="patnership_bg" class="form-control">
                                        <a target="_blank"
                                            href="{{ asset('assets/dynamics/' . $site_setting->patnership_bg) }}">
                                            <img src="{{ asset('assets/dynamics/' . $site_setting->patnership_bg) }}"
                                                style="width:120px;height:80px;"></a>
                                        @error('patnership_bg')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <!-- Outrich Background -->
                                    <div class="form-group">
                                        <label for="patnership_bg">Export Background</label>
                                        <input type="file" name="export_bg" id="export_bg" class="form-control">
                                        <a target="_blank"
                                            href="{{ asset('assets/dynamics/' . $site_setting->export_bg) }}">
                                            <img src="{{ asset('assets/dynamics/' . $site_setting->export_bg) }}"
                                                style="width:120px;height:80px;"></a>
                                        @error('export_bg')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <!-- Outrich Background -->
                                    <div class="form-group">
                                        <label for="patnership_bg">News Background</label>
                                        <input type="file" name="news_bg" id="news_bg" class="form-control">
                                        <a target="_blank"
                                            href="{{ asset('assets/dynamics/' . $site_setting->news_bg) }}">
                                            <img src="{{ asset('assets/dynamics/' . $site_setting->news_bg) }}"
                                                style="width:120px;height:80px;"></a>
                                        @error('news_bg')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <!-- Outrich Background -->
                                    <div class="form-group">
                                        <label for="patnership_bg">About Background</label>
                                        <input type="file" name="about_bg" id="about_bg" class="form-control">
                                        <a target="_blank"
                                            href="{{ asset('assets/dynamics/' . $site_setting->about_bg) }}">
                                            <img src="{{ asset('assets/dynamics/' . $site_setting->about_bg) }}"
                                                style="width:120px;height:80px;"></a>
                                        @error('about_bg')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-6 col-sm-12">
                                    <!-- Outrich Background -->
                                    <div class="form-group">
                                        <label for="patnership_bg">Farmer Background</label>
                                        <input type="file" name="farmer_bg" id="farmer_bg" class="form-control">
                                        <a target="_blank"
                                            href="{{ asset('assets/dynamics/' . $site_setting->farmer_bg) }}">
                                            <img src="{{ asset('assets/dynamics/' . $site_setting->farmer_bg) }}"
                                                style="width:120px;height:80px;"></a>
                                        @error('farmer_bg')
                                            <div class="text-danger">{{ $message }}</div>
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
