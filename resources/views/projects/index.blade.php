@extends('layouts.app')

@section('title', 'Projects Index')

@section('content')
    <div class="jumbotron">
        <h1>All Projects</h1>
        <p class="lead">Display all my current projects</p>
    <a href="{{ action('ProjectsController@create') }}" class="btn btn-primary" title="Create Project">Create Project</a>
    </div>
  
    <div class="row">
    @foreach($projects as $project)
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
        @endforeach
    </div>
        
    
@endsection

  <!--  <ul class="projects-list list-group">   
      <li class="projects-list-item list-group-item">
            <a href="{{ action('ProjectsController@edit', $project->id)}}">
                {{ $project->title }}: {{ $project->description }}</li>
                </ul>
            </a>-->