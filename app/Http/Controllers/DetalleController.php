<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductDetalle extends Controller
{
    function listDetalle(){
        return view("detalle");
    }
}