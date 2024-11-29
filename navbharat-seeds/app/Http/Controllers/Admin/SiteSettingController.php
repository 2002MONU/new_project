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
            'header_logo' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
            'footer_logo' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
            'favicon' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
            'cotton_bg' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
            'field_bg' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
            'vegetable_bg' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
            'head_bg' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
            'research_bg' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
            'processing_bg' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
            'outrich_bg' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
            'patnership_bg' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
            'news_bg' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
            'farmer_bg' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
            'about_bg' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
            'export_bg' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
        ]);
        
        $site_setting = SiteSetting::find($id);
        
        foreach ([
            'header_logo', 'footer_logo', 'favicon', 'cotton_bg', 'field_bg', 
            'vegetable_bg', 'head_bg', 'research_bg', 'processing_bg', 'outrich_bg', 
            'patnership_bg', 'news_bg', 'farmer_bg', 'about_bg','export_bg'
        ] as $imageField) {
            if ($request->hasFile($imageField)) {
                $file = $request->file($imageField);
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('assets/dynamics'), $filename);
                $site_setting->$imageField = $filename;
            }
        }
        
        $site_setting->site_name = $request->site_name;
        $site_setting->save();
        
        return redirect()->back()->with('success', 'Site Setting updated successfully');
          
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
