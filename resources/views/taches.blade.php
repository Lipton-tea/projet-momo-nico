@extends('layouts.index')

@section('content')
<a href="/taches/create" class="btn btn-success">Create</a>
@if($message=Session::get('info'))
<div class="alert alert-info">
<p>{{$message}}</p>
</div>
@endif
@foreach ($taches as $tache)
    <div class="row">
        <div class="col-1">Id: {{$tache->id}}</div>
        <div class="col-3">Name tache: {{$tache->tache_name}}</div>
        <div class="col-6">Description: {{$tache->description}} </div>
        <div class="col-2">
        <a href="/taches/{{$tache->id}}/edit" class="btn btn-primary">update</a>
        <form action="/taches/{{$tache->id}}" method="post">
            @method('delete')
            @csrf
            <button class="btn btn-danger" type="submit">delete</button>
        </form>
    </div>
</div>
@endforeach
@endsection