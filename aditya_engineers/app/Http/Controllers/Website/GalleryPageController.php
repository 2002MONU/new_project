<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class GalleryPageController extends Controller
{
    //

    public function gallery(){
        $galleries = Gallery::where('status',1)->orderBy('priority','asc')->get();
        $siteSetting = SiteSetting::find(1);
        return view('website.gallery',compact('galleries','siteSetting'));
    }

    public function galleryView($slug){
        $gallery = Gallery::where('slug',$slug)->first();
        $siteSetting = SiteSetting::find(1);
        return view('website.gallery-view',compact('gallery','siteSetting'));
    }
}
