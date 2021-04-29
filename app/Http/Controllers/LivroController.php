<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function Exibir_pagina_livro(){
        return view('navegacao.bookpage');
    }
}
