<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\EnquiryForm;
use Illuminate\Http\Request;

class EnquiryFormController extends Controller
{
    //

    public function enquiryForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone_no' => 'required|numeric',
            'crop' => 'required|string|max:255',
            'variety' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'tehsil' => 'required|string|max:255',
            'message' => 'required|string',
            'agree' => 'accepted',
        ]);

        $enquiry = new EnquiryForm();
        $enquiry->name = $request->name;
        $enquiry->phone_no = $request->phone_no;
        $enquiry->crop = $request->crop;
        $enquiry->variety = $request->variety;
        $enquiry->district = $request->district;
        $enquiry->state = $request->state;
        $enquiry->tehsil = $request->tehsil;
        $enquiry->message = $request->message;
        $enquiry->save();
        return redirect()->back()->with('success','Contact Submitted Successfully');
    }

    public function enquiryMessage(){
        $enquires = EnquiryForm::latest()->get();
        return view('admin.apply-message',compact('enquires'));
    }


    public function enquiryMessageDelete($id){
        EnquiryForm::find($id)->delete();
        return redirect()->back()->with('success','Enquiry deleted successfully');
    }
}
