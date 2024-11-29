<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactDetail;
use Illuminate\Http\Request;

class ContactDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact = ContactDetail::find($id);
        return view('admin.contact.edit-contact-details',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'contact' => 'required',
            'whatsapps' => 'required',
            'email' => 'required|email',
            'address' => 'required|string',
            'header_address' => 'required|string',
            'footer_about' => 'required|string',
            'office_time' => 'required',
            'facebook_link' => 'nullable|url',
            'twitter_link' => 'nullable|url',
            'linkedin_link' => 'nullable|url',
            'youtube_link' => 'nullable|url',
            'instagram_link' => 'nullable|url',
        ]);
        
        $contact = ContactDetail::find($id);
        $contact->contact = $request->contact;  // updated to match the validated 'contact' field
        $contact->whatsapps = $request->whatsapps; // updated to match the validated 'whatsapps' field
        $contact->email = $request->email;
        $contact->address = $request->address;
        $contact->header_address = $request->header_address;
        $contact->footer_about = $request->footer_about; // added to match the validated 'footer_about' field
        $contact->office_time = $request->office_time; // added to match the validated 'office_time' field
        $contact->facebook_link = $request->facebook_link;
        $contact->twitter_link = $request->twitter_link;
        $contact->linkedin_link = $request->linkedin_link;
        $contact->youtube_link = $request->youtube_link;
        $contact->instagram_link = $request->instagram_link;
        $contact->save();
        
        return redirect()->back()->with('success','Contact Details edit successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
