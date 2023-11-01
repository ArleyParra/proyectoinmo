<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\DetalleController;
use App\Http\Controllers\DetallesInmueblesController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\FormularioContactoController;
use App\Http\Controllers\ArriendoController;
use App\Http\Controllers\QuienesSomosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VentaController;
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

Route::get('/', [InicioController::class,'listInicio']);
Route::get('/detalles_inmuebles', [DetallesInmueblesController::class,'listDetallesInmuebles']);
Route::get('/formulario_contacto', [FormularioContactoController::class,'listFormularioContacto']);
Route::get('/arriendo',[ArriendoController::class,'listArriendo']);
Route::get('/venta', [VentaController::class,'listArriendo']);
Route::get('/quienes_somos', [QuienesSomosController::class,'listQuienesSomos']);

Route::get('productos', [ProductController::class,'listProducts']);
Route::get('detalle', [DetalleController::class,'listDetalle']);

Route::get('productos/create', function (){
    return "AQUI VA A ESTAR EL FORMULARIO DE LA CREACIÓN DE PRODUCTOS";
});

Route::get('productos/{id}', function ($id){
    return "el nombre del producto es $id";
});

Route::get('productos/{id}/{categoria}', function ($id, $categoria){
    return "el nombre del producto es $id con la categoria $categoria";
});
