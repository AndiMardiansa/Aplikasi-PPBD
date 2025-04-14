<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            return redirect()->route('login')->withErrors('Login Gagal Dilakukan Pastikan Email Dan Password Benar');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/');
    }
}
