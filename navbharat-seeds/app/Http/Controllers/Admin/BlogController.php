<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::get();
        return view('admin.blog.blog-details', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.add-blog-details');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|unique:blogs,title',
            'main_description' => 'required|string',
            'postBy' => 'required|string',
            'description_02' => 'required|string',
            'thought_title' => 'required|string',
            'thought_user' => 'required|string',
            'title_01' => 'required|string',
            'description_03' => 'required|string',
            'status' => 'required|in:0,1',
            'priority' => 'required|integer|unique:blogs,priority',
            'main_image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'image_01' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'image_02' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',

        ]);
        $blog = new Blog();

        if ($request->hasFile('main_image')) {
            $filename = $request->file('main_image')->getClientOriginalExtension();
            $name = (time() + 1) . '.' . $filename;
            $filepath = $request->file('main_image')->move(public_path('assets/dynamics'), $name);
            $blog->main_image = $name;
        }
        if ($request->hasFile('image_01')) {
            $filename = $request->file('image_01')->getClientOriginalExtension();
            $name = (time() + 2) . '.' . $filename;
            $filepath = $request->file('image_01')->move(public_path('assets/dynamics'), $name);
            $blog->image_01 = $name;
        }
        if ($request->hasFile('image_02')) {
            $filename = $request->file('image_02')->getClientOriginalExtension();
            $name = (time() + 3) . '.' . $filename;
            $filepath = $request->file('image_02')->move(public_path('assets/dynamics'), $name);
            $blog->image_02 = $name;
        }


        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->main_description = $request->main_description;
        $blog->description_02 = $request->description_02;
        $blog->postBy = $request->postBy;
        $blog->thought_title = $request->thought_title;
        $blog->thought_user = $request->thought_user;
        $blog->title_01 = $request->title_01;
        $blog->description_03 = $request->description_03;
        $blog->status = $request->status;
        $blog->priority = $request->priority;
        $blog->save();
        return redirect()->route('blogs.index')->with('success', 'Blogs added successfully');
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
        $blog = Blog::find($id);
        return view('admin.blog.edit-blog', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|string|unique:blogs,title,' . $id,
            'main_description' => 'required|string',
            'postBy' => 'required|string',
            'description_02' => 'required|string',
            'thought_title' => 'required|string',
            'thought_user' => 'required|string',
            'title_01' => 'required|string',
            'description_03' => 'required|string',
            'status' => 'required|in:0,1',
            'priority' => 'required|integer|unique:blogs,priority,' . $id,
            'main_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'image_01' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'image_02' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

        ]);
        $blog =  Blog::find($id);

        if ($request->hasFile('main_image')) {
            $filename = $request->file('main_image')->getClientOriginalExtension();
            $name = (time() + 1) . '.' . $filename;
            $filepath = $request->file('main_image')->move(public_path('assets/dynamics'), $name);
            $blog->main_image = $name;
        }
        if ($request->hasFile('image_01')) {
            $filename = $request->file('image_01')->getClientOriginalExtension();
            $name = (time() + 2) . '.' . $filename;
            $filepath = $request->file('image_01')->move(public_path('assets/dynamics'), $name);
            $blog->image_01 = $name;
        }
        if ($request->hasFile('image_02')) {
            $filename = $request->file('image_02')->getClientOriginalExtension();
            $name = (time() + 3) . '.' . $filename;
            $filepath = $request->file('image_02')->move(public_path('assets/dynamics'), $name);
            $blog->image_02 = $name;
        }


        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->main_description = $request->main_description;
        $blog->description_02 = $request->description_02;
        $blog->postBy = $request->postBy;
        $blog->thought_title = $request->thought_title;
        $blog->thought_user = $request->thought_user;
        $blog->title_01 = $request->title_01;
        $blog->description_03 = $request->description_03;
        $blog->status = $request->status;
        $blog->priority = $request->priority;
        $blog->save();
        return redirect()->route('blogs.index')->with('success', 'Blogs updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::find($id);
        if ($blog) {
            $mainImagePath = public_path('assets/dynamics/' . $blog->main_image);
            $mainImagePath1 = public_path('assets/dynamics/' . $blog->image_01);
            $mainImagePath2 = public_path('assets/dynamics/' . $blog->image_02);
            if (file_exists($mainImagePath)) {
                unlink($mainImagePath);  // Delete the main image
            }
            if (file_exists($mainImagePath1)) {
                unlink($mainImagePath1);  // Delete the main image
            }
            if (file_exists($mainImagePath2)) {
                unlink($mainImagePath2);  // Delete the main image
            }
        }
          // Delete the blog from the database
        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully along with associated images.');
    }
}
