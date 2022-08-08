
@extends('layouts.app')
@section('title' , 'show')
@section('content')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">password</th>
</tr>
</thead>
<tbody>
<tr>
      <th scope="row">{{$User['id']}}</th>
      <td>{{$User['name']}}</td>
      <td>{{$User['email']}}</td>
      <td>{{$User['password']}}</td>
    </tr>
    </tbody>    
    </table>

    @endsection