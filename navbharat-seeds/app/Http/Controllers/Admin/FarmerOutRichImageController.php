<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FarmerOutrichImage;
use Illuminate\Http\Request;

class FarmerOutRichImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $our_client = FarmerOutrichImage::get();
        return view('admin.farmer-image.client-details',compact('our_client'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.farmer-image.add-client');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'status' => 'required|in:0,1',
             'priority' => 'required|integer',
             'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
          ]);
     
         $service = new FarmerOutrichImage();
         
     
         if ($request->hasFile('image')) {
             $filename = $request->file('image')->getClientOriginalExtension();
             $name = (time() + 3) . '.' . $filename;
             $request->file('image')->move(public_path('assets/dynamics'), $name);
             $service->image = $name;
         }
     
        
         $service->priority = $request->input('priority');
         $service->status = $request->input('status');
         $service->save();
         return redirect()->route('farmer-images.index')->with('success', 'Farmer  Images added successfully');
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
        //
    }
}
