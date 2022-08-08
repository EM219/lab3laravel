@extends('layouts.app')

@section('title' , 'Edit')

@section('content')

<form method="POST" action="{{Route('users.update' , ['id' => $User['id'] ])}}">
    @method('PUT')
    @csrf
    <div class="mb-3" >
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" name="name" class="form-control" id="exampleInputEmail1"  value="{{$User['name']}}" aria-describedby="emailHelp">

    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label" name="email">Email</label>
      <input type="email" name="email" class="form-control" id="exampleInputPassword1"  value="{{$User['email']}}">
    </div>
    <div class="mb-3 ">
    <label for="exampleInputPassword1" class="form-label" name="password">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" value="{{$User['password']}}">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
@endsection