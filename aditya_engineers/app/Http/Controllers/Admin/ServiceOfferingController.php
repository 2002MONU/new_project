<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceOffering;
use Illuminate\Http\Request;

class ServiceOfferingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $serviceOffering = ServiceOffering::get();
        return view('admin.service-offering.index',compact('serviceOffering'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service-offering.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'designation' => 'required|string',
            
            'status' => 'required|in:0,1',
            'priority' => 'required|integer|unique:service_offerings,priority',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);
        $testimonial = new ServiceOffering();
        if($request->hasFile('image')){
            $filename = $request->file('image')->getClientOriginalExtension();
            $name = time().'.'.$filename;
            $filepath = $request->file('image')->move(public_path('assets/dynamics'),$name);
            $testimonial->image = $name;
        }
        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        
        $testimonial->status = $request->status;
        $testimonial->priority = $request->priority;
        $testimonial->save();
        return redirect()->route('service-offerings.index')->with('success','Service offerings add successfully');
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
        $testimonial = ServiceOffering::find($id);
        return view('admin.service-offering.edit',compact('testimonial'));  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string',
            'designation' => 'required|string',
            
            'status' => 'required|in:0,1',
            'priority' => 'required|integer|unique:service_offerings,priority,'.$id,
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);
        $testimonial =  ServiceOffering::find($id);
        if($request->hasFile('image')){
            $filename = $request->file('image')->getClientOriginalExtension();
            $name = time().'.'.$filename;
            $filepath = $request->file('image')->move(public_path('assets/dynamics'),$name);
            $testimonial->image = $name;
        }
        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        
        $testimonial->status = $request->status;
        $testimonial->priority = $request->priority;
        $testimonial->save();
        return redirect()->route('service-offerings.index')->with('success','Service offerings update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimonial = ServiceOffering::where('id',$id)->first();
        if($testimonial){
            $oldImagePath2 = public_path('assets/dynamics/' . $testimonial->image);
            if (file_exists($oldImagePath2)) {
                unlink($oldImagePath2);
            }
            $testimonial->delete();
            return redirect()->back()->with('success','Service offerings Image & records  delete successfully');
        }else{
            return redirect()->back()->with('error','Service offerings Image does not found successfully');
        }    }
}
