<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    // Login the user
    public function create()
    {
        $request = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($request)) {
            session()->regenerate();

            return redirect('/')->with('success', 'Welcome back!');
        }

        throw ValidationException::withMessages([
            'email' => 'Incorrect login details'
        ]);
    }

    // Logout
    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'You are now logged out.');
    }
}
