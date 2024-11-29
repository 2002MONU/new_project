<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VegetableCrop;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class VegetableCropController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vegetables = VegetableCrop::get();
        return view('admin.vegetable.field-details',compact('vegetables'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.vegetable.add-field');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|unique:vegetable_crops,product_name',
            'title' => 'required|string',
            'status' => 'required|in:0,1',
            'priority' => 'required|integer|unique:vegetable_crops,priority',
            'icon' => 'required|image|mimes:jpg,jpeg,png,webp',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp',
         ]);
    
        $service = new VegetableCrop();
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
        return redirect()->route('vegetable-crops.index')->with('success', 'Vegetables  details added successfully');
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
           $fielddCrop = VegetableCrop::find($id);
           return view('admin.vegetable.edit-field',compact('fielddCrop'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'product_name' => 'required|string|unique:vegetable_crops,product_name,'.$id,
            'title' => 'required|string',
            'status' => 'required|in:0,1',
            'priority' => 'required|integer|unique:vegetable_crops,priority,'.$id,
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
         ]);
    
        $service =  VegetableCrop::find($id);
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
        return redirect()->route('vegetable-crops.index')->with('success', 'Vegetables  details update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
       VegetableCrop::find($id)->delete();
        return redirect()->back()->with('success','Records deleted successfully');
    }
}
