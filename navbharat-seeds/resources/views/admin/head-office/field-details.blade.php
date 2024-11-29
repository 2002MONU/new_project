@extends('admin.layout.main')
@section('title') Field Category Details @endsection
@section('maindashboard')

  <!-- App hero header starts -->
     <div class="app-hero-header d-flex align-items-center">
       
        <!-- Breadcrumb starts -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <i class="ri-home-8-line lh-1 pe-3 me-3 border-end"></i>
            <a href="{{route('admin.dashboard')}}">Home</a>
          </li>
          <li class="breadcrumb-item text-primary" aria-current="page">
            @yield('title')
          </li>
        </ol>
        <!-- Breadcrumb ends -->
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
    {{-- @if(session('error'))
    <div class="alert bg-danger text-white alert-dismissible fade show" role="alert">
        {{session('error')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif --}}
    <!-- Row starts -->
    <div class="row gx-3">
      <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="card-title"> @yield('title')</h5>
                <a href="{{route('field-crops.create')}}" class="btn btn-primary ms-auto">Add </a>
              </div>
          <div class="card-body">

            <!-- Table starts -->
            <div class="table-responsive">
              <table id="basicExample" class="table m-0 align-middle">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Branch Type</th>
                    <th>Branch Location</th>
                    <th>Branch Name</th>
                    <th>Telephone</th>
                    <th>Fax</th>
                    <th>Image</th>
                    <th>Updated</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                  <tbody>
                     @foreach ($corporates as $service)
                    
                       <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td >{{ $service->branch_type }}</td>
                            <td >{{ $service->branch_location }}</td>
                            <td >{{ $service->branch_name }}</td>
                            <td >{{ $service->telephone }}</td>
                            <td >{{ $service->fax }}</td>
                            <td>
                              <a  target="_blank" href="{{asset('assets/dynamics/'.$service->image)}}" target="_blank">
                                <img src="{{asset('assets/dynamics/'.$service->image)}}" class="bg-dark" style="width:80px;height:80px;"></a>
                            </td>
                          </td>
                            
                            <td>{{ $service->updated_at }}</td>
                            <td>
                                <div class="d-inline-flex gap-1">
                                    <a href="{{ route('head-corporates.edit', ['head_corporate' => $service->id]) }}" class="btn btn-outline-success btn-sm">
                                        <i class="ri-edit-box-line"></i>
                                    </a>
                                   
                                </div>
                            </td>
                        </tr>
                        @endforeach
                  </tbody>
              </table>
            </div>
            <!-- Table ends -->

           
          </div>
        </div>
      </div>
    </div>
    <!-- Row ends -->

  </div>
  <!-- App body ends -->
@endsection