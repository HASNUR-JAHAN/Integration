<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('user.allproject');
    }



    public function store(Request $request)
    {
        $project = new Project();
        $project->category_id = $request->category_id;
        $project->name = $request->name;
        $project->description = $request->description;
        $project->projectlink = $request->projectlink;

        $image = $request->file('image');
        $image_Name = time() . '.' . $image->extension();
        $image->move(public_path('Image/'), $image_Name);
        $image = 'Image/' . $image_Name;
        $project->image = $image;


        $project->save();
        return back()->with("project_added", "Your project has been added successfully!");
    }

    public function addproject()
    {
        $project_categories = ProjectCategory::all();
        return view('user.addproject', compact('project_categories'));
    }

    public function allproject()
    {
        $project_categories = ProjectCategory::all();
        $projects = Project::all();
        return view('user.allproject', compact('project_categories', 'projects'));
    }

    public function singleproject($id)
    {
        $Project = Project::find($id);
        // $project_categories = ProjectCategory::all();
        return view('user.projectdetails', compact('Project'));
    }
}
