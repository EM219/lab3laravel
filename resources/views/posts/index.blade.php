@extends('layouts.post')

@section('title' , 'index')

@section('content')

<table style="margin-top: 30px;" class="table table-striped table-hover">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Body</th>
        <th>Actions</th>

    </tr>

    <tr>
     @foreach ($posts as $post )
        @if($post['id'] == 0)
    @continue
    @endif
        <td scope="row">{{$post['id']}}</td>
        <td><a href="{{ route('posts.show',$post['id']) }}">{{$post['title']}}</a></td>
        <td scope="row">{{$post['body']}}</td>
        <td><div class="row text-center">
            <div class="col-md-6 "><a href="{{ Route('posts.edit',['id'=>$post['id'] ]) }}" class="btn btn-primary">Edit</a>

                <form method="POST" action="{{ Route('posts.destroy',['id'=>$post['id'] ]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

        </div>
    </td>

        </tr>


     @endforeach




  </table>

 
        <div class="d-flex justify-content-center">
            {!! $posts->links() !!}
        </div>

@endsection