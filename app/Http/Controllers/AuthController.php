<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('userid', 'password');

        if (Auth::attempt(['email' => $credentials['userid'], 'password' => $credentials['password']])) {
            return redirect()->intended('dashboard');
        }

        return redirect()->back()->withErrors(['userid' => 'Invalid credentials']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}