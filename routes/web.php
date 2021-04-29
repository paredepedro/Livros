<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home-page', function () {
    return view('navegacao.homepage');
});

route::prefix('usuario')->groupe(function(){
    Route::get('/login', 'App\Http\Controllers\UsuarioController@Exibir_login')->name('exibir-login');

    Route::get('/register', 'App\Http\Controllers\UsuarioController@Exibir_register')->name('exibir-register');

    Route::get('/recover-password', 'App\Http\Controllers\UsuarioController@Exibir_recover_password')->name('exibir-recover-password');

    Route::get('/recover-password-code', 'App\Http\Controllers\UsuarioController@Exibir_recover_password_code')->name('exibir-recover-password-code');

    Route::get('/recover-password-new', 'App\Http\Controllers\UsuarioController@Exibir_recover_password_senha')->name('exibir-recover-password-senha');

    Route::get('/profile', 'App\Http\Controllers\UsuarioController@Exibir_profile')->name('exibir-profile');
});


Route::get('/book-page', 'App\Http\Controllers\LivroController@Exibir_pagina_livro')->name('exibir-pagina-livro');

Route::get('/rascunho-criacao', 'App\Http\Controllers\RascunhoController@Exibir_rascunho')->name('exibir-rascunho');
