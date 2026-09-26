<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signup()
    {
        return view('front-end.auth.signup', [
            'title' => 'Sign Up'
        ]);
    }

    public function signin()
    {
        return view('front-end.auth.signin', [
            'title' => 'Sign In'
        ]);
    }
}
