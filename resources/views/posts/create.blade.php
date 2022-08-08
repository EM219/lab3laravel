@extends('layouts.post')

@section('title' , 'create')

@section('content')


<form method="POST" action="{{Route('posts.store')}}">
    @csrf
    <div class="mb-3" >
      <label for="title" class="form-label" >Title</label>
      <input type="title" name="title" class="form-control" id="title" aria-describedby="emailHelp">

    </div>
    <div class="mb-3">
      <label for="body" class="form-label" >Body</label>
      <input type="text" name="body" class="form-control" id="body">
    </div>
    
    <button type="submit" class="btn btn-primary">Save</button>
  </form>


@endsection