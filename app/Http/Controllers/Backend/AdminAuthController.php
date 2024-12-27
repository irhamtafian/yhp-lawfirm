<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function register()
    {
        return view('backend.auth.register');
    }

    public function store_register(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|max:255',
                'username' => 'required|max:255',
                'email' => 'required|max:255',
                'password' => 'required|max:255'
            ]
        );

        $validatedData['password'] = Hash::make($validatedData['password']);
        
        User::create($validatedData);

        return redirect('/admin/login')->with('success', 'Registration Success! Please Log In.');
    }
    
    public function login()
    {
        return view('backend.auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin/articles');
        }

        return back()->with('loginError', 'Incorrect username or password.');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login')->with('logoutSuccess', 'You have been successfully logged out.');
    }
  
}