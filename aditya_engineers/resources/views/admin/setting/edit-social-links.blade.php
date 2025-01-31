@extends('admin.layout.main')
@section('title') Edit Social Links @endsection
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
        @if ($errors->any())
        <div class="alert bg-danger text-white alert-dismissible fade show" role="alert">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
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
            <form action="{{route('sociallinks.update',['sociallink' => $social->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
              @method('PUT')
              <!-- Row starts -->
              <div class="row gx-3">
                <div class="col-xxl-6 col-lg-6 col-sm-12">
                    <div class="mb-3">
                        <label class="form-label" for="a1">Facebook Link </label>
                        <input type="url" class="form-control" name="facebook" placeholder="Enter facebook" value="{{$social->facebook}}">
                        @error('facebook')
                        <div class="error text-danger">{{ $message }}</div>
                        @enderror  
                    </div>
                </div>
               
                <div class="col-xxl-6 col-lg-6 col-sm-12">
                  <div class="mb-3">
                    <label class="form-label" for="a2">Instagram </label>
                    <input type="url" class="form-control " name="instagram" placeholder="Enter instagram" value="{{$social->instagram}}">
                    @error('instagram')
                    <div class="error text-danger">{{ $message }}</div>
                    @enderror 
                </div>
              </div>
                  <div class="col-xxl-6 col-lg-6 col-sm-12">
                  <div class="mb-3">
                    <label class="form-label" for="a2">Twitter </label>
                    <input type="url" class="form-control " name="twitter" placeholder="Enter twitter" value="{{$social->twitter}}">
                    @error('twitter')
                    <div class="error text-danger">{{ $message }}</div>
                    @enderror 
                </div>
              </div>
              <div class="col-xxl-6 col-lg-6 col-sm-12">
                <div class="mb-3">
                  <label class="form-label" for="a2">Linkedin </label>
                  <input type="url" class="form-control text-dark"  name="linkedin" placeholder="Enter linkedin" value="{{$social->linkedin}}">
                   @error('linkedin')
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

    <!-- Include necessary CSS and JS files for bootstrap-tagsinput -->
   
   
@endsection
