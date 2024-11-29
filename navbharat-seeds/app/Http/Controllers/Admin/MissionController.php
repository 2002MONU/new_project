<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mission;
use Illuminate\Http\Request;

class MissionController extends Controller
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
        $about = Mission::find($id);
        return view('admin.about.edit-mission',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image_02' => 'nullable|image|mimes:jpeg,png,jpg,webp',
            'image_01' => 'nullable|image|mimes:jpeg,png,jpg,webp',
            'title_02' =>'required|string',
            'title_01' =>'required|string',
            'descriotion_02' =>'required|string',
            'descriotion_01' =>'required|string',
           ]);
        
        $about = Mission::find($id);
        if($request->hasFile('image_01')){
            $filename = $request->file('image_01')->getClientOriginalExtension();
            $name = time().'.'.$filename;
            $filepath = $request->file('image_01')->move(public_path('assets/dynamics'),$name);
            // $oldImagePath2 = public_path('assets/dynamics/' . $about->image_01);
            // if (file_exists($oldImagePath2)) {
            //     unlink($oldImagePath2);
            // }
            $about->image_01 = $name;
        }
        if($request->hasFile('image_02')){
            $filename = $request->file('image_02')->getClientOriginalExtension();
            $name = (time()+1).'.'.$filename;
            $filepath = $request->file('image_02')->move(public_path('assets/dynamics'),$name);
            // $oldImagePath2 = public_path('assets/dynamics/' . $about->image_02);
            // if (file_exists($oldImagePath2)) {
            //     unlink($oldImagePath2);
            // }
            $about->image_02 = $name;
        }
        $about->title_02 = $request->title_02;
        $about->title_01 = $request->title_01;
        $about->descriotion_01 = $request->descriotion_01;
        $about->descriotion_02 = $request->descriotion_02;
        $about->save();
        return redirect()->back()->with('success', 'Mission updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
