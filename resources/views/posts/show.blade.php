@extends('layouts.post')
@section('title' , 'show')
@section('content')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Body</th>
</tr>
</thead>
<tbody>
<tr>
      <th scope="row">{{$Post['id']}}</th>
      <td>{{$Post['title']}}</td>
      <td>{{$Post['body']}}</td>
     
    </tr>
    </tbody>    
    </table>

    @endsection