<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.page.users-management', compact('users'));
    }

    public function registerCustomer(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'image' => 'mimes:jpg,bmp,png',
            'address' => 'required',
            'phone' => 'required',
            'dob' => 'required',
        ]);

        $user = User::create([
            'nik' => 'USR' . rand(0000, 9999),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'is_member' => 1,
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'dob' => $request->input('dob'),
        ]);

        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $filename = date('Ymd') . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('storage/user'), $filename);
            $user->image = $filename;
        } else {
            $filename = "default.png";
            $user->image = $filename;
        }

        $user->save();

        Alert::toast('Data berhasil disimpan', 'success');
        return redirect('/');
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

            if (Auth::user()->role_id == 3) {
                Alert::toast('You are logged in', 'success');
                return redirect()->route('customerHome');
            }
        }

        Alert::toast('Login failed', 'error');
        return redirect('/');
    }

    public function logoutCust(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        Alert::toast('You already logged out', 'success');

        return redirect('/');
    }
}
