@extends('layouts.index')
   
@section('content')
<a href="/users/create" class="btn btn-success">Create</a>
@if($message=Session::get('info'))
<div class="alert alert-info">
<p>{{$message}}</p>
</div>
@endif
        @foreach($users as $user)
        <ul>
        <li class='mt-5 li-group-item d-flex justify-content-between'>
        <span> Id: {{$user->id}}</span>
            <span>Nom: {{$user->name}}</span>
            <span>Email: {{$user->email}}</span>
            <span>Mot de passe: {{$user->password}}</span>
            <a href="/users/{{$user->id}}/edit" class="btn btn-primary">update</a>
            <form action="/users/{{$user->id}}" method="post">
                @method('delete')
                @csrf
                <button class="btn btn-danger" type="submit">delete</button>
            </form>
        </li>
    </ul>
    @endforeach
    @endsection
