<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function get_cate($slug){
        $category_id=Category::where('slug','=',$slug)->first();
		$products=product::where([['status','=','1'],['id_cate','=',$category_id->id]])->orderby('created_at','desc')->paginate(9);
        $product = product::get_cate($products);
        return view('HomeClient',compact('products'));
    }
    // public function sort_date(){
    //     $product = product::where('status',1)->orderBy('created_at','desc')->paginate(10);
    //     $products =  product::get_cate($product);
    //     return view('HomeClient',compact('products'));
    // }

    // public function sort_low_to_high(){
    //     $product = product::where('status',1)->get();
    //     $products =  product::get_cate($product);
    //     // $a = $products[0]->price;
    //     // @dd($a);
    //     $products = $products->sortBy(function($products){
    //         return $products->price;
    //     });
    //     return view('HomeClient',compact('products'));
    // }

    // public function sort_high(){
    //     $products = product::where('status',1)->get();
    //     $products =  product::get_cate($products);
    //     $a = $products[0]->price;
    //     // @dd($a);
    //     $sort = $products->sortByDesc(function($a){
    //         return $a;
    //     });
    //     return view('HomeClient',compact('sort','products'));
    // }
}
