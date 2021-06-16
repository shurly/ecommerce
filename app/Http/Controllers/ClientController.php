<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Address;
use Illuminate\Http\Request;
use App\Services\ClientService;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    public function register()
    {
        $data = [];

        return view('register.register', $data);
    }

    //código no controller do register... verificar mais tarde
    public function registerClient(Request $request)
    {
        //Pega todos os dados do formulário
        $values = $request->all();
        $user = new User();
        $user->fill($values);

        $password = $request->input('password', '');
        $user->password = Hash::make($password); //Criptografar senha

        $address = new Address($values);

        $clientService = new ClientService();
        $result = $clientService->saveUser($user, $address);

        $message = $result['message'];
        $status = $result['status'];

        //Se gravar ok = Cadastrado com sucesso
        //Se gravar error = Não foi possível cadastrar usuário
        $request->session()->flash($status, $message);

        return redirect()->route('register');
    }
}
