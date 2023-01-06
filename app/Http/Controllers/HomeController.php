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
        //
    }

    

    public function store(Request $request)
    {
        //
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
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
