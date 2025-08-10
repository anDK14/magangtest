<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (
            $request->email === 'admin@example.com' &&
            $request->password === 'password'
        ) {
            Session::put('is_logged_in', true);
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['message' => 'Invalid credentials']);
    }

    public function logout()
    {
        Session::forget('is_logged_in');
        return redirect()->route('login');
    }

    public function dashboard()
    {
        if (!Session::get('is_logged_in')) {
            return redirect()->route('login');
        }

        return view('dashboard');
    }
}
