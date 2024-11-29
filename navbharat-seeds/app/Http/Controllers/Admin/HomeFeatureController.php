<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeFeature;
use Illuminate\Http\Request;

class HomeFeatureController extends Controller
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
        $about = HomeFeature::find($id);
        return view('admin.home-feature.edit-about',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'feature_03' => 'required|string',
            'feature_01' => 'required|string',
            'feature_02' => 'required|string',
         ]);
        $testimonial =  HomeFeature::find($id);
       
        $testimonial->feature_03 = $request->feature_03;
        $testimonial->feature_01 = $request->feature_01;
        $testimonial->feature_02 = $request->feature_02;
        $testimonial->save();
        return redirect()->back()->with('success','HomeFeature updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
