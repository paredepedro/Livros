<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

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
    public function Save(Request $request){
        $usuario = new Usuario();
        $usuario->nickname = $request->nickname;
        $usuario->email = $request->email;
        $usuario->senha = $request->senha;
        $usuario->save();
        // dd($usuario);
        return view('navegacao.homepage');
    }
    public function Login(Request $request){
        $usuario = Usuario::where('email', $request->email)->first();
        
        if($usuario->senha == $request->senha){
            return view('navegacao.homepage');
        }
    }
}
