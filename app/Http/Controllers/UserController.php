<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function tampillogin()
    {
        return view('login');
    }

    public function proseslogin(Request $request)
    {
        if (Auth::attempt($request->only('email','password'))) {
            return redirect('/');
        } else {
            return redirect('timeline');
        }
    }

    public function tampilregister()
    {
        return view('register');
    }

    public function kirimregister(Request $request)
    {
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->Password),
        ]);

        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}