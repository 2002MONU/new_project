@extends('website.layouts.app')
@section('website')
<div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
  <div class="container z-index-common">
    <div class="breadcumb-content">
      <h1 class="breadcumb-title">Blog Details</h1>
      <!-- <ul class="breadcumb-menu">
        <li><a href="index.html">Home</a></li>
        <li>Blog Details</li>
      </ul> -->
    </div>
  </div>
</div>
<section class="ot-blog-wrapper blog-details space-top space-extra-bottom">
  <div class="container">
    <div class="row">
      <div class="col-xxl-8 col-lg-7">
        <div class="ot-blog blog-single">
          <div class="blog-img">
            <img src="{{asset('assets/dynamics/'.$blog->main_image)}}" alt="Blog Image"/>
          </div>
          <div class="blog-content">
            <div class="blog-meta">
              <a href="!#"><i class="fa-solid fa-user"></i>{{$blog->postBy}}</a>
              <a href="{{route('website.blog')}}"><i class="fa-solid fa-calendar-days"></i>{{$blog->created_at->format('d M Y')}}</a>
            </div>
            <h2 class="blog-title">
              {{$blog->title}}
            </h2>
            {!! $blog->main_description !!}
            <blockquote>
              <p>
                {{$blog->thought_title}}
              </p>
              <cite>{{$blog->thought_user}}</cite>
            </blockquote>
           {!! $blog->description_02 !!}
            <div class="row mt-30">
              <div class="col-md-6">
                <img src="{{asset('assets/dynamics/'.$blog->image_01)}}" alt="Blog Image" class="rounded-10 w-100 mb-30" />
              </div>
              <div class="col-md-6">
                <img src="{{asset('assets/dynamics/'.$blog->image_02)}}" alt="Blog Image" class="rounded-10 w-100 mb-30" />
              </div>
            </div>
            <h3 class="h4">{{$blog->title_01}}</h3>
            {!! $blog->description_03 !!}
          </div>
       </div>

      </div>
      <div class="col-xxl-4 col-lg-5 sidebar-area-wrap">
        <aside class="sidebar-area">


          <div class="widget">
            <h3 class="widget_title">Recent Posts</h3>
            <div class="recent-post-wrap">
              <div class="recent-post">
                <div class="media-img">
                  <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-1.jpg" alt="Blog Image" /></a>
                </div>
                <div class="media-body">
                  <h4 class="post-title">
                    <a class="text-inherit" href="blog-details.html">Pure and Fresh Natural Fruit for a Healthy</a>
                  </h4>
                  <div class="recent-post-meta">
                    <a href="blog.html"><i class="fas fa-calendar-days"></i>21 June, 2024</a>
                  </div>
                </div>
              </div>
              <div class="recent-post">
                <div class="media-img">
                  <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-2.jpg" alt="Blog Image" /></a>
                </div>
                <div class="media-body">
                  <h4 class="post-title">
                    <a class="text-inherit" href="blog-details.html">Fueling a Healthy Life with Pure and</a>
                  </h4>
                  <div class="recent-post-meta">
                    <a href="blog.html"><i class="fas fa-calendar-days"></i>22 June, 2024</a>
                  </div>
                </div>
              </div>
              <div class="recent-post">
                <div class="media-img">
                  <a href="blog-details.html"><img src="assets/img/blog/recent-post-1-3.jpg" alt="Blog Image" /></a>
                </div>
                <div class="media-body">
                  <h4 class="post-title">
                    <a class="text-inherit" href="blog-details.html">Improve Your Health by Fresh Organic</a>
                  </h4>
                  <div class="recent-post-meta">
                    <a href="blog.html"><i class="fas fa-calendar-days"></i>23 June, 2024</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </aside>
      </div>
    </div>
  </div>
</section>
@endsection