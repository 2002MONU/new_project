<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Gallery;
use App\Models\HomeAbout;
use App\Models\OurClient;
use App\Models\Service;
use App\Models\ServiceOffering;
use App\Models\SiteSetting;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\WhoWeAre;
use Illuminate\Http\Request;

class IndexPageController extends Controller
{
    // website home page 
    public function indexPage(){
        $sliders = Slider::where('status',1)->orderBy('priority','asc')->get();
        $homeAbout = HomeAbout::find(1);
        $clients = OurClient::where('status',1)->orderBy('priority','asc')->get();
        $galleries = Gallery::where('status',1)->orderBy('priority','asc')->get();
        $testimonials = Testimonial::where('status',1)->orderBy('priority','asc')->get();
        $services = Service::where('status',1)->orderBy('priority','asc')->get();
        $siteSetting = SiteSetting::find(1);
        return view('website.index',compact('sliders','homeAbout','clients','galleries','testimonials','services','siteSetting'));
    }


    // about page
    public function AboutUsPage(){
        $about = About::find(1);
        $whoWeAre = WhoWeAre::find(1);
        $outTeam = ServiceOffering::where('status',1)->orderBy('priority','asc')->get();
        $siteSetting = SiteSetting::find(1);
        return view('website.about-us',compact('about','whoWeAre','outTeam','siteSetting'));
    }
}
