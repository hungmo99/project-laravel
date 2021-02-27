<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        $client = session()->get('customer');
        $check = 'get_wishlist';
        if ($client) {
            $wishlist = Wishlist::where('id_user',$client->id)->get();
            return view('clients.pages.wishlist', compact('wishlist'));
        } else {
            return view('clients.pages.login', compact('check'));
        }
    }
    public function add($id){
        $client = session()->get('customer');
        $check = 'add_wishlist';
        if ($client) {
            $wishlist = Wishlist::where('id_product_detail', $id)->get();
            wishlist::create([
                'id_user' => $client->id,
                'id_product_detail' => $id
            ]);
            return back();
        } else {
            return view('clients.pages.login', compact('check'));
        }
    }
    public function delete($id)
    {
        Wishlist::find($id)->delete();
        return redirect()->back()->with('success', 'Delete Success');
    }
    public function destroy()
	{
        $client = session()->get('customer');
		$wishlist = Wishlist::where('id_user','=',$client->id)->get();
		foreach ($wishlist as $key => $value) {
		$value->delete();
		}
		return redirect()->back()->with('success','Delete All Success');
	}
}
