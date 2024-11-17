<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{


    public function showLoginForm()
    {
        return view('auth.user_login');
    }


    public function showRegistrationForm()
    {
        return view('auth.user_register');
    }


    public function register(Request $request)
    {

        $request->validate([
            'nama_user' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);


        $user = User::create([
            'nama_user' => $request->nama_user,
            'password_user' => Hash::make($request->password),
        ]);

        Auth::login($user);


        return redirect()->route('user.create')->with('success', 'Registrasi berhasil, Anda telah login!');
    }



    public function login(Request $request)
    {

        $request->validate([
            'nama_user' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = [
            'nama_user' => $request->nama_user,
            'password' => $request->password,
        ];



        if (Auth::attemptWhen($credentials, function ($user) use ($request) {
            return Hash::check($request->password, $user->password_user);
        })) {
            return redirect()->route('user.create')->with('success', 'Login berhasil!');
        }


        return back()->withErrors([
            'error' => 'Nama pengguna atau password salah.',
        ]);
    }
}
