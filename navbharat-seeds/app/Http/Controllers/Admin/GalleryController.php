<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::get();
        return view('admin.gallery.gallery-details', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery.add-gallery');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,jpg,png,webp',
            'title' => 'required|string',
            'status' => 'required|in:0,1',
            'priority' => 'required|min:1|unique:galleries,priority'
        ]);

        $gallery =  new Gallery();
        if ($request->hasFile('images')) {
            $imageNames = [];  // Array to store image names
            foreach ($request->file('images') as $image) {
                // Generate a unique filename for each image
                $filename = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

                // Move the image to the public directory
                $image->move(public_path('assets/dynamics'), $filename);

                // Save the image filename in the array
                $imageNames[] = $filename;
                // Optionally, remove the old image if it exists

            }
            // Save the image names to the database as a JSON or serialized array
            $gallery->images = json_encode($imageNames);
        }

        $gallery->title = $request->title;
        $gallery->slug = Str::slug($request->title);
        $gallery->status = $request->status;
        $gallery->priority = $request->priority;
        $gallery->save();
        return redirect()->route('galleries.index')->with('success', 'Gallery added successfully');
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
        $gallery = Gallery::find($id);
        return view('admin.gallery.edit-gallery', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'images.*' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048',
            'title' => 'required|string',
            'status' => 'required|in:0,1',
            'priority' => 'required|min:1|unique:galleries,priority'
        ]);

        $gallery =   Gallery::find($id);
       
        
        if ($request->hasFile('images')) {
    
            // Delete old images if they exist
            if ($gallery->images) {
                $oldImages = json_decode($gallery->images, true);
        
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
            $gallery->images = json_encode($imageNames);
        }

        $gallery->title = $request->title;
        $gallery->slug = Str::slug($request->title);
        $gallery->status = $request->status;
        $gallery->priority = $request->priority;
        $gallery->save();
        return redirect()->route('galleries.index')->with('success', 'Gallery added successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery = Gallery::findOrFail($id);

        // Decode the JSON image array
        $imageNames = json_decode($gallery->images, true);

        // Check if there are images and delete each one
        if (!empty($imageNames)) {
            foreach ($imageNames as $imageName) {
                $imagePath = public_path('assets/dynamics/' . $imageName);

                // Check if the file exists before deleting
                if (file_exists($imagePath)) {
                    unlink($imagePath);  // Delete the file
                }
            }
        }

        // Delete the gallery record from the database
        $gallery->delete();

        return redirect()->route('galleries.index')->with('success', 'Gallery and images deleted successfully');
    }
}
