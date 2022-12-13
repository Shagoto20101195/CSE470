<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function login(Request $request)
    { 
        //return view('landing', compact('request'));

        $check = DB::table('users')->where('email', $request['email'])->get();

        if($request['email'] == $check['email'] && $request['password'] == $check['password'] && $request['user'] == $check['role'])
        {
            return view('landing', compact('request'));
        }
        else
        {
            return redirect()->route('home')->with('error', 'Email is incorrect.');
        }
    }
}
