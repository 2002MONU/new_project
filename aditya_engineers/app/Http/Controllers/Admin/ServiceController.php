<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::get();
        return view('admin.services.services-details', compact('services'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.add-services');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'service_name' => 'required|string|unique:services,title',
            'title' => 'required|string',
            'description1' => 'required|string',
            'description2' => 'required|string',
            'description3' => 'required|string',
            'description4' => 'required|string',
            'brocher_title' => 'required|string',
            'contact' => 'required|string',
            'status' => 'required|in:0,1',
            'priority' => 'required|integer|unique:services,priority',
            'images.*' => 'required|image|mimes:jpg,jpeg,png,webp',
            'image_01' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'image_02' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'pdf' => 'required',
            'document' => 'required',
        ]);
        $service = new Service();
        if ($request->hasFile('image_01')) {
            $filename = $request->file('image_01')->getClientOriginalExtension();
            $name = (time() + 1) . '.' . $filename;
            $filepath = $request->file('image_01')->move(public_path('assets/dynamics'), $name);
            $service->image_01 = $name;
        }
        if ($request->hasFile('image_02')) {
            $filename = $request->file('image_02')->getClientOriginalExtension();
            $name = (time() + 1) . '.' . $filename;
            $filepath = $request->file('image_02')->move(public_path('assets/dynamics'), $name);
            $service->image_02 = $name;
        }
        if ($request->hasFile('pdf')) {
            $filename = $request->file('pdf')->getClientOriginalExtension();
            $name = (time() + 1) . '.' . $filename;
            $filepath = $request->file('pdf')->move(public_path('assets/dynamics'), $name);
            $service->pdf = $name;
        }
        if ($request->hasFile('document')) {
            $filename = $request->file('document')->getClientOriginalExtension();
            $name = (time() + 1) . '.' . $filename;
            $filepath = $request->file('document')->move(public_path('assets/dynamics'), $name);
            $service->document = $name;
        }
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
            $service->images = json_encode($imageNames);
        }
        $service->title = $request->input('service_name');
        $service->title2 = $request->input('title');
        $service->slug = Str::slug($request->input('service_name'));
        $service->description1 = $request->input('description1');
        $service->description2 = $request->input('description2');
        $service->description3 = $request->input('description3');
        $service->description4 = $request->input('description4');
        $service->brocher_title = $request->input('brocher_title');
        $service->contact = $request->input('contact');
        $service->status = $request->input('status');
        $service->priority = $request->input('priority');
        $service->save();
        return redirect()->route('services.index')->with('success', 'Service details added successfully');
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
        $service = Service::find($id);
        return view('admin.services.edit-services', compact('service'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'service_name' => 'required|string|unique:services,title,' . $id,
            'title' => 'required|string',
            'description1' => 'required|string',
            'description2' => 'required|string',
            'description3' => 'required|string',
            'description4' => 'required|string',
            'brocher_title' => 'required|string',
            'contact' => 'required|string',
            'status' => 'required|in:0,1',
            'priority' => 'required|integer|unique:services,priority,' . $id,
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'image_01' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'image_02' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'pdf' => 'nullable',
            'document' => 'nullable',
        ]);
        $service =  Service::find($id);
        if ($request->hasFile('image_01')) {
            $filename = $request->file('image_01')->getClientOriginalExtension();
            $name = (time() + 1) . '.' . $filename;
            $filepath = $request->file('image_01')->move(public_path('assets/dynamics'), $name);
            $oldImagePath = public_path('assets/dynamics/' . $service->image_01);
            // Check if the file exists before attempting to delete
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);  // Delete the old image file
            }
            $service->image_01 = $name;
        }
        if ($request->hasFile('image_02')) {
            $filename = $request->file('image_02')->getClientOriginalExtension();
            $name = (time() + 1) . '.' . $filename;
            $filepath = $request->file('image_02')->move(public_path('assets/dynamics'), $name);
            $oldImagePath = public_path('assets/dynamics/' . $service->image_02);
            // Check if the file exists before attempting to delete
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);  // Delete the old image file
            }
            $service->image_02 = $name;
        }
        if ($request->hasFile('pdf')) {
            $filename = $request->file('pdf')->getClientOriginalExtension();
            $name = (time() + 1) . '.' . $filename;
            $filepath = $request->file('pdf')->move(public_path('assets/dynamics'), $name);
            $oldImagePath = public_path('assets/dynamics/' . $service->pdf);
            // Check if the file exists before attempting to delete
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);  // Delete the old image file
            }
            $service->pdf = $name;
        }
        if ($request->hasFile('document')) {
            $filename = $request->file('document')->getClientOriginalExtension();
            $name = (time() + 1) . '.' . $filename;
            $filepath = $request->file('document')->move(public_path('assets/dynamics'), $name);
            $oldImagePath = public_path('assets/dynamics/' . $service->document);
                        // Check if the file exists before attempting to delete
                        if (file_exists($oldImagePath)) {
                            unlink($oldImagePath);  // Delete the old image file
                        }
            $service->document = $name;
        }
        if ($request->hasFile('images')) {
            // Delete old images if they exist
            if ($service->images) {
                $oldImages = json_decode($service->images, true);
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
            $service->images = json_encode($imageNames);
        }
        $service->title = $request->input('service_name');
        $service->title2 = $request->input('title');
        $service->slug = Str::slug($request->input('service_name'));
        $service->description1 = $request->input('description1');
        $service->description2 = $request->input('description2');
        $service->description3 = $request->input('description3');
        $service->description4 = $request->input('description4');
        $service->brocher_title = $request->input('brocher_title');
        $service->contact = $request->input('contact');
        $service->status = $request->input('status');
        $service->priority = $request->input('priority');
        $service->save();
        return redirect()->route('services.index')->with('success', 'Service details added successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::find($id);
        if ($service->images) {
            // Decode the JSON array of images
            $existingImages = json_decode($service->images, true);
        
            if (!empty($existingImages)) {
                foreach ($existingImages as $image) {
                    $imagePath = public_path('assets/dynamics/' . $image);
                    if (file_exists($imagePath)) {
                        unlink($imagePath); // Delete the image file
                    }
                }
            }
        }
        if($service){
            $imagePath = public_path('assets/dynamics/' . $service->image_01);
            if (file_exists($imagePath)) {
                unlink($imagePath); // Delete the image file
            }
            $imagePath1 = public_path('assets/dynamics/' . $service->image_02);
            if (file_exists($imagePath1)) {
                unlink($imagePath1); // Delete the image file
            }
            $imagePath2 = public_path('assets/dynamics/' . $service->pdf);
            if (file_exists($imagePath2)) {
                unlink($imagePath2); // Delete the image file
            }
            $imagePath3 = public_path('assets/dynamics/' . $service->document);
            if (file_exists($imagePath3)) {
                unlink($imagePath3); // Delete the image file
            }
        }
        $service->delete();
        return redirect()->back()->with('success','Service records delete successfully');
    }
}
