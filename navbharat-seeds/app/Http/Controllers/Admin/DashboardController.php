<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cotton;
use App\Models\EnquiryForm;
use App\Models\FieldCrop;
use App\Models\VegetableCrop;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        if(auth()->guard('admin')){
            $cotton = Cotton::where('status',1)->count('id');
            $fieldcrop = FieldCrop::where('status',1)->count('id');
            $vegetableCrop = VegetableCrop::where('status',1)->count('id');
            $enquiry = EnquiryForm::count('id');
             return view('admin.dashboard',compact('cotton','fieldcrop','vegetableCrop','enquiry'));
        }else{
            return redirect()->route('admin.login')->with('error','Do login first');
        }
    }
}
