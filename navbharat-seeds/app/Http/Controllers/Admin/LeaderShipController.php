<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Leadership;
use Illuminate\Http\Request;

class LeaderShipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Leadership::get();
        return view('admin.leadership.testimonial-details',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.leadership.add-testimonial');
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
            'priority' => 'required|integer|unique:leaderships,priority',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);
        $testimonial = new Leadership();
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
        return redirect()->route('leaderships.index')->with('success','Testimonials add successfully');
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
        $testimonial = Leadership::find($id);
        return view('admin.leadership.edit-testimonial',compact('testimonial'));
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
            'priority' => 'required|integer|unique:leaderships,priority,'.$id,
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);
        $testimonial =  Leadership::find($id);
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
        return redirect()->route('leaderships.index')->with('success','Leadership updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        Leadership::find($id)->delete();
        return redirect()->back()->with('success','Records deleted successfully');
    }
}
