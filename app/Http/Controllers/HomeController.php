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
        //
    }


    public function edit($id)
    {
        //
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