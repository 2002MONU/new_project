<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Research;
use Illuminate\Http\Request;

class ResearchController extends Controller
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
        $about = Research::find($id);
        return view('admin.research.edit-about',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,jpg,png,webp',
            'title' =>'required|string',
            'description' =>'required|string',
           ]);
        
        $about = Research::find($id);
        if ($request->hasFile('images')) {
    
            // Delete old images if they exist
            if ($about->images) {
                $oldImages = json_decode($about->images, true);
        
                if (!empty($oldImages)) {
                    foreach ($oldImages as $oldImage) {
                        $oldImagePath = public_path('assets/dynamics/' . $oldImage);
        
                        // Check if the file exists before attempting to delete
                        if (file_exists($oldImagePath)) {
                            unlink($oldImagePath);  // Delete the old image file
                        }
                    }
                }
            }
        
            // Array to store new image names
            $imageNames = [];
        
            foreach ($request->file('images') as $image) {
                // Generate a unique filename for each new image
                $filename = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
        
                // Move the image to the public directory
                $image->move(public_path('assets/dynamics'), $filename);
        
                // Save the new image filename in the array
                $imageNames[] = $filename;
            }
        
            // Save the new image names to the database as a JSON array
            $about->images = json_encode($imageNames);
        }
        $about->title = $request->title;
        $about->description = $request->description;
        $about->save();
        return redirect()->back()->with('success', 'Research details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
