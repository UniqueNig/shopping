<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Product;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $carts = Cart::latest()->get();
        //dd($carts);
        return view('cart', compact('carts'));
    }
    public function store(Request $request){
        $input = $request->all();
        Cart::create($input);

        return redirect(route('carts.index'));
    }

    public function delete($id){
        $cart = Cart::find($id);
        $cart->delete();

        return redirect()->back();
    }
}
