<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index(){
        $wishlist = Wishlist::all();
        return view('clients.pages.wishlist',compact('wishlist'));
    }
}
