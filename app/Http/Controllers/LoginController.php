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
            $name = $check[0]->name;
            $email = $check[0]->email;
            $role = $check[0]->role;
            $address = $check[0]->address;
            $phone = $check[0]->phone;
            return view('landing', compact('request', 'name', 'email', 'role', 'address', 'phone'));
        }
        else
        {
            return view('home', compact('request'));
        }
    }
}
