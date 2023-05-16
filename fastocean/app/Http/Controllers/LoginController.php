<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('login.login');
    }

    public function signup()
    {
        return view('login.signup');
    }
    public function forgetPassword()
    {
        return view('login.forgotpassword');
    }
}
