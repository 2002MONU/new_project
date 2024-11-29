<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MileStone;
use Illuminate\Http\Request;

class MileStoneController extends Controller
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
        $about = MileStone::find($id);
        return view('admin.about.mile-stone',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title_01' => 'required|string',
            'title_02' => 'required|string',
            'title_03' => 'required|string',
            'title_04' => 'required|string',
            'descriotion_01' => 'required|string',
            'descriotion_02' => 'required|string',
            'descriotion_03' => 'required|string',
            'descriotion_04' => 'required|string',
          ]);
     
         $service =  MileStone::find($id);
         $service->descriotion_01 = $request->input('descriotion_01');
         $service->descriotion_02 = $request->input('descriotion_02');
         $service->descriotion_03 = $request->input('descriotion_03');
         $service->descriotion_04 = $request->input('descriotion_04');
         $service->title_04 = $request->input('title_04');
         $service->title_03 = $request->input('title_03');
         $service->title_02 = $request->input('title_02');
         $service->title_01 = $request->input('title_01');
         $service->save();
         return redirect()->back()->with('success', 'Mile Stone details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
