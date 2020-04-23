@extends('layouts.index')

@section('content') 
<form action="/taches/{{$tach->id}}" method="POST">
    @csrf
    @method('put')
     <div class="form-group">
       <label for="">Tache name</label>
       <input type="text" name="tache_name" id="" class="form-control" placeholder="Tache name" 
     value="{{$tach->tache_name}}" aria-describedby="helpId">
     </div>   

     <div class="form-group">
        <label for="">Description</label>
        <textarea type="text" name="description" id="" class="form-control" placeholder="Description" aria-describedby="helpId">{{$tach->description}}</textarea>
      </div> 

      <div class="form-group">
        <label for="">Projects: </label>
        <select name="project_id" id="project_id">
            @foreach ($projects as $project)
        <option {{$project->id==$tach->project_id ?"selected":""}} value="{{$project->id}}">{{$project->project_name}}</option>
            @endforeach
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
        @endsection