<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
    return view('regis-login.register',[
       "title" => "Register" 
    ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'nullable|max:255',
            'username'=> 'required|max:255|min:3',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:3|max:255'
        ]);
        $validatedData['password']= bcrypt($validatedData['password']);

        User::create($validatedData);
        return redirect('/login')->with('succes', 'Register Succesfully');
    }
}
