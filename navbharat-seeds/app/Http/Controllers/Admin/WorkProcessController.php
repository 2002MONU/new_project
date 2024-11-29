<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WorkProcess;
use Illuminate\Http\Request;

class WorkProcessController extends Controller
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
        $about = WorkProcess::find($id);
        return view('admin.work-process.edit-about',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'research' => 'required|string',
            'production' => 'required|string',
            'processing' => 'required|string',
            'quality_Control' => 'required|string',
            'final_Product' => 'required|string',
         ]);
        $testimonial =  WorkProcess::find($id);
        $testimonial->production = $request->production;
        $testimonial->research = $request->research;
        $testimonial->processing = $request->processing;
        $testimonial->quality_Control = $request->quality_Control;
        $testimonial->final_Product = $request->final_Product;
        $testimonial->save();
        return redirect()->back()->with('success','WorkProcess updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
