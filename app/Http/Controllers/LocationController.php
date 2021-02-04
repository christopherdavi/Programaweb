<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function level(Request $ingresar){
        $arreglo = [
            'name'=>$ingresar->query(''),
            'description'=>$ingresar->query(''),
            
    ];
       return view('libro')->with($arreglo);

    } 
}
