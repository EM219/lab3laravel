@extends('layouts.post')

@section('title' , 'deleted')

@section('content')


                @if ($posts->count()>0)
                 <table class="table table-striped">
                  <thead>
                    <tr>
                    <th scope="col"> ID </th>
                    <th scope="col"> Title </th>             
                    <th scope="col"> Body </th>
                     </tr>
                    </thead>
                    <tbody>          
                    @foreach ($posts as $post)
                     <tr>
                     <th scope="row">{{$post->id}}</th>
                     <th scope="row">{{$post->title}}</th>
                     <th scope="row">{{$post->body}}</th>
                     <td> 
                     <a class="" href="{{route('posts.restore',['id' =>$post->id ])}}">  
                    </a>  
                     </td>
                     <td> 
                     <a class="" href="{{route('posts.restore',['id' =>$post->id ])}}">
                     <button type="button" class="btn btn-success">
                      Restore
                     </button>
                     </a>
                      </td> 
                    </tr>
                      @endforeach 
                    @endif
                                 
                                  
                                </tbody>
                              </table>

@endsection