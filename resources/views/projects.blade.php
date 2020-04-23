@extends('layouts.index')

@section('content')
<a href="/projects/create" class="btn btn-success">Create</a>
@if($message=Session::get('info'))
<div class="alert alert-info">
<p>{{$message}}</p>
</div>
@endif
@foreach ($projects as $project)
    <div class="row">
        <div class="col-1">Id: {{$project->id}}</div>
        <div class="col-3">Name project: {{$project->project_name}}</div>
        <div class="col-6">Description: {{$project->description}} </div>
        <div class="col-2">
        <a href="/projects/{{$project->id}}/edit" class="btn btn-primary">update</a>
        <form action="/projects/{{$project->id}}" method="post">
            @method('delete')
            @csrf
            <button class="btn btn-danger" type="submit">delete</button>
        </form>
    </div>
</div>
@endforeach
@endsection