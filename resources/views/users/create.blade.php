@extends('layouts.index')

@section('content')
<form action="/users" method="POST">
    @csrf
    @method('post')
     <div class="form-group">
       <label for="">Name</label>
       <input type="text" name="name" id="" class="form-control" placeholder="Name" aria-describedby="helpId">
     </div>   

     <div class="form-group">
        <label for="">Email</label>
        <textarea type="text" name="email" id="" class="form-control" placeholder="Email" aria-describedby="helpId"></textarea>
      </div>

      <div class="form-group">
        <label for="">Password</label>
        <textarea type="text" name="password" id="" class="form-control" placeholder="Password" aria-describedby="helpId"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection