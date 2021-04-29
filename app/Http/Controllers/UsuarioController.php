<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function Exibir_profile(){
        return view('conta.profile');
    }
    public function Exibir_login(){
        return view('conta.login');
    }
    public function Exibir_register(){
        return view('conta.register');
    }
    public function Exibir_recover_password(){
        return view('conta.rPassword');
    }
    public function Exibir_recover_password_code(){
        return view('conta.rPasswordCode');
    }
    public function Exibir_recover_password_senha(){
        return view('conta.rPasswordInsert');
    }
}
