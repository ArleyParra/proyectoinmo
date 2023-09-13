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

Route::get('/', function () {
    return "HOME PAGE";
});

Route::get('productos', function (){
    return "LISTADO DE TODOS LOS PRODUCTOS";
});

Route::get('productos/create', function (){
    return "AQUI VA A ESTAR EL FORMULARIO DE LA CREACIÓN DE PRODUCTOS";
});

Route::get('productos/{id}', function (){
    return "el nombre del producto es $id";
});

Route::get('productos/{id}/{categoria}', function (){
    return "el nombre del producto es $id con la categoria $categoria";
});