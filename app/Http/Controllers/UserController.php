<?php

namespace App\Http\Controllers;
use app\Models\User;
use Illuminate\Http\Request;


class Usercontroller extends Controller
{
    //
    public function index()
    {
        // $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),
        // true);
        
    
        $users = \App\Models\User::paginate(3);
        
        return view('users.index',compact('users'));

    }
    public function create()
    {

        return view('users.create');
    }
    public function store(Request $request)
    {
       \App\Models\User::create([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'password'=>$request['password'],
            'remember_token'=>$request['_token'],
            
        


        ]);
        return dd( $request->all() );
    }
    public function show($id)
    {
        $User=(\App\Models\User::find($id));
        return view('users.show')->with(["User" => $User]);
    }



       //
       public function edit($id)
       {
        $User=(\App\Models\User::find($id));
        
            
            return view('users.edit')->with( [ "User" => $User  ]);
    }

       public function update(Request $req)
       {
        $User=(\App\Models\User::find($req['id']));
        $User->update($req->all());
        return dd($req->all());
    }
       public function destroy($id)
       {
        $User=(\App\Models\User::find($id));
        $User::where('id', $id)->delete();
            return 'You removed user with id '.$User['id'].'
            from storage.
            ';


    }

}