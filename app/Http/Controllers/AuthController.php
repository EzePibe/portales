<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function formLogin() {
        return view('auth.formLogin');
    }

    public function formRegister() {
        return view('auth.formRegister');
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
    
    /* public function register(Request $request) {
        $credentials = [
            'name' => $request->input('name'),
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
    } */

    public function register(Request $request) {
        $data  = $request->all();
        $request->validate(
            User::rulesWithName(),
            User::rulesWithNameTexts()
        );

        $data['admin'] = 0;
        $data['password'] = Hash::make($data['password']);

        User::create($data);
        return redirect()->route('auth.formLogin')
        ->with('message.success', 'Usuario creado correctamente');
    }
    
    public function logout() {
        Auth::logout();
        return redirect()->route('home')
        ->with('message.success', 'Cierre de sesión exitoso');
    }
}
