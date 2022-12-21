<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SellItemController extends Controller
{
    public function index()
    {
        return view('sell_items');
    }
}
