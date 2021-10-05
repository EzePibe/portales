<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function form() {
        return view('auth.form');
    }
    
    public function login(Request $request) {
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        $request->validate(
            User::rules(),
            User::rulesTexts()
        );

        if(!Auth::attempt($credentials)) {
            return redirect()->route('auth.formLogin')
            ->with('message.error', 'Usuario y/o contraseña inválidos')
            ->withInput();
        }
        
        return redirect()->route('home')
        ->with('message.success', 'Inicio de sesión exitoso');
    }
    
    public function logout() {
        Auth::logout();
        return redirect()->route('home')
        ->with('message.success', 'Cierre de sesión exitoso');
    }
}
