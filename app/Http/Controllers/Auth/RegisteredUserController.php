<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Address;
use App\Providers\RouteServiceProvider;
use App\Services\ClientService;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('register.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */


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


     /*
       public function store(Request $request)
    {
      $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }*/
}
