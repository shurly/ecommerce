<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function register()
    {
        $data = [];

        return view('register.register', $data);
    }
}
