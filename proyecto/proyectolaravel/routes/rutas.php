<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

#Archivo personalizado de rutas, hay que especificarlo en bootstrap/app.php
Route::get('/ruta', function () {
    #return view('welcome');
    return "ok";
});
