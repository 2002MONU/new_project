<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\ContactDetail;
use App\Models\Service;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class ServicePageController extends Controller
{
    // service page 
    public function servicePage(){
        $services = Service::where('status',1)->orderBy('priority','asc')->paginate(8);
        $siteSetting = SiteSetting::find(1);
        return view('website.services',compact('services','siteSetting'));
    }

    // services details 

    public function servicePageDetails($slug){
        $service = Service::where('slug',$slug)->first();
        $siteSetting = SiteSetting::find(1);
        $services = Service::where('status',1)->latest()->paginate(8);
        $contact = ContactDetail::find(1);
        return view('website.services-details',compact('service','siteSetting','services','contact'));
    }
}
