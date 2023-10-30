<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teddy;

class GaleriaController extends Controller
{
    function galeria(){
        $teddies=Teddy::all();
        return view('teddies.galeria',['teddies'=>$teddies]);
    }
}
