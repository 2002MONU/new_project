<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\SiteSetting;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class BlogPageController extends Controller
{
    //
    public function blogPage(){
        $blogs = Blog::where('status',1)->orderBy('priority','asc')->paginate(8);
        $siteSetting = SiteSetting::find(1);
        return view('website.blog',compact('blogs','siteSetting'));
    }

    public function blogPageDetails($slug){
        $blog = Blog::where('slug',$slug)->first();
        return view('website.blog-details',compact('blog'));
    }

    public function farmerReview(){
        $reviews = Testimonial::where('status',1)->orderBy('priority','asc')->get();
        return view('website.farmer-review',compact('reviews'));
    }
}
