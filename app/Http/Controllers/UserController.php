<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $data = [];

        if($request->isMethod('POST'))
        {
            //Se entrar nesse IF é por que o usuário clicou em Enviar
            $login = $request->input('email');
            $password = $request->input('password');

            $credential = ['email' => $login, 'password' => $password];

            //Login
            if(auth::attempt($credential))
            {
               return redirect()->route('home');
            }
            else{
                $request->session()->flash('error', 'Usuário / Senha inválidos');

                return redirect()->route('login');
            }
        }

        return view('login.login', $data);
    }
}
