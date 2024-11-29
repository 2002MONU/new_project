<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
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
        $site_setting = SiteSetting::find($id);
        return view('admin.setting.edit-sitesetting',compact('site_setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'site_name' => 'required|string',
            'footer_title' => 'required|string',
            'service_box_title' => 'required|string',
            'client_heading' => 'required|string',
            'gallery_title' => 'required|string',
            'contact_heading' => 'required|string',
            'contact_title' => 'required|string',
            'testimonial_title' => 'required|string',
            'service_offering_title' => 'required|string',
            'header_logo' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
            'footer_logo' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
            'favicon' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
            'about_banner' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
            'gallery_banner' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
            'service_banner' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
            'client_banner' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
            'contact_banner' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
           ]);
           $site_setting = SiteSetting::find($id);
           foreach ([ 'header_logo',  'favicon', 'about_banner','footer_logo', 'service_banner', 'gallery_banner', 'contact_banner', 'client_banner'] as $imageField) {
            if ($request->hasFile($imageField)) {
                $file = $request->file($imageField);
                $filename = time() .'.' . $file->getClientOriginalExtension();
                $file->move(public_path('assets/dynamics'), $filename);
                $site_setting->$imageField = $filename;
            }
        }
    
           $site_setting->site_name = $request->site_name;
           $site_setting->footer_title = $request->footer_title;
           $site_setting->client_heading = $request->client_heading;
           $site_setting->service_box_title = $request->service_box_title;
           $site_setting->gallery_title = $request->gallery_title;
           $site_setting->testimonial_title = $request->testimonial_title;
          $site_setting->contact_heading = $request->contact_heading;
           $site_setting->contact_title = $request->contact_title;
           $site_setting->service_offering_title = $request->service_offering_title;
           $site_setting->save();
           return redirect()->back()->with('success','Site Setting update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
