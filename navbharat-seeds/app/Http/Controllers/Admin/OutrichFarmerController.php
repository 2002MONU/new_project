<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OutrichFarmer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class OutrichFarmerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stateOfCenter = OutrichFarmer::get();
        return view('admin.outrich-farmer.field-details',compact('stateOfCenter'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.outrich-farmer.add-field');
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
             'priority' => 'required|integer|unique:outrich_farmers,priority',
             'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
          ]);
     
         $service = new OutrichFarmer();
         
     
         if ($request->hasFile('image')) {
             $filename = $request->file('image')->getClientOriginalExtension();
             $name = (time() + 3) . '.' . $filename;
             $request->file('image')->move(public_path('assets/dynamics'), $name);
            //  $imagpath = public_path('assets/dynamics'.$service->image);
            //  if(file_exists($imagpath)){
            //     unlink($imagpath);
            //  }
             $service->image = $name;
         }
     
         $service->description = $request->input('description');
         $service->title = $request->input('title');
         $service->slug = Str::slug($request->input('title'));
         $service->priority = $request->input('priority');
         $service->status = $request->input('status');
         $service->save();
         return redirect()->route('outrich-farmers.index')->with('success', 'Quality Assurance & Testing update successfully');
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
        $fielddCrop = OutrichFarmer::find($id);
        return view('admin.outrich-farmer.edit-field',compact('fielddCrop'));
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
             'priority' => 'required|integer|unique:outrich_farmers,priority,'.$id,
             'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
          ]);
     
         $service =  OutrichFarmer::find($id);
         
     
         if ($request->hasFile('image')) {
             $filename = $request->file('image')->getClientOriginalExtension();
             $name = (time() + 3) . '.' . $filename;
             $request->file('image')->move(public_path('assets/dynamics'), $name);
             $imagpath = public_path('assets/dynamics'.$service->image);
             if(file_exists($imagpath)){
                unlink($imagpath);
             }
             $service->image = $name;
         }
     
         $service->description = $request->input('description');
         $service->title = $request->input('title');
         $service->slug = Str::slug($request->input('title'));
         $service->priority = $request->input('priority');
         $service->status = $request->input('status');
         $service->save();
         return redirect()->route('outrich-farmers.index')->with('success', 'Quality Assurance & Testing update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        OutrichFarmer::find($id)->delete();
        return redirect()->back()->with('success','Records deleted successfully');
    }
}
