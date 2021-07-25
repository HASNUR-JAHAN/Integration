<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectCategory;

class AdminProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('authadmin');
    }

    public function adminproject()
    {
        $projects = Project::all();
        return view('admin.project', compact('projects'));
    }

    /*
    public function frontpageproject()
    {
        $projects = Project::orderby('created_at', 'desc')->take(2)->get();
        return view('admin.dashboard', compact('projects'));
    } */



    public function delete($id)
    {
        $projects = Project::find($id);
        // unlink(public_path($projects->image));
        $projects->delete();
        return back()->with("Project_delete", "Projects has been deleted successfully!");
    }

    public function edit($id)
    {
        $project_categories = ProjectCategory::all();
        $Project = Project::find($id);
        return  view('admin.editproject', compact('project_categories', 'Project'));
    }
    public function update(Request $request, $id)
    {
        $category_id = $request->category_id;
        $name = $request->name;
        $description = $request->description;
        $projectlink = $request->projectlink;
        $old_image = $request->old_image;


        $image = $request->file('image');
        $update = Project::find($request->id);

        $update->category_id = $category_id;
        $update->name = $name;
        $update->description = $description;
        $update->projectlink = $projectlink;

        if ($request->has('image')) {
            //unlink(public_path($old_image));
            $image_Name = time() . '.' . $image->extension();
            $image->move(public_path('Image/'), $image_Name);
            $image = 'Image/' . $image_Name;
            $update->image = $image;
        }

        $update->save();
        return redirect('/admin/project')->with("project_updated", "Project has been Updated Successfully!");
    }
}
