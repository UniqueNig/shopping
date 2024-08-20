<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Product;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request){
        $input = $request->all();
    dd($input);
    }
}
