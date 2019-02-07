<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Project;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $validatedAttributes = request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:3']
        ]);

        Project::create($validatedAttributes);

        return redirect()->action('ProjectsController@index')->with('status', 'Project Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  Project $project (Route Model Binding)
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Project $project (Route Model Binding)
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Project $project (Route Model Binding)
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project)
    {
        $validatedAttributes = request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:3']
        ]);

        $project->update($validatedAttributes);

        return redirect()->action('ProjectsController@index')->with('status', 'Project Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Project $project (Route Model Binding)
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->action('ProjectsController@index')->with('status', 'Project Deleted!');
    }
}
