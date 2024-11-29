<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SeedProduction;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;

class SeedProductionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stateOfCenter  = SeedProduction::get();
        return view('admin.seedproduction.field-details',compact('stateOfCenter'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.seedproduction.add-field');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
             'status' => 'required|in:0,1',
             'priority' => 'required|integer|unique:seed_productions,priority',
             'image' => 'required|image|mimes:jpg,jpeg,png,webp',
          ]);
     
         $service =new  SeedProduction;
         if ($request->hasFile('image')) {
             $filename = $request->file('image')->getClientOriginalExtension();
             $name = (time() + 3) . '.' . $filename;
             $request->file('image')->move(public_path('assets/dynamics'), $name);
            //  $oldImagePath2 = public_path('assets/dynamics/' . $service->image_01);
            // if (file_exists($oldImagePath2)) {
            //     unlink($oldImagePath2);
            // }
             $service->image = $name;
         }
        $service->description = $request->input('description');
         $service->title = $request->input('title');
         $service->priority = $request->input('priority');
         $service->status = $request->input('status');
         $service->save();
         return redirect()->route('seed-productions.index')->with('success', 'Add Seed Production & Processing Facilities successfully');
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
        $fielddCrop = SeedProduction::find($id);
        return view('admin.seedproduction.edit-field',compact('fielddCrop'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
             'status' => 'required|in:0,1',
             'priority' => 'required|integer|unique:seed_productions,priority,'.$id,
             'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
          ]);
     
         $service =  SeedProduction::find($id);
         if ($request->hasFile('image')) {
             $filename = $request->file('image')->getClientOriginalExtension();
             $name = (time() + 3) . '.' . $filename;
             $request->file('image')->move(public_path('assets/dynamics'), $name);
             $oldImagePath2 = public_path('assets/dynamics/' . $service->image);
            if (file_exists($oldImagePath2)) {
                unlink($oldImagePath2);
            }
             $service->image = $name;
         }
        $service->description = $request->input('description');
         $service->title = $request->input('title');
         $service->priority = $request->input('priority');
         $service->status = $request->input('status');
         $service->save();
         return redirect()->route('seed-productions.index')->with('success', 'Add Seed Production & Processing Facilities successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
         SeedProduction::find($id)->delete();
        return redirect()->back()->with('success','Records deleted successfully');
    }
}
