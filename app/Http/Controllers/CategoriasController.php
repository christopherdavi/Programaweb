<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function cata(Request $ingresar){
        $arreglo = [
            'name'=>$ingresar->query(''),
           
    ];
       return view('libro')->with($arreglo);

    }
}
