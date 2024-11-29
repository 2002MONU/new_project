<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
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
        $about = About::find($id);
        return view('admin.about.edit-about',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'top_image' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif',
            'bottom_image' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif',
            'title' =>'required|string',
            'description' =>'required|string',
            'years_of_Experienced' =>'required|string',
            
        ]);
        
        $about = About::find($id);
        if($request->hasFile('top_image')){
            $filename = $request->file('top_image')->getClientOriginalExtension();
            $name = time().'.'.$filename;
            $filepath = $request->file('top_image')->move(public_path('assets/dynamics'),$name);
            $oldImagePath2 = public_path('assets/dynamics/' . $about->top_image);
            if (file_exists($oldImagePath2)) {
                unlink($oldImagePath2);
            }
            $about->top_image = $name;
        }
        if($request->hasFile('bottom_image')){
            $filename = $request->file('bottom_image')->getClientOriginalExtension();
            $name = (time()+1).'.'.$filename;
            $filepath = $request->file('bottom_image')->move(public_path('assets/dynamics'),$name);
            $oldImagePath2 = public_path('assets/dynamics/' . $about->bottom_image);
            if (file_exists($oldImagePath2)) {
                unlink($oldImagePath2);
            }
            $about->bottom_image = $name;
        }
       
   
        $about->title = $request->title;
        $about->description = $request->description;
        $about->years_of_Experienced = $request->years_of_Experienced;
        $about->save();
        return redirect()->back()->with('success', 'About details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
