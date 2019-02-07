@extends('layouts.app')

@section('title', 'Show Project')

@section('content')
    <div class="jumbotron">
        <h1>Show Project</h1>
        <p class="lead">Show current project</p>
    <a href="{{ action('ProjectsController@create') }}" class="btn btn-primary" title="Create Project">Create Project</a>
    </div>
  <!--hna-->
  <div class="col-md-4">
            <div class="thumbnail">
                <img src="https://via.placeholder.com/242x200" alt="...">
                <div class="caption">
                    <h3>{{ $project->title }}</h3>
                    <p> {{ $project->description }}</p>
                    <p><a class="btn btn-primary" href="{{ action('ProjectsController@edit', $project->id) }}" title="Edit Project">Edit Project</a></p>
                </div>
            </div>
        </div>
</div>
@endsection
 


<!-- <ul class="project list-group">
        <li class="project-item list-group-item"><strong>ID:</strong> {{ $project->id }}</li>
        <li class="project-item list-group-item"><strong>Title:</strong> {{ $project->title }}</li>
        <li class="project-item list-group-item"><strong>Description:</strong> {{ $project->description }}</li>
        <li class="project-item list-group-item"><strong>Actions:</strong> <a class="btn btn-primary" href="{{ action('ProjectsController@edit', $project->id) }}" title="Edit Project">Edit Project</a></li>
    </ul>
    <div class="form-group">-->