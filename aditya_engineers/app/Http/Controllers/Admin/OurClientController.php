<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OurClient;
use Illuminate\Http\Request;

class OurClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $our_client = OurClient::get();
        return view('admin.ourclient.client-details',compact('our_client'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ourclient.add-client');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png,webp|max:2048',
            
            'status' => 'required|in:0,1',
            'priority' => 'required|min:1|unique:our_clients,priority'
        ]);

        $gallery =  new OurClient();
        if ($request->hasFile('image')) {
           
            $filename = $request->file('image')->getClientOriginalExtension();
            $name = time().'.'.$filename;
            $filepath = $request->file('image')->move(public_path('assets/dynamics'),$name);
           $gallery->image = $name;
        }
        $gallery->status = $request->status;
        $gallery->priority = $request->priority;
        $gallery->save();
        return redirect()->route('our-clients.index')->with('success', 'Our Clients added successfully');
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
        $ourClient = OurClient::find($id);
        return view('admin.ourclient.edit-client',compact('ourClient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048',
             'status' => 'required|in:0,1',
            'priority' => 'required|min:1|unique:our_clients,priority,'.$id,
        ]);

        $gallery =   OurClient::find($id);
        if ($request->hasFile('image')) {
           
            $filename = $request->file('image')->getClientOriginalExtension();
            $name = time().'.'.$filename;
            $filepath = $request->file('image')->move(public_path('assets/dynamics'),$name);
           $gallery->image = $name;
        }
        $gallery->status = $request->status;
        $gallery->priority = $request->priority;
        $gallery->save();
        return redirect()->route('our-clients.index')->with('success', 'Our Clients update successfully');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery =   OurClient::find($id);
        if($gallery){
            $imagePath = public_path('assets/dynamics/' . $gallery->image);

            // Check if the file exists before deleting
            if (file_exists($imagePath)) {
                unlink($imagePath);  // Delete the file
            }
        }
        $gallery->delete();
        return redirect()->back()->with('success','Our Client image deleted successfully');
    }
}
