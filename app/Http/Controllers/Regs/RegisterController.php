<?php

namespace App\Http\Controllers\Regs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $data = (object) $request->validate([
            'name'=>'required|max:255',
            'username'=>'required|min:3|max:255|unique:users',
            'email'=> 'required|email:dns|unique:users',
            'password'=>'required|min:5|max:255'
        ]);

        if($data) {   
            User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($data->password),
            ]);
        }

        return redirect()->route('login');
    }
}
