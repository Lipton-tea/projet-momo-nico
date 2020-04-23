@extends('layouts.index')

@section('content')
<a href="/taches/create" class="btn btn-success">Create</a>
@foreach ($taches as $tache)
    <div class="row">
        <div class="col-1">Id: {{$tache->id}}</div>
        <div class="col-3">Name project: {{$tache->tache_name}}</div>
        <div class="col-6">Description: {{$tache->description}} </div>
        <div class="col-2">
        <a href="/taches/{{$tache->id}}/edit" class="btn btn-primary">update</a>
    </div>
</div>
@endforeach
@endsection