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
        $slider = Slider::find($id);
        return view('admin.homepage.edit-slider', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string',
            'heading' => 'required|string',
            'round_text' => 'required|string',
            'banner_image' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
            'middle_icon' => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
           
        ]);

        $slider =  Slider::find($id);
        if ($request->hasFile('banner_image')) {
            $filename = $request->file('banner_image')->getClientOriginalExtension();
            $name = time() . '.' . $filename;  // send different name
            $filepath = $request->file('banner_image')->move(public_path('assets/dynamics'), $name); // image folder 
            $oldImagePath2 = public_path('assets/dynamics/' . $slider->banner_image);
            if (file_exists($oldImagePath2)) {
                unlink($oldImagePath2);
            }
            $slider->banner_image = $name;
        }
        if ($request->hasFile('middle_icon')) {
            $filename = $request->file('middle_icon')->getClientOriginalExtension();
            $name = time() . '.' . $filename;  // send different name
            $filepath = $request->file('middle_icon')->move(public_path('assets/dynamics'), $name); // image folder 
            $oldImagePath2 = public_path('assets/dynamics/' . $slider->middle_icon);
            if (file_exists($oldImagePath2)) {
                unlink($oldImagePath2);
            }
            $slider->middle_icon = $name;
        }
        $slider->title = $request->title;
        $slider->heading = $request->heading;
        $slider->round_text = $request->round_text;
        $slider->save();
        return redirect()->back()->with('success', 'Slider  Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
