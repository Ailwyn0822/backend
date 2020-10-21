<?php

namespace App\Http\Controllers;

use App\bb;
use Illuminate\Http\Request;
use Darryldecode\Cart\Cart;


class CartController extends Controller
{
    public function addcart(Request $request)
    {

        $product_id = $request->product_id;
        $product = bb::find($product_id);
        $userId = auth()->user()->id;
        \Cart::session($userId)->add('456', '大便', '87', 1, array());
        $cartTotalQuantity = \Cart::session($userId)->getTotalQuantity();
        return $cartTotalQuantity;
    }

    public function getcontent()
    {
        $userId = auth()->user()->id;
        $content=\Cart::session($userId)->getContent();
        dd($content);
    }

    public function totalcart()
    {
        $userId = auth()->user()->id;
        $total=\Cart::session($userId)->getTotal();
        dd($total);
    }
}
