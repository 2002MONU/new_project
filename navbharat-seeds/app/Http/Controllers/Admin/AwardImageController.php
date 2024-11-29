<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AwardImage;
use Illuminate\Http\Request;

class AwardImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $our_client = AwardImage::get();
        return view('admin.award-image.client-details',compact('our_client'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.award-image.add-client');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'status' => 'required|in:0,1',
             'priority' => 'required|integer|unique:award_images,priority',
             'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
          ]);
     
         $service = new AwardImage();
         
     
         if ($request->hasFile('image')) {
             $filename = $request->file('image')->getClientOriginalExtension();
             $name = (time() + 3) . '.' . $filename;
             $request->file('image')->move(public_path('assets/dynamics'), $name);
             $service->image = $name;
         }
     
        
         $service->priority = $request->input('priority');
         $service->status = $request->input('status');
         $service->save();
         return redirect()->route('award-images.index')->with('success', 'Award Images added successfully');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        AwardImage::find($id)->delete();
        return redirect()->back()->with('success','Award Images deleted successfully');
    }
}
