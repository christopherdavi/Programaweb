<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use DB ;

class GroupController extends Controller
{
    public function group(){
        $grup =DB::table('groups')->get();
        return view('group', compact('grup'));
}
}