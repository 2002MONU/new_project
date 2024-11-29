@extends('website.layouts.app')
@section('website')
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
  <div class="container z-index-common">
    <div class="breadcumb-content">
      <h1 class="breadcumb-title">Latest News</h1>
      <!-- <ul class="breadcumb-menu">
        <li><a href="index.php">Home</a></li>
        <li>Latest News</li>
      </ul> -->
    </div>
  </div>
</div>
<section class="ot-blog-wrapper space-top space-extra-bottom">
  <div class="container">
    <div class="row">
      @foreach ($blogs as $blog)
      <div class="col-12 col-md-6 col-lg-4">
        <div class="ot-blog blog-single has-post-thumbnail">
          <div class="blog-img">
            <a href="{{route('website.blog-details',$blog->slug)}}"><img src="{{asset('assets/dynamics/'.$blog->main_image)}}" alt="Blog Image" /></a>
          </div>
          <div class="blog-content">
            <div class="blog-meta">
              <a href="{{route('website.blog-details',$blog->slug)}}"><i class="fa-solid fa-user"></i>{{$blog->postBy}}</a>
              <a href="{{route('website.blog-details',$blog->slug)}}"><i class="fa-solid fa-calendar-days"></i>{{$blog->created_at->format('d M Y')}}</a>
              
            </div>
            <h2 class="blog-title">
              <a href="{{route('website.blog-details',$blog->slug)}}">{{$blog->title}}</a>
            </h2>
            {!! Str::words($blog->main_description, 60, '...') !!}
            <a href="{{route('website.blog-details',$blog->slug)}}" class="ot-btn">Read More<i class="fas fa-chevrons-right ms-2"></i></a>
          </div>
        </div>
      </div>
      @endforeach
     
      
      
      <div class="ot-pagination">
        {!! $blogs->appends(['sort' => 'department'])->links() !!}
      </div>
    </div>

  </div>
  </div>
</section>
@endsection