<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginControllers extends Controller
{
    public function index()
    {
    	return view('login/index',[
    		'title' => 'Login',
    		'active' => 'login'
    	]);
    }

    public function store(Request $request)
    {
    	$credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended('/dashbord'); 
        }

        return back()->with('loginError', 'Login failed');

    }
}