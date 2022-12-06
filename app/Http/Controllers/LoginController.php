<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login($request)
    { 
        return view('landing', compact('request'));
        /*
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required',
        ]);

        $data = $request->all();

        $check = $this->create($data);

        return redirect()->route('home')->with('success', 'User created successfully.'); */
    }
}
