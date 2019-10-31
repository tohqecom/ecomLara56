<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Modules\Admin\Entities\Models\Product;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $product = Product::find($request->id);
        Cart::add($product->id, $product->p_name, 1, $product->price, 0, ['thumb'=>$product->p_thumb]);
        dd(Cart::content());
        return back()->with('success', "$product->p_name has successfully been add to cart!");
    }

    public function cart()
    {
        $params = [
            'title' => 'Shopping Cart Checkout'
        ];

        return view('cart')->with($params);
    }

    public function clear()
    {
        Cart::clear();

        return back()->with('success', "The shopping cart has successfully been cleared!");
    }
}
