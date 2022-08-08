@extends('layouts.post')

@section('title' , 'Edit')

@section('content')

<form method="POST" action="{{Route('posts.update' , ['id' => $Post['id'] ])}}">
    @method('PUT')
    @csrf
    <div class="mb-3" >
      <label for="title" class="form-label" >Title</label>
      <input type="title" name="title" class="form-control" id="title" aria-describedby="emailHelp" value="{{$Post['title']}}">

    </div>
    <div class="mb-3">
      <label for="body" class="form-label" >Body</label>
      <input type="text" name="body" class="form-control" id="body" value="{{$Post['body']}}">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
@endsection