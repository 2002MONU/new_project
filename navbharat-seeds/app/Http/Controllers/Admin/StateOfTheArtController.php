<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StateOfTheArt;
use Illuminate\Http\Request;

class StateOfTheArtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stateOfCenter = StateOfTheArt::get();
        return view('admin.stateofart.field-details',compact('stateOfCenter'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.stateofart.add-field');
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
            'priority' => 'required|integer|unique:state_of_the_art,priority',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp',
         ]);
    
        $service = new StateOfTheArt();
        
    
        if ($request->hasFile('image')) {
            $filename = $request->file('image')->getClientOriginalExtension();
            $name = (time() + 3) . '.' . $filename;
            $request->file('image')->move(public_path('assets/dynamics'), $name);
            $service->image = $name;
        }
    
        $service->description = $request->input('description');
        $service->title = $request->input('title');
        $service->priority = $request->input('priority');
        $service->status = $request->input('status');
        $service->save();
        return redirect()->route('state-of-centers.index')->with('success', 'state-of-centers details added successfully');
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
        $fielddCrop= StateOfTheArt::find($id);
        return view('admin.stateofart.edit-field',compact('fielddCrop'));
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
             'priority' => 'required|integer|unique:state_of_the_art,priority,'.$id,
             'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
          ]);
     
         $service =  StateOfTheArt::find($id);
         if ($request->hasFile('image')) {
             $filename = $request->file('image')->getClientOriginalExtension();
             $name = (time() + 3) . '.' . $filename;
             $request->file('image')->move(public_path('assets/dynamics'), $name);
             $oldImagePath2 = public_path('assets/dynamics/' . $service->image_01);
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
         return redirect()->route('state-of-centers.index')->with('success', 'state-of-centers details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        StateOfTheArt::find($id)->delete();
        return redirect()->back()->with('success','Records deleted successfully');
    }
}
