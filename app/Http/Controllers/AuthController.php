<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function login()
    {
        if(Auth::check()) {
            return back();
        }
        return view('auth.login');
    }

    public function processLogin(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if(Auth::user()->role) {
                return redirect(route('admin.dashboard'));
            } else {
                return redirect('/');
            }
        } else {
            Alert::error('Gagal', 'Email atau password salah!');
            return back();
        }
    }

    public function register()
    {
        if(Auth::check()) {
            return back();
        }
        return view('auth.register');
    }

    public function processRegister(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:191'],
            'email' => ['email', 'min:3', 'unique:users,email'],
            'password' => ['min:6']
        ]);

        $name = $request->name;
        $email = $request->email;
        if(User::where('email', $email)->first()) {
            Alert::error('Gagal', 'Email sudah terdaftar!');
            return back();
        }

        $password = $request->password;
        $confirmPassword = $request->confirmPassword;
        if($confirmPassword !== $password) {
            Alert::error('Gagal', 'Konfirmasi password tidak sesuai!');
            return back();
        }

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password)
        ]);

        Alert::success('Berhasil', 'Akun berhasil didaftarkan, silakan login!');

        return redirect(route('login'));
    }
}
