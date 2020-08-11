<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function about()
    {
        return view('contact');
    }

    public function review()
    {
        request()->validate([
            'author' => 'required',
            'comment' => 'required',
        ]);

        $review = new review([
            'author' => request()->author,
            'comment' => request()->comment,
        ]);
        $post->comments()->save($review);

        return redirect(route('product',request()->post_id));
    }

    public function showProduct(Product $products)
    {
        $products = Product::all();
        //$products = $products->id;
        return view('show',compact('products'));
    }

}
