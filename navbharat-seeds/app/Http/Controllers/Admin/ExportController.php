<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Export;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stateOfCenter = Export::get();
        return view('admin.export.field-details',compact('stateOfCenter'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
           return view('admin.export.add-field');    
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
             'priority' => 'required|integer|unique:exports,priority,',
             'image' => 'required|image|mimes:jpg,jpeg,png,webp',
          ]);
     
         $service = new Export();
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
         return redirect()->route('exports.index')->with('success', 'exports details added successfully');
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
        $fielddCrop = Export::find($id);
        return view('admin.export.edit-field',compact('fielddCrop'));
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
             'priority' => 'required|integer|unique:exports,priority,'.$id,
             'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
          ]);
     
         $service =  Export::find($id);
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
         return redirect()->route('exports.index')->with('success', 'exports details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Export::find($id)->delete();
        return redirect()->back()->with('success','Records deleted successfully');
    }
}
