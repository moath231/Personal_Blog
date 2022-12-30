<?php

namespace App\Http\Controllers;

use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.register');
    }

    public function store()
    {

        $attributes = request()->validate([
            'name' => 'required|min:2|max:255',
            'username' => 'required|min:6|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:15',
        ]);


        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/');

    }
}
