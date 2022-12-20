<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $role = $request->role;
        $address = $request->address;
        $phone = $request->phone;

        return view('seller_landing', compact('request', 'name', 'email', 'role', 'address', 'phone'));
    }
}
