<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {

        //modificar request
        $request->request->set('username', Str::slug($request->username));

        $request->validate([
            'name' => 'required|max:30',
            'username' => 'required|unique:users|max:30',
            'email' => 'required|email|min:5|max:60|unique:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);

        //crear usuario
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        //autenticar usuario
        auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        //otra forma de autenticar solo con email y pass    


        // redirigir a muro
        return redirect()->route('muro');
    }

    public function autenticar(Request $request)
    {
        // Lógica de autenticación aquí

    }
}
