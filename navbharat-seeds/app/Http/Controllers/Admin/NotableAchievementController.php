<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NotableAchievement;
use Illuminate\Http\Request;

class NotableAchievementController extends Controller
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
        $about = NotableAchievement::find($id);
        return view('admin.research.novtable',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image_01' => 'nullable|image|mimes:jpeg,png,jpg,webp',
            'image_02' => 'nullable|image|mimes:jpeg,png,jpg,webp',
            'image_03' => 'nullable|image|mimes:jpeg,png,jpg,webp',
            'image_04' => 'nullable|image|mimes:jpeg,png,jpg,webp',
            'image_05' => 'nullable|image|mimes:jpeg,png,jpg,webp',
            'title' =>'required|string',
            'title_01' =>'required|string',
            'title_02' =>'required|string',
            'title_03' =>'required|string',
            'title_04' =>'required|string',
            'title_05' =>'required|string',
            'description_01' =>'required|string',
            'description_02' =>'required|string',
            'description_03' =>'required|string',
            'description_04' =>'required|string',
            'description_05' =>'required|string',
           ]);
        
        $about = NotableAchievement::find($id);
        if($request->hasFile('image_01')){
            $filename = $request->file('image_01')->getClientOriginalExtension();
            $name = time().'.'.$filename;
            $filepath = $request->file('image_01')->move(public_path('assets/dynamics'),$name);
            $oldImagePath2 = public_path('assets/dynamics/' . $about->image_01);
            if (file_exists($oldImagePath2)) {
                unlink($oldImagePath2);
            }
            $about->image_01 = $name;
        }
        if($request->hasFile('image_02')){
            $filename = $request->file('image_02')->getClientOriginalExtension();
            $name = (time()+2).'.'.$filename;
            $filepath = $request->file('image_02')->move(public_path('assets/dynamics'),$name);
            $oldImagePath2 = public_path('assets/dynamics/' . $about->image_02);
            if (file_exists($oldImagePath2)) {
                unlink($oldImagePath2);
            }
            $about->image_02 = $name;
        }
        if($request->hasFile('image_03')){
            $filename = $request->file('image_03')->getClientOriginalExtension();
            $name = (time()+3).'.'.$filename;
            $filepath = $request->file('image_03')->move(public_path('assets/dynamics'),$name);
            $oldImagePath2 = public_path('assets/dynamics/' . $about->image_03);
            if (file_exists($oldImagePath2)) {
                unlink($oldImagePath2);
            }
            $about->image_03 = $name;
        }
        if($request->hasFile('image_04')){
            $filename = $request->file('image_04')->getClientOriginalExtension();
            $name = (time()+4).'.'.$filename;
            $filepath = $request->file('image_04')->move(public_path('assets/dynamics'),$name);
            $oldImagePath2 = public_path('assets/dynamics/' . $about->image_04);
            if (file_exists($oldImagePath2)) {
                unlink($oldImagePath2);
            }
            $about->image_04 = $name;
        }
        if($request->hasFile('image_05')){
            $filename = $request->file('image_05')->getClientOriginalExtension();
            $name = (time()+5).'.'.$filename;
            $filepath = $request->file('image_05')->move(public_path('assets/dynamics'),$name);
            $oldImagePath2 = public_path('assets/dynamics/' . $about->image_05);
            if (file_exists($oldImagePath2)) {
                unlink($oldImagePath2);
            }
            $about->image_05 = $name;
        }
        $about->title = $request->title;
        $about->title_01 = $request->title_01;
        $about->title_02 = $request->title_02;
        $about->title_03 = $request->title_03;
        $about->title_04 = $request->title_04;
        $about->title_05 = $request->title_05;
        $about->description_01 = $request->description_01;
        $about->description_02 = $request->description_02;
        $about->description_03 = $request->description_03;
        $about->description_04 = $request->description_04;
        $about->description_05 = $request->description_05;
        $about->save();
        return redirect()->back()->with('success', 'INotable Achievements
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
