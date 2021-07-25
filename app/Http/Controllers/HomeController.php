<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
use App\Models\Project;

class HomeController extends Controller
{

    public function show()
    {
        $projects = Project::orderby('created_at', 'desc')->take(3)->get();
        $blogs = blog::orderby('created_at', 'desc')->take(3)->get();
        return view('user.home', compact('projects', 'blogs'));
    }
}
