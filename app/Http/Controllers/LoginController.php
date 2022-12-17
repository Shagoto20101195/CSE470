<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login(Request $request)
    { 
        $check = DB::select("SELECT * FROM users WHERE email = '$request->email'");

        if(count($check) == 1 && $check[0]->password == $request->password && $check[0]->role == $request->user)
        {
            return view('landing', compact('request'));
        }
        else
        {
            return view('home', compact('request'));
        }
    }
}
