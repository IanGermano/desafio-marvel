<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login()
    {
    	return View::make("login_usuario");
    }

    public function cadastro()
    {
    	return View::make("cadastro_usuario");
    }

    public function logar(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('comic.show');
        }
        
        return redirect()->route('user.login');
    }

    public function cadastrar(Request $request)
    {
    	$user = new User;

    	$user->name = $request->input('name');
    	$user->email = $request->input('email');
    	$user->password = Hash::make($request->input('password'));

    	$user->save();

    	return redirect()->route('user.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.login');
    }
}
