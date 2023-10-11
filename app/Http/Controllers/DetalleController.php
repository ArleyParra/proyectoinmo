<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetalleController extends Controller
{
    function listDetalle(){
        return view("detalle");
    }
}