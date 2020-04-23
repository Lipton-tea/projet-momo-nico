@extends('layouts.index')

@section('content')
<form action="/taches" method="POST">
    @csrf
    @method('post')
     <div class="form-group">
       <label for="">Tache name</label>
       <input type="text" name="tache_name" id="" class="form-control" placeholder="Tache name" aria-describedby="helpId">
     </div>   

     <div class="form-group">
        <label for="">Description</label>
        <textarea type="text" name="description" id="" class="form-control" placeholder="Description" aria-describedby="helpId"></textarea>
      </div>

      <div class="form-group">
        <label for="">Projects: </label>
        <select name="project_id" id="project_id">
            @foreach ($projects as $project)
        <option value="{{$project->id}}">{{$project->project_name}}</option>
            @endforeach
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection