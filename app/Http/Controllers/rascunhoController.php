<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rascunhoController extends Controller
{
    public function Exibir_rascunho(){
        return view('navegacao.rascunho');
    }
}
