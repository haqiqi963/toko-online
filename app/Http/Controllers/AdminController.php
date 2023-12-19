<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function login()
    {
        return view ('admin.login');
    }

    public function authentication(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email must be filled',
            'email.email' => 'Your email is not valid!',
            'password.required' => 'Password must be filled',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2) {
                Alert::toast('You are logged in', 'success');
                return redirect('/secret/admin/dashboard');
            }
        }

        Alert::toast('Login failed', 'error');
        return redirect('/secret/admin/');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        Alert::toast('You already logged out', 'success');

        return redirect('/secret/admin/');
    }
}
