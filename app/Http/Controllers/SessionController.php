<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('session.login');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt($attributes)) {
            session()->regenerate();

            return redirect('/');
        }

        throw ValidationException::withMessages([
            'email' => 'your provided credentials could not be verified',
        ]);
    }

    public function distroy()
    {
        auth()->logout();

        return redirect('/');
    }
}
