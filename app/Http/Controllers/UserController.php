<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register()
    {
        return view('user.register', [
            "title" => 'Register',
        ]);
    }

    public function registerStore(Request $request)
    {
    //    dd($request->all());
       $request->validate([
            'name' => 'required',
            'email' => 'required|email|:dns',
            'phone' => 'required',
            'password' =>'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/login')->with('success', 'Berhasil Register');
    }

    public function login()
    {
        return view('user.login', [
            "title" => 'Login',
        ]);
    }

    public function loginAuth(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ], [
            'email.exists' => 'email ini belum tersedia',
            'email.required' => 'email harus diisi',
            'password.required' => 'password harus diisi',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('landing.page');
        } else {
            return redirect()->back()->with('error', 'Gagal login silahkan cek dan coba lagi');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }


}
