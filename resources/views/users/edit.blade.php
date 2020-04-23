@extends('layouts.index')

@section('content') 
<form action="/users/{{$user->id}}" method="POST">
    @csrf
    @method('put')
     <div class="form-group">
       <label for="">User name</label>
       <input type="text" name="name" id="" class="form-control" placeholder="Name" 
     value="{{$user->name}}" aria-describedby="helpId">
     </div>   

     <div class="form-group">
        <label for="">Email</label>
        <textarea type="text" name="email" id="" class="form-control" placeholder="Email" aria-describedby="helpId">{{$user->email}}</textarea>
      </div> 

      <div class="form-group">
        <label for="">password</label>
        <textarea type="text" name="password" id="" class="form-control" placeholder="Password" aria-describedby="helpId">{{$user->password}}</textarea>
      </div> 


      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
        @endsection