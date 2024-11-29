<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\ContactDetail;
use App\Models\ContactForm;
use App\Models\OurClient;
use App\Models\OurClientAbout;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use App\Models\EnquiryForm;

class OurClientPageController extends Controller
{
    // 
    public function ourClientPage(){
        $about = OurClientAbout::find(1);
        $clients = OurClient::where('status',1)->orderBy('priority','asc')->get();
        $siteSetting = SiteSetting::find(1);
        return view('website.our-clients',compact('about','clients','siteSetting'));
    }

    public function contactUs(){
        $contact = ContactDetail::find(1);
        $siteSetting = SiteSetting::find(1);
        return view('website.contact-us',compact('contact','siteSetting'));
    }

    // contact form submit details 
    public function contactForm(Request $request){
          $request->validate([
            'name' => 'required|string|max:40',
            'email' => 'required|regex:/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/',
            'number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|size:10',
            'checkbox' => 'required',
            'additonal_details' => 'nullable|string',
          ]);

          $contact = new ContactForm();
          $contact->name = $request->name;
          $contact->email = $request->email;
          $contact->number = $request->number;
          $contact->additonal_details = $request->additonal_details;
          $contact->save();
          return redirect()->back()->with('success','Contact Submitted Successfully');
    }

            // contact message details show 
    public function contactMessage(){
        $enqueries = ContactForm::latest('id')->get();
        return view('admin.contact-message', compact('enqueries'));
    }

    // contact form message delete 
    public function contactMessageDelete($id){
        $apply = ContactForm::find($id)->delete();
        return redirect()->back()->with('success', 'Contact message deleted successfully');
    }
    
    // enquiry form message submit 
    public  function EnquiryForm(Request $request) {
     $request->validate([
            'name' => 'required|string|max:40',
            'email' => 'required|regex:/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/',
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|size:10',
           'message' => 'nullable|string',
          ]);

          $contact = new EnquiryForm();
          $contact->name = $request->name;
          $contact->email = $request->email;
          $contact->mobile = $request->mobile;
          $contact->message = $request->message;
          $contact->save();
          return redirect()->back()->with('success','Enquiry Submitted Successfully');
}

  //  enqquiry message details 
      public function enquiryMessage(){
          $enquires = EnquiryForm::latest()->get();
          return view('admin.apply-message',compact('enquires'));
      }
    
}
