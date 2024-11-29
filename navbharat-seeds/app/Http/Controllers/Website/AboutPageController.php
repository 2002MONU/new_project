<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Award;
use App\Models\AwardImage;
use App\Models\Leadership;
use App\Models\MileStone;
use App\Models\Mission;
use App\Models\Overview;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    // about page
    public function aboutUs(){
        $leaderships = Leadership::where('status',1)->orderBy('priority','asc')->get();
        $overview = Overview::find(1);
        $mission = Mission::find(1);
        $award = Award::find(1);
        $milestone = MileStone::find(1);
        $awardImages = AwardImage::where('status',1)->orderBy('priority','asc')->get();
        $siteSetting = SiteSetting::find(1);
        return view('website.about',compact('leaderships','overview','mission','award','milestone','awardImages','siteSetting'));
    }


}
