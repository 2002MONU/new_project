<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cotton;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CottonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cottons = Cotton::get();
        return view('admin.cotton.cotton-details', compact('cottons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cotton.add-cotton');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|unique:cottons,name',
        'type' => 'required|string',
        'description' => 'required|string',
        'brocher_pdf' => 'required|mimes:pdf,doc,docx|file|max:5120',
        'brocher2_pdf' => 'required|mimes:pdf,doc,docx|file|max:5120',
        'youtube_link' => 'required|url',
        'status' => 'required|in:0,1',
        'priority' => 'required|integer|unique:cottons,priority',
        'product_image' => 'required|image|mimes:jpg,jpeg,png,webp',
        'brocher_image_01' => 'required|image|mimes:jpg,jpeg,png,webp',
        'brocher_image_02' => 'required|image|mimes:jpg,jpeg,png,webp',
    ]);

    $service = new Cotton();

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
    $service->type = $request->input('type');
    $service->slug = Str::slug($request->input('name'));
    $service->descritption = $request->input('description');
    $service->youtube_link = $request->input('youtube_link');
    $service->status = $request->input('status');
    $service->priority = $request->input('priority');
    $service->save();
    return redirect()->route('cottons.index')->with('success', 'Cotton details added successfully');
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
        $cotton = Cotton::find($id);
        return view('admin.cotton.edit-cotton',compact('cotton'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|unique:cottons,name,'.$id,
            'type' => 'required|string',
            'description' => 'required|string',
            'brocher_pdf' => 'nullable|mimes:pdf,doc,docx|file|max:5120',
            'brocher2_pdf' => 'nullable|mimes:pdf,doc,docx|file|max:5120',
            'youtube_link' => 'required|url',
            'status' => 'required|in:0,1',
            'priority' => 'required|integer|unique:cottons,priority,'.$id,
            'product_image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'brocher_image_02' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'brocher_image_01' => 'nullable|image|mimes:jpg,jpeg,png,webp',
        ]);
    
        $service =  Cotton::find($id);
    
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
        $service->type = $request->input('type');
        $service->slug = Str::slug($request->input('name'));
        $service->descritption = $request->input('description');
        $service->youtube_link = $request->input('youtube_link');
        $service->status = $request->input('status');
        $service->priority = $request->input('priority');
        $service->save();
        return redirect()->route('cottons.index')->with('success', 'Cotton details update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Cotton::find($id)->delete();
        return redirect()->back()->with('success','Cotton records deleted successfully');
    }
}
