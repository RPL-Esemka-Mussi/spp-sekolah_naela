<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('main.bootstrap');
    }

    public function login()
    {
        return view('login');
    }

    public function  authenticate(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }
 
        return back()->with('loginError', 'Login Failed!');
          
    }

    public function logout()
    {
        Auth::logout();
 
        request()->session()->invalidate();
    
        request()->session()->regenerateToken();
    
        return redirect('/');
    }
    

}

       
