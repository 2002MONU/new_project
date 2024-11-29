<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FieldCrop;
use App\Models\FieldCropCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class FieldCropCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fieldCategory = FieldCropCategory::join('field_crops', 'field_crops.id', '=', 'field_crop_categories.field_crop_id')
    ->select('field_crop_categories.*', 'field_crops.product_name')
    ->get();

        return view('admin.field-crop-category.field-details',compact('fieldCategory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fieldCrop = FieldCrop::where('status',1)->get();
        return view('admin.field-crop-category.add-field',compact('fieldCrop'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:field_crop_categories,name',
            'field_crop_id' => 'required',
            'description' => 'required|string',
            'brocher_pdf' => 'required|mimes:pdf,doc,docx|file|max:5120',
            'brocher2_pdf' => 'required|mimes:pdf,doc,docx|file|max:5120',
            'youtube_link' => 'required|url',
            'status' => 'required|in:0,1',
            'priority' => 'required|integer|unique:field_crop_categories,priority',
            'product_image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'brocher_image_01' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'brocher_image_02' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);
    
        $service = new FieldCropCategory();
    
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
        $service->field_crop_id = $request->input('field_crop_id');
        $service->slug = Str::slug($request->input('name'));
        $service->description = $request->input('description');
        $service->youtube_link = $request->input('youtube_link');
        $service->status = $request->input('status');
        $service->priority = $request->input('priority');
        $service->save();
        return redirect()->route('field-crops-category.index')->with('success', 'Cotton details added successfully');
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
        $fieldCrop = FieldCrop::where('status',1)->get();
        $field = FieldCropCategory::find($id);
        return view('admin.field-crop-category.edit-field',compact('fieldCrop','field'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|unique:field_crop_categories,name,'.$id,
            'field_crop_id' => 'required',
            'description' => 'required|string',
            'brocher_pdf' => 'nullable|mimes:pdf,doc,docx|file|max:5120',
            'brocher2_pdf' => 'nullable|mimes:pdf,doc,docx|file|max:5120',
            'youtube_link' => 'required|url',
            'status' => 'required|in:0,1',
            'priority' => 'required|integer|unique:field_crop_categories,priority,'.$id,
            'product_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'brocher_image_01' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'brocher_image_02' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);
    
        $service =  FieldCropCategory::find($id);
    
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
        $service->field_crop_id = $request->input('field_crop_id');
        $service->slug = Str::slug($request->input('name'));
        $service->description = $request->input('description');
        $service->youtube_link = $request->input('youtube_link');
        $service->status = $request->input('status');
        $service->priority = $request->input('priority');
        $service->save();
        return redirect()->route('field-crops-categories.index')->with('success', 'Cotton details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        FieldCropCategory::find($id)->delete();
        return redirect()->back()->with('success','Records deleted successfully');
    }
}
