<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function store(Request $request)
    {
        // validate the request
        $attributes = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        auth()->user()->projects()->create($attributes);

        return redirect('/projects');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }
}
