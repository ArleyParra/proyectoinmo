<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioContactoController extends Controller
{
    function listFormularioContacto(){
        return view("formulariocontacto");
    }
}