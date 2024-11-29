<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use App\Models\Blog;
use App\Models\Cotton;
use App\Models\FieldCrop;
use App\Models\Gallery;
use App\Models\HomeAbout;
use App\Models\HomeFeature;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\VegetableCrop;
use App\Models\WorkProcess;
use Illuminate\Http\Request;

class IndexPageController extends Controller
{
    //

    public function IndexPage(){
        $slider = Slider::find(1);
        $about = HomeAbout::find(1);
        $galleries = Gallery::where('status',1)->orderBy('priority','asc')->get();
        $testimonials = Testimonial::where('status',1)->orderBy('priority','asc')->get();
        $blogs = Blog::where('status',1)->orderBy('priority','asc')->get();
        $achievment = Achievement::find(1);
        $homefeature = HomeFeature::find(1);
        $workprocess = WorkProcess::find(1);
        $fieldCrops = FieldCrop::where('status',1)->orderBy('priority','asc')->
         get();
         $vegetables = VegetableCrop::where('status',1)->orderBy('priority','asc')->get();
        return view('website.index',compact('slider','about','galleries','testimonials','achievment','blogs','fieldCrops','vegetables','homefeature','workprocess'));
    }
}
