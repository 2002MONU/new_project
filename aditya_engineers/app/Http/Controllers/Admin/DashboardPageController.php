<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class DashboardPageController extends Controller
{
    public function dashboard(){
        if(auth()->guard('admin')){
           $slider = Slider::where('status',1)->count('id');
           $service = Service::where('status',1)->count('id');
           $contact = \App\Models\ContactForm::count('id');
           $enquiry = \App\Models\EnquiryForm::count('id');
            return view('admin.dashboard',compact('slider','service','contact','enquiry'));
        }else{
            return redirect()->route('admin.login')->with('error','Do login first');
        }
    }
}