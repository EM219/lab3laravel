<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
   
    public function index()
    {
        
        $posts = \App\Models\Post::paginate(3);
        
        return view('posts.index',compact('posts'));
    }

    
    public function create()
    {
        return view('posts.create');
    }

   
    public function store(Request $request)
    {
        $post=\App\Models\Post::create([
            'title' => $request->get('title'),
            'body'=> $request->get('body'),
        ]);
        return dd( $request->all() );
    }
    
    public function show($id)
    {
        $Post=(\App\Models\Post::find($id));
        return view('posts.show')->with(["Post" => $Post]);
    }
   
    public function edit($id)
    {
        $Post=(\App\Models\Post::find($id));
        
            
        return view('posts.edit')->with( [ "Post" => $Post  ]);
    }

    
    public function update(Request $request, $id)
    {
        
            $Post=(\App\Models\Post::find($request['id']));
            $Post->update($request->all());
            return dd($request->all());
        
    }

    
    public function destroy($id)
    {
        $Post=(\App\Models\Post::find($id));
        $Post::where('id', $id)->delete();
            return 'You removed user with id '.$Post['id'].'
            from storage.
            ';

    }


    public function trashed()
    {
        $post = Post::onlyTrashed()->get();
       return view('posts.deleted')->with('posts',$post);
    }

  

    public function restore($id)
    {
        $post = Post::withTrashed()->where('id',$id)->first();
        $post->restore();
        return redirect()->route('posts.index');
    }
}
