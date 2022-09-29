<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    public function loginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);
        
        if (! auth()->attempt([
                'username' => $request->username,
                'password' => $request->password,
            ])) {

              return redirect(route('login'))->withErrors('Username atau password salah!');
        }

        return redirect(route('home'));
    }

    public function logout(User $user)
    {
        return redirect(route('login.form'))->with(auth()->logout());
    }
}
