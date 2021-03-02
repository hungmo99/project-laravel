<?php

namespace App\Http\Controllers\clients;

use App\Helper\CartHelper;
use App\Http\Controllers\Controller;
use App\Models\order;
use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    public function index(){
        $client = session()->get('customer');
        $cart = session()->get('cart');
        // dd($cart);
        $cartHelper = new CartHelper;
        $demo = 'check';
        if($client){
            if($cart){
                return view('clients.pages.checkout',compact('client','cart','cartHelper'));
            }else{
                return view('clients.pages.cart',compact('cart'));
            }
        }else{
            return view('client.content.login',compact('demo'));
        }
    }

    public function order(order $order,Request $request){
        $order->add($request);
        return redirect()->route('cart.index');
    }

    public function view(){
        $client = session()->get('customer');
        $order = order::where('id_user',$client->id)->get();
        return view('clients.pages.order',compact('order'));
    }
}
