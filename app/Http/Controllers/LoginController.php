<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function loginpost(Request $request)
    {
        $request->validate([
            'email'=>'required|email:dns',
            'password'=>'required',
            // 'g-recaptcha-response' => 'required|captcha',
        ],[
            'email.required'=>'Email Wajib Diisi',
            'password.required'=>'Password Wajib Diisi',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            session(['last_activity' => time()]);
            if(Auth::user()->role == 'admin'){
                return redirect()->route('home_admin')->with('success', 'Login Berhasil Dilakukan');
            } else {
                return redirect()->route('home')->with('success', 'Login Berhasil Dilakukan');
            }          
        } else {
            // Cek apakah email ada di database
            $user = User::where('email', $request->email)->first();
            
            if ($user) {
                // Email benar, password salah
                return redirect()->route('login')->withErrors('Password yang Anda masukkan salah');
            } else {
                // Email tidak ditemukan
                return redirect()->route('login')->withErrors('Email tidak terdaftar. Silakan daftar terlebih dahulu');
            }
        }
    }

    public function register(Request $request)
    {
        return view('auth.register');
    }

    public function registerpost(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email:dns|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'name.required' => 'Nama Wajib Diisi',
            'email.required' => 'Email Wajib Diisi',
            'email.email' => 'Format Email Tidak Valid',
            'email.unique' => 'Email Sudah Terdaftar',
            'password.required' => 'Password Wajib Diisi',
            'password.min' => 'Password Minimal 8 Karakter',
            'password.confirmed' => 'Konfirmasi Password Tidak Cocok',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);

        Auth::login($user);
        session(['last_activity' => time()]);

        return redirect()->route('home')->with('success', 'Registrasi Berhasil Dilakukan');
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/');
    }
}
