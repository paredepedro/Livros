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
    return view('homepage');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/recover-password', function () {
    return view('rPassword');
});
Route::get('/recover-password-code', function () {
    return view('rPasswordCode');
});
Route::get('/recover-password-new', function () {
    return view('rPasswordInsert');
});
