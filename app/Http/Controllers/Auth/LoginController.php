<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function prosesLogin(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $user = User::where('username', $username)->first();
        
        if($user) {
            if(Auth::attempt([
                'username' => $username,
                'password' => $password
            ])) {
                return redirect()->route('books.Dashboard');
            }
        }
        $credentials = $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|min:5'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->with('loginEror', 'login failed !');
    }
}
