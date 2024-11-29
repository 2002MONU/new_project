<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeadCorporate;
use Illuminate\Http\Request;

class HeadCorporateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $corporates = HeadCorporate::get();
        return view('admin.head-office.field-details',compact('corporates'));
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
        $fielddCrop = HeadCorporate::find($id);
        return view('admin.head-office.edit-field',compact('fielddCrop'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'branch_type' => 'required|string',
            'branch_location' => 'required|string',
            'branch_name' => 'required|string',
            'address' => 'required|string',
            'telephone' => 'required|string',
            'fax' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp',
            'logo' => 'required|image|mimes:jpg,jpeg,png,webp',
         ]);
    
        $service =  HeadCorporate::find($id);
        
    
        if ($request->hasFile('image')) {
            $filename = $request->file('image')->getClientOriginalExtension();
            $name = (time() + 3) . '.' . $filename;
            $request->file('image')->move(public_path('assets/dynamics'), $name);
            $service->image = $name;
        }
        if ($request->hasFile('logo')) {
            $filename = $request->file('logo')->getClientOriginalExtension();
            $name = (time() + 3) . '.' . $filename;
            $request->file('logo')->move(public_path('assets/dynamics'), $name);
            $service->logo = $name;
        }
    
        $service->branch_type = $request->input('branch_type');
        $service->branch_location = $request->input('branch_location');
        $service->branch_name = $request->input('branch_name');
        $service->fax = $request->input('fax');
        $service->address = $request->input('address');
        $service->telephone = $request->input('telephone');
        $service->save();
        return redirect()->route('head-corporates.index')->with('success', 'Head Office and Corporate details added successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
