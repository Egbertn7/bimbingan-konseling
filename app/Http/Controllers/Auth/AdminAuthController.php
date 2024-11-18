<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{

    public function showRegistrationForm()
    {
        return view('auth.admin_register');
    }

    public function register(Request $request)
    {


        $request->validate([
            'nama_admin' => 'required|string|max:255',
            'password_admin' => 'required|string|min:8',
        ]);

        $admin = Admin::create([
            'nama_admin' => $request->nama_admin,
            'password_admin' => Hash::make($request->password_admin),
        ]);


        Auth::guard('admin')->login($admin);


        return redirect()->route('admin.form');
    }


    public function showLoginForm()
    {
        return view('auth.admin_login');
    }

    public function login(Request $request)
    {

        $request->validate([
            'nama_admin' => 'required|string',
            'password_admin' => 'required|string',
        ]);


        if (Auth::guard('admin')->attempt([
            'nama_admin' => $request->nama_admin,
            'password' => $request->password_admin,
        ], $request->remember)) {


            return redirect()->intended(route('admin.dashboard'));
        }


        return back()->withErrors([
            'nama_admin' => 'Nama atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Log the user out

        $request->session()->invalidate(); // Invalidate the session

        $request->session()->regenerateToken(); // Regenerate CSRF token to prevent session fixation attacks

        return redirect()->route('home')->with('success', 'Anda telah berhasil logout!'); // Redirect to home or login page
    }
}
