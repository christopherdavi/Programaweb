<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use DB ;

class UserController extends Controller
{
    public function user(){
            $product =DB::table('users')->get();
            return view('user', compact('product'));
    }


    public function create(){
        return view('create');
    }

    public function Store(Request $request){
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        
        $product =DB::table('users')->insert($data);
        return redirect()->route('product.user');
        

    }
}
