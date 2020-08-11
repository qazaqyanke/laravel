<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
//use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Session;
//use App\Http\Controllers\Session;


class ProductController extends Controller
{
    public function getProduct()
    {
        $products = Product::all();
        return view('index',compact('products'));
    }

    public function getToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart',$cart);
        return redirect()->route('product');
    }

    public function getCart()
    {
        if (!Session::has('cart'))
        {
            return view('shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }


}
