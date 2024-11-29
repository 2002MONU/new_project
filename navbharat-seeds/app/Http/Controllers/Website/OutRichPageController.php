<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\CommunityImage;
use App\Models\Export;
use App\Models\ExportImage;
use App\Models\FarmerOutrichImage;
use App\Models\OurCommunity;
use App\Models\OutrichFarmer;
use Illuminate\Http\Request;

class OutRichPageController extends Controller
{
    //

    public function farmerOutrich(){
        $farmerOutRich = OutrichFarmer::where('status',1)->orderBy('priority','asc')->get();
        $farmerImages = FarmerOutrichImage::where('status',1)->orderBy('priority','asc')->get();
        return view('website.farmer-outrich',compact('farmerOutRich','farmerImages'));
    }

    public function ourCommmunity(){
        $ourCommunity = OurCommunity::where('status',1)->orderBy('priority','asc')->get();
        $communityImages = CommunityImage::where('status',1)->orderBy('priority','asc')->get();
        return view('website.our-community',compact('ourCommunity','communityImages'));
    }


    public function exportPage(){
        $exports = Export::where('status',1)->orderBy('priority','asc')->get();
        $exportImage = ExportImage::where('status',1)->orderBy('priority','asc')->get();
        return view('website.export',compact('exports','exportImage'));
    }
}
