<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Level;
use DB ;

class GroupController extends Controller
{
    public function level(){
        $lev =DB::table('levels')->get();
        return view('level', compact('lev'));//llamar a la variable para llamar a la ruta del get
}
}