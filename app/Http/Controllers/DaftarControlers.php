<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DaftarControlers extends Controller
{
	public function index()
	{
		return view('daftar/index', [
    	'title' => 'Daftar',
    	'active' => 'login'
    	]);
	}

	public function store(Request $request)
	{
		$validateData = $request->validate([
			'name' => 'required|max:255',
			'username' => 'required|min:3|max:255|unique:users',
			'email' => 'required|email|unique:users',
			'password' => 'required|min:5|max:255'
		]);

		$validateData['password'] = bcrypt($validateData['password']);

		User::create($validateData);

		return redirect()->intended('/login')->with('berhasil' , 'Akun Anda Berhasil Terdaftar');
	}
}