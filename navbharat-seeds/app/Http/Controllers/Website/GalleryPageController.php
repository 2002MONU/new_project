<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryPageController extends Controller
{
    //gallery
    public function galleryPage(){
        $galleries = Gallery::where('status',1)->orderBy('priority','asc')->get();
        return view('website.gallery',compact('galleries'));
    }

    public function galleryPageDetails($slug){
        $gallery = Gallery::where('slug',$slug)->first();
        return view('website.gallery-view',compact('gallery'));
    }
}
