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

//funciones CALLBACK
Route::get('/', function () {
    return view('clientes'); //view es de laravel, lo que se indica como parametro son las views que estan en resources/views/XXX.blade.php
    //return view('welcome'); //view es de laravel
    //return '<h1>Hola mundo</h1>';
});