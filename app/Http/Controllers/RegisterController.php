<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $check = DB::table('users')
        ->where('email', $request->email);

        if($check->exists()){
            return view('register', ['error' => 'Email already exists']);
        }
        else
        {
            DB::table('users')->insert([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'role' => $request->user,
                'phone' => $request->number,
                'address' => $request->address
            ]);

            return view('home', ['success' => 'Registration successful']);
        }
    }
}
