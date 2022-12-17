<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('landing');
    }
}
