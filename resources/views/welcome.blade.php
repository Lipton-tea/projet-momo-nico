@extends('layouts.index')

@section('content')
<a href="/projects/create" class="btn btn-success">Create</a>
@foreach ($projects as $project)
    <div class="row">
        <div class="col-1">Id: {{$project->id}}</div>
        <div class="col-3">Name project: {{$project->projectņame}}</div>
        <div class="col-6">Description: {{$project->description}} </div>
        <div class="col-2"></div>
    </div>
@endforeach
@endsection