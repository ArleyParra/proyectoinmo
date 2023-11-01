<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetallesInmueblesController extends Controller
{
    function listDetallesInmuebles(){
        return view("detallesinmuebles");
    }
}