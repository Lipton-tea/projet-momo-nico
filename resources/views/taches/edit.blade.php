@extends('layouts.index')

@section('content') 
<form action="/taches/{{$tache->id}}" method="POST">
    @csrf
    @method('post')
     <div class="form-group">
       <label for="">Tache name</label>
       <input type="text" name="tache_name" id="" class="form-control" placeholder="Tache name" 
     value="{{$tache->tache_name}}" aria-describedby="helpId">
     </div>   

     <div class="form-group">
        <label for="">Description</label>
        <textarea type="text" name="description" id="" class="form-control" placeholder="Description" aria-describedby="helpId">{{$tache->description}}</textarea>
      </div> 

      <div class="form-group">
        <label for="">Projects: </label>
        <select name="project_id" id="project_id">
            @foreach ($projects as $project)
        <option {{$project->id==$tache->project_id ?"selected":""}} value="{{$project->id}}">{{$project->name}}</option>
            @endforeach
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
        @endsection