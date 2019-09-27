<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = auth()->user()->projects;

        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
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
        if (auth()->user()->isNot($project->user)) {
            abort(403);
        }
        return view('projects.show', compact('project'));
    }
}
