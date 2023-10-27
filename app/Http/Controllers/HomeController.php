<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    //pagina de bievenid
    function welcome(){
        //acceso bd
        //obtener peluches
        //ruta= carpeta.nombrevista
        return view('secciones.home');
    }
}
