<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Innovative;
use Illuminate\Http\Request;

class InnovativeController extends Controller
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
        $about = Innovative::find($id);
        return view('admin.research.edit-innovative',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp',
            'title' =>'required|string',
            'title_01' =>'required|string',
            'title_02' =>'required|string',
            'title_03' =>'required|string',
            'title_04' =>'required|string',
            'description_01' =>'required|string',
            'description_02' =>'required|string',
            'description_03' =>'required|string',
            'description_04' =>'required|string',
           ]);
        
        $about = Innovative::find($id);
        if($request->hasFile('image')){
            $filename = $request->file('image')->getClientOriginalExtension();
            $name = time().'.'.$filename;
            $filepath = $request->file('image')->move(public_path('assets/dynamics'),$name);
            $oldImagePath2 = public_path('assets/dynamics/' . $about->image);
            if (file_exists($oldImagePath2)) {
                unlink($oldImagePath2);
            }
            $about->image = $name;
        }
        $about->title = $request->title;
        $about->title_01 = $request->title_01;
        $about->title_02 = $request->title_02;
        $about->title_03 = $request->title_03;
        $about->title_04 = $request->title_04;
        $about->description_01 = $request->description_01;
        $about->description_02 = $request->description_02;
        $about->description_03 = $request->description_03;
        $about->description_04 = $request->description_04;
        $about->save();
        return redirect()->back()->with('success', 'Innovative Research Initiatives
                details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
