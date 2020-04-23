@extends('layouts.index')

@section('content') 
<form action="/projects/{{$project->id}}" method="POST">
    @csrf
    @method('put')
     <div class="form-group">
       <label for="">Project name</label>
       <input type="text" name="project_name" id="" class="form-control" placeholder="Project name" 
     value="{{$project->project_name}}" aria-describedby="helpId">
     </div>   

     <div class="form-group">
        <label for="">Description</label>
        <textarea type="text" name="description" id="" class="form-control" placeholder="Description" aria-describedby="helpId">{{$project->description}}</textarea>
      </div> 

      <div class="form-group">
        <label for="">Users: </label>
        <select name="user_id" id="user_id">
            @foreach ($users as $user)
        <option {{$user->id==$project->user_id ?"selected":""}} value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
        @endsection