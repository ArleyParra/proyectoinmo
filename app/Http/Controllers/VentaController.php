<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentaController extends Controller
{
    function listVenta(){
        return view("venta");
    }
}
