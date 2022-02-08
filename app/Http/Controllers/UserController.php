<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('user.profile');
    }

    public function edit(Request $request)
    {
        $request->validate(User::rulesEdit(), User::rulesEditTexts());

        $data = $request->input();

        $user = User::findOrFail(Auth::user()->id);

        $user->update($data);

        return redirect()
            ->route('user.index')
            ->with('message.success', 'Perfíl editado correctamente.');
    }

    public function formPassword() {
        return view('user.formPassword');
    }
    
    public function editPassword(Request $request)
    {
        $credentials = [
            'email' => Auth::user()->email,
            'password' => $request->input('oldpassword'),
        ];

        if(!Auth::attempt($credentials)) {
            return redirect()->route('user.formPassword')
            ->with('message.error_oldpassword', 'Contraseña inválida');
        }

        $new_password = $request->input('password');
        $confirm_new_password = $request->input('passwordconfirm');

        if($new_password == '') {
            return redirect()->route('user.formPassword')
            ->with('message.error_password', 'La contraseña es obligatoria');
        }else if($new_password !== $confirm_new_password) {
            return redirect()->route('user.formPassword')
            ->with('message.error_passwordconfirm', 'Las contraseñas no coinciden');
        }


        $data['password'] = Hash::make($new_password);
        
        $user = User::findOrFail(Auth::user()->id);
        $user->update($data);

        return redirect()
            ->route('user.index')
            ->with('message.success', 'Perfíl editado correctamente.');
    }
}

