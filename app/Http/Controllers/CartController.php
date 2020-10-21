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
        \Cart::session($userId)->add($product_id, $product->name, $product->price, 1, array());
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

    public function cart()
    {
        $userId = auth()->user()->id;
        $cart_items=\Cart::session($userId)->getContent()->sort();
        $total_price=\Cart::session($userId)->getTotal();
        return view('front.cart',compact('cart_items','total_price'));


    }

    public function changeProductQty( Request $request)
    {
        $product_id = $request->product_id;
        $new_qty = $request->new_qty;
        $userId = auth()->user()->id;
         \Cart::session($userId)->update($product_id , array(
        'quantity' => array(
            'relative' => false,
            'value' => $new_qty
                    ),
            ));

    return "suceess";



    }
    public function deleteProductInCart(Request $request)
    {
        $product_id = $request->product_id;
        $userId = auth()->user()->id;
        \Cart::session($userId)->remove($product_id);
        return "delete suceess";


    }


    public function checkout()
    {
        $userId = auth()->user()->id;
        $cart_items=\Cart::session($userId)->getContent()->sort();
        $total_price=\Cart::session($userId)->getTotal();
        return view('front.checkout',compact('cart_items','total_price'));


    }

}
