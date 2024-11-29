<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VegetableCrop;
use App\Models\VegetableCropCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class VegetableCropCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fieldCategory = VegetableCropCategory::join('vegetable_crops', 'vegetable_crops.id', '=', 'vegetable_crop_categories.vegetable_id')
        ->select('vegetable_crop_categories.*', 'vegetable_crops.product_name')
        ->get();
    
            return view('admin.vegetables-category.field-details',compact('fieldCategory'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fieldCrop = VegetableCrop::where('status',1)->get();
        return view('admin.vegetables-category.add-field',compact('fieldCrop'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:vegetable_crop_categories,name',
            'vegetable_id' => 'required',
            'description' => 'required|string',
            'brocher_pdf' => 'required|mimes:pdf,doc,docx|file|max:5120',
            'brocher2_pdf' => 'required|mimes:pdf,doc,docx|file|max:5120',
            'youtube_link' => 'required|url',
            'status' => 'required|in:0,1',
            'priority' => 'required|integer|unique:vegetable_crop_categories,priority',
            'product_image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'brocher_image_01' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'brocher_image_02' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);
    
        $service = new VegetableCropCategory();
    
        if ($request->hasFile('product_image')) {
            $filename = $request->file('product_image')->getClientOriginalExtension();
            $name = (time() + 1) . '.' . $filename;
            $request->file('product_image')->move(public_path('assets/dynamics'), $name);
            $service->product_image = $name;
        }
    
        if ($request->hasFile('brocher_image_01')) {
            $filename = $request->file('brocher_image_01')->getClientOriginalExtension();
            $name = (time() + 2) . '.' . $filename;
            $request->file('brocher_image_01')->move(public_path('assets/dynamics'), $name);
            $service->brocher_image_01 = $name;
        }
    
        if ($request->hasFile('brocher_image_02')) {
            $filename = $request->file('brocher_image_02')->getClientOriginalExtension();
            $name = (time() + 3) . '.' . $filename;
            $request->file('brocher_image_02')->move(public_path('assets/dynamics'), $name);
            $service->brocher_image_02 = $name;
        }
    
        if ($request->hasFile('brocher_pdf')) {
            $filename = $request->file('brocher_pdf')->getClientOriginalExtension();
            $name = (time() + 4) . '.' . $filename;
            $request->file('brocher_pdf')->move(public_path('assets/dynamics'), $name);
            $service->brocher_01 = $name;
        }
    
        if ($request->hasFile('brocher2_pdf')) {
            $filename = $request->file('brocher2_pdf')->getClientOriginalExtension();
            $name = (time() + 5) . '.' . $filename;
            $request->file('brocher2_pdf')->move(public_path('assets/dynamics'), $name);
            $service->brocher_02 = $name;
        }
    
        $service->name = $request->input('name');
        $service->vegetable_id = $request->input('vegetable_id');
        $service->slug = Str::slug($request->input('name'));
        $service->description = $request->input('description');
        $service->youtube_link = $request->input('youtube_link');
        $service->status = $request->input('status');
        $service->priority = $request->input('priority');
        $service->save();
        return redirect()->route('vegetable-crop-categories.index')->with('success', 'Vegetables details added successfully');
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
        $fieldCrop = VegetableCrop::where('status',1)->get();
        $field = VegetableCropCategory::find($id);
        return view('admin.vegetables-category.edit-field',compact('fieldCrop','field'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    // Validate the request
    $request->validate([
        'name' => 'required|string|unique:vegetable_crop_categories,name,'.$id,
        'vegetable_id' => 'required',
        'description' => 'required|string',
        'brocher_pdf' => 'nullable|mimes:pdf,doc,docx|file|max:5120',
        'brocher2_pdf' => 'nullable|mimes:pdf,doc,docx|file|max:5120',
        'youtube_link' => 'required|url',
        'status' => 'required|in:0,1',
        'priority' => 'required|integer|unique:vegetable_crop_categories,priority,'.$id,
        'product_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        'brocher_image_01' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        'brocher_image_02' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    // Find the VegetableCropCategory by ID
    $service = VegetableCropCategory::find($id);

    if (!$service) {
        return redirect()->route('vegetable-crop-categories.index')->with('error', 'Vegetable category not found');
    }

    // Handle file uploads
    $uploadPaths = ['product_image', 'brocher_image_01', 'brocher_image_02', 'brocher_pdf', 'brocher2_pdf'];
    foreach ($uploadPaths as $field) {
        if ($request->hasFile($field)) {
            $filename = time() . '_' . $request->file($field)->getClientOriginalName();
            $path = $request->file($field)->move(public_path('assets/dynamics', $filename));
            $service->$field = $filename;
        }
    }

    // Update the service attributes
    $service->name = $request->input('name');
    $service->vegetable_id = $request->input('vegetable_id');
    $service->slug = Str::slug($request->input('name'));
    $service->description = $request->input('description');
    $service->youtube_link = $request->input('youtube_link');
    $service->status = $request->input('status');
    $service->priority = $request->input('priority');

    // Save the service
    $service->save();

    return redirect()->route('vegetable-crop-categories.index')->with('success', 'Vegetable details updated successfully');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
       VegetableCropCategory::find($id)->delete();
        return redirect()->back()->with('success','Records deleted successfully');
    }
}
