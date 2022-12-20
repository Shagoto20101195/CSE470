<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AddItemController extends Controller
{
    public function index(Request $request)
    {
        return view('add_item', compact('request'));
    }

    public function store(Request $request)
    {
        $check = DB::table('stacks')
        ->where('email', $request->email)
        ->where('name', $request->name)
        ->get()->value($request->quantity);

        if(count($check) > 0){
            DB::update('update stacks set quantity = ? where email = ? and where name = ?', [$request->quantity + $check, $request->email, $request->name]);
            return view('add_item', ['error' => 'Email already exists']);
        }
        else
        {
            DB::table('stacks')->insert([
                'email' => $request->email,
                'type' => $request->type,
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $request->quantity
            ]);
        }


        return redirect('/seller');
    }
}
