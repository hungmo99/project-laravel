<?php

namespace App\Http\Controllers\clients;

use App\Helper\CartHelper;
use App\Http\Controllers\Controller;
use App\Models\product_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index(CartHelper $cartHelper){
        $cart = session()->get('cart');
        // unset($cart);
        // $cart = [];
        // session()->put('cart',$cart);
        // Session::forget('cart');
        return view('clients.pages.cart',compact('cart', 'cartHelper'));
        // $cartComponent = view('clients.pages.cart',compact('cart','cartHelper'))->render();
        // return $cartComponent;
    }
    public function addCart($id,CartHelper $cart){
        $addCart = product_detail::get_to_cart($id);
        // dd($addCart);
        $cart->add($addCart);
        return redirect()->route('cart.index');
    }
    public function updateQty(Request $request,CartHelper $cartHelper){
        $product = product_detail::get_to_cart($request->id);
        $cart = $cartHelper->add($product,$request->quantity);
        return redirect()->route('cart.index');
    }
    public function updateCart(Request $request,CartHelper $cartHelper){
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]['quantity'] = $request->quantity;
            session()->put('cart',$cart);
            $cartComponent = view('clients.pages.cart-content',compact('cart','cartHelper'))->render();
            return response()->json([
                'code'=>200,
                'content'=>$cartComponent
            ],200);
        }
    }
    public function removeCart(Request $request,CartHelper $cartHelper){
        if($request->id){
            $cart = session()->get('cart');
            unset($cart[$request->id]);
            session()->put('cart',$cart);
            $cart = session()->get('cart');
            $cartComponent = view('clients.pages.cart-content',compact('cart','cartHelper'))->render();
            return response()->json([
                'code'=>200,
                'content'=>$cartComponent
            ],200);
        }
    }

    public function deleteAll(CartHelper $cartHelper){
        $cart = session()->get('cart');
        unset($cart);
        $cart = [];
        session()->put('cart',$cart);
        $cartComponent = view('clients.pages.cart-content',compact('cart','cartHelper'))->render();
        return response()->json([
            'code'=>200,
            'content'=>$cartComponent
        ],200);
    }
}
