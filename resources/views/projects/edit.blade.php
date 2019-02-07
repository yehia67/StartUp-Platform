@extends('layouts.app')

@section('title', 'Edit Project')

@section('content')
    <div class="jumbotron">
        <h1>Edit a Project</h1>
        <p class="lead">Use the simple form below to update an existing project in the database</p>
    </div>

    <form method="POST" action="{{ action('ProjectsController@update', $project->id) }}">
        @method('patch')
        @csrf
        <div class="form-group">
            <label for="title">Project Title</label>
        <input type="text" class="form-control" name="title" required value="{{ $project->title }}">
        </div>
        <div class="form-group">
            <label for="title">Project Description</label>
            <textarea type="text" class="form-control" name="description" required>{{ $project->description }}</textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit" title="Update Project">Update Project</button>
        </div>
    </form>
    <form method="POST" action="{{ action('ProjectsController@destroy', $project->id )}}">
        @method('delete')
        @csrf
        <div class="form-group">
            <button class="btn btn-danger js-delete-project-button" type="submit" title="Delete Project">Delete Project</button>
        </div>
    </form>
@endsection