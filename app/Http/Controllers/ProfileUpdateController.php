<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileUpdateController extends Controller
{
    public function index()
    {
        return view('update');
    }
    public function update(Request $request)
    {
        if($request->name != "")
        {
            $name = $request->name;
            DB::update("UPDATE users SET name = '$name' WHERE email = '$request->email'");
        }
        if($request->address != "")
        {
            $address = $request->address;
            DB::update("UPDATE users SET address = '$address' WHERE email = '$request->email'");
        }
        if($request->phone != "")
        {
            $phone = $request->phone;
            DB::update("UPDATE users SET phone = '$phone' WHERE email = '$request->email'");
        }

        return view('landing', compact('request', 'name', 'email', 'role', 'address', 'phone'));
    }
}
