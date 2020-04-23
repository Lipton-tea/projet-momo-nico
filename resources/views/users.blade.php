@extends('layouts.index')
   
@section('content')
    <a href="/users/create" class="btn btn-success">Create</a>
        @foreach($users as $user)
        <ul>
        <li class='mt-5 li-group-item d-flex justify-content-between'>
        <span> Id: {{$user->id}}</span>
            <span>Nom: {{$user->name}}</span>
            <span>Email: {{$user->email}}</span>
            <span>Mot de passe: {{$user->password}}</span>
            <a href="/users/{{$user->id}}/edit" class="btn btn-primary">update</a>
        </li>
    </ul>
    @endforeach
    @endsection
