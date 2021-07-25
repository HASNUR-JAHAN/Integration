<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\blog;
use App\Models\Project;

class AdminBlog extends Controller
{
    public function __construct()
    {
        $this->middleware('authadmin');
    }

    public function adminblog()
    {
        $blogs = blog::all();
        return view('admin.blog', compact('blogs'));
    }

    public function frontpageblog()
    {
        $blogs = blog::orderby('created_at', 'desc')->take(2)->get();
        $projects = Project::orderby('created_at', 'desc')->take(2)->get();
        return view('admin.dashboard', compact('projects', 'blogs'));
    }



    public function delete($id)
    {
        $blogs = blog::find($id);
        unlink(public_path($blogs->image));
        $blogs->delete();
        return back()->with("Blog_delete", "blogs has been deleted");
    }

    public    function    edit($id)
    {
        $blog    =    blog::find($id);
        return    view('admin.editblog', compact('blog'));
    }
    public    function    update(Request    $request, $id)
    {
        $blogcategory = $request->blogcategory;
        $blogname = $request->blogname;
        $blogdetails = $request->blogdetails;
        $bloglink = $request->bloglink;
        $old_image = $request->old_image;


        $image = $request->file('image');
        $update = blog::find($request->id);

        $update->blogcategory = $blogcategory;
        $update->blogname = $blogname;
        $update->blogdetails = $blogdetails;
        $update->bloglink = $bloglink;

        if ($request->has('image')) {
            unlink(public_path($old_image));
            $image_Name = time() . '.' . $image->extension();
            $image->move(public_path('Image/'), $image_Name);
            $image = 'Image/' . $image_Name;
            $update->image = $image;
        }

        $update->save();
        return redirect('/admin/blog')->with("blog_added", "Record has been Updated!");
    }
}
