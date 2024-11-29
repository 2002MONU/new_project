<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
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
        $our_Achievement = Achievement::find($id);
        return view('admin.homepage.edit-achievement',compact('our_Achievement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string',
            'bg_image' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048',
            'youtube_link' => 'required|url',
            'years_of_excellence' => 'required|string',
            'hybrid_seeds' => 'required|string',
            'satisfied_farmers' => 'required|string',
            'farmer_testimonials' => 'required|string',
        ]);

        $achievement = Achievement::find($id);
        if($request->hasFile('bg_image')){
            $filename = $request->file('bg_image')->getClientOriginalExtension();
            $name = (time()+1) .'.'.$filename;  // send different name
            $filepath = $request->file('bg_image')->move(public_path('assets/dynamics'),$name); // image folder 
            $achievement->bg_image = $name;
        } 
        $achievement->title = $request-> title;
        $achievement->youtube_link = $request->youtube_link;
        $achievement->years_of_excellence = $request->years_of_excellence;
        $achievement->hybrid_seeds = $request->hybrid_seeds;
        $achievement->satisfied_farmers = $request->satisfied_farmers;
        $achievement->farmer_testimonials = $request->farmer_testimonials;
        $achievement->save();
        return redirect()->back()->with('success','Achievement updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
