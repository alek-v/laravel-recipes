<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Login
     */
    public function login()
    {
        return view('users.login');
    }

    /**
     * Register form
     */
    public function register()
    {
        return view('users.register');
    }

    /**
     * Save registration details and create a new user
     */
    public function create()
    {
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:35'
        ]);

        $attributes['role'] = 'guest';

        $user = User::create($attributes);

        auth()->login($user);

        session()->flash('success', 'Account has been created.');

        return redirect('/');
    }
}
