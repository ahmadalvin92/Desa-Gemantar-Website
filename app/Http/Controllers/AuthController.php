<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        if(Auth::check() == true){
            return redirect()->route('dashboard');
        }else{
            return view('login');
        }
    }

    public function register()
    {
        return view('register');
    }
}
