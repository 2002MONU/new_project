<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::get();
        return view('admin.homepage.slider-details',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.homepage.add-slider');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'heading' => 'required|string',
            'description' => 'required|string',
            'priority' => 'required|integer|unique:sliders,priority',
            'banner_image' =>'required|image|mimes:jpg,png,jpeg,webp|max:2048',
            'status' => 'required|in:0,1',
        ]);

        $slider = new Slider();
        if($request->hasFile('banner_image')){
            $filename = $request->file('banner_image')->getClientOriginalExtension();
            $name = time() .'.'.$filename;  // send different name
            $filepath = $request->file('banner_image')->move(public_path('assets/dynamics'),$name); // image folder 
            $slider->image = $name;
        } 
        $slider->title = $request->title;
        $slider->heading = $request->heading;
        $slider->description = $request->description;
        $slider->priority = $request->priority;
        $slider->status = $request->status;
        $slider->save();
        return redirect()->route('sliders.index')->with('success','Slider  added successfully');
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
        $slider = Slider::find($id);
        return view('admin.homepage.edit-slider',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string',
            'heading' => 'required|string',
            'description' => 'required|string',
            'priority' => 'required|integer|unique:sliders,priority,'.$id,
            'banner_image' =>'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
            'status' => 'required|in:0,1',
        ]);

        $slider =  Slider::find($id);
        if($request->hasFile('banner_image')){
            $filename = $request->file('banner_image')->getClientOriginalExtension();
            $name = time() .'.'.$filename;  // send different name
            $filepath = $request->file('banner_image')->move(public_path('assets/dynamics'),$name); // image folder 
            $slider->image = $name;
        } 
        $slider->title = $request->title;
        $slider->heading = $request->heading;
        $slider->description = $request->description;
        $slider->priority = $request->priority;
        $slider->status = $request->status;
        $slider->save();
        return redirect()->route('sliders.index')->with('success','Slider  added successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Slider = Slider::where('id', $id)->first();
        if($Slider)
        {
            $imagePath1 = public_path('assets/dynamics/' . $Slider->image);
            if (file_exists($imagePath1)) {
                // Delete the first image
                unlink($imagePath1);
            }
        $Slider->delete();
            
        return redirect()->back()->with('success', 'Images and associated record deleted successfully.');
       }
         else
        {
        return redirect()->back()->with('error', 'Image record not found.');
        }

    }
}

