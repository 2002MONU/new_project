<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FieldCrop;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class FieldCropController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fieldCrops = FieldCrop::get();
        return view('admin.field-crop.field-details',compact('fieldCrops'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.field-crop.add-field');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|unique:field_crops,product_name',
            'title' => 'required|string',
            'status' => 'required|in:0,1',
            'priority' => 'required|integer|unique:field_crops,priority',
            'icon' => 'required|image|mimes:jpg,jpeg,png,webp',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp',
         ]);
    
        $service = new FieldCrop();
        if ($request->hasFile('icon')) {
            $filename = $request->file('icon')->getClientOriginalExtension();
            $name = (time() + 2) . '.' . $filename;
            $request->file('icon')->move(public_path('assets/dynamics'), $name);
            $service->icon = $name;
        }
    
        if ($request->hasFile('image')) {
            $filename = $request->file('image')->getClientOriginalExtension();
            $name = (time() + 3) . '.' . $filename;
            $request->file('image')->move(public_path('assets/dynamics'), $name);
            $service->image = $name;
        }
    
        $service->product_name = $request->input('product_name');
        $service->title = $request->input('title');
        $service->slug = Str::slug($request->input('product_name'));
        $service->priority = $request->input('priority');
        $service->status = $request->input('status');
        $service->save();
        return redirect()->route('field-crops.index')->with('success', 'Field category details added successfully');
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
        $fielddCrop = FieldCrop::find($id);
        return view('admin.field-crop.edit-field',compact('fielddCrop'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'product_name' => 'required|string|unique:field_crops,product_name,' . $id,
            'title' => 'required|string',
            'status' => 'required|in:0,1',
            'priority' => 'nullable|integer|unique:field_crops,priority,' . $id,
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048', // Added max size for better control
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);
        
        $service =  FieldCrop::find($id);
        
        if ($request->hasFile('icon')) {
            // Generate unique file name
            $filename = time() . '_' . Str::random(5) . '.' . $request->file('icon')->getClientOriginalExtension();
            $request->file('icon')->move(public_path('assets/dynamics'), $filename);
            $service->icon = $filename;
        }
        
        if ($request->hasFile('image')) {
            // Generate unique file name
            $filename = time() . '_' . Str::random(5) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('assets/dynamics'), $filename);
            $service->image = $filename;
        }
        
        // Assign other fields
        $service->product_name = $request->input('product_name');
        $service->title = $request->input('title');
        $service->slug = Str::slug($request->input('product_name'));
        $service->priority = $request->input('priority');
        $service->status = $request->input('status');
        
        // Save the service
        $service->save();
        
        // Redirect with success message
        return redirect()->route('field-crops.index')->with('success', 'Field category details updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        FieldCrop::find($id)->delete();
        return redirect()->back()->with('success','Records deleted successfully');
    }
}
