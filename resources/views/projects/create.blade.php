@extends('layouts.app')

@section('title', 'Create Project')

@section('content')
    <div class="jumbotron">
        <h1>Create a New Project</h1>
        <p class="lead">Use the simple form below to add a new project to the database</p>
    </div>

    <form method="POST" action="{{ action('ProjectsController@store') }}">
        @csrf
        <div class="form-group">
            <label for="title">Project Title</label>
        <input type="text" class="form-control" name="title" required value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="title">Project Description</label>
            <textarea type="text" class="form-control" name="description" required>{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Create Project</button>
        </div>
    </form>
@endsection