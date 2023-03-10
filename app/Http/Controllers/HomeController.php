<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {

        $users = User::get();
        return view('user.index', [
            'users' => $users
        ]);
    }


    public function create()
    {
        return view('user.create');

    }



    public function store(Request $request)
    {
        //dd("cheguei");
        $data = $request->only(['name', 'email']);
        $data['password'] = bcrypt('password');

        User::create($data);


        return redirect()->route('user.index');
   
    }


    public function show($id)
    {
        $user = User::find($id);
        return view('user.show', [
            'user' => $user
        ]);
    }


    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', [
            'user' => $user
        ]);
    }


    public function update(Request $request, $id)
    {
        // dd($request->all());
        // dd($request->except(['_token', '_method']));
        // dd($request->only(['_token', '_method']));
        //dd($request->only(['name', 'email']), $id);
        $data = $request->only(['name', 'email']);
        $user = User::find($id);
        $user->update($data);
        return redirect()->route('user.index');
        
   
       
                
    }


    public function destroy($id)
    {
        // softDelete
        //dd($id);
        $user = User::find($id);
        $user->delete();
        return redirect()->back();


    }
}
