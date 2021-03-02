<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\attr;
use App\Models\feedback_pro;
use App\Models\img_pro;
use App\Models\product;
use App\Models\product_detail;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function index($slug,$id_detail){
        $attr=attr::all();
		$product=product::where('slug','=',$slug)->first();
		$product_detail=product_detail::where('id_product','=',$product->id)->get();
		$img_pro=img_pro::where('id_product','=',$product->id)->get();
		$product_detail_id=product_detail::find($id_detail);
		$feedback_pro=feedback_pro::where('id_product',$product->id)->orderby('created_at','desc')->get();
		$product_news=product::where([['status','=','1']])->orderby('created_at','desc')->limit(3)->get();
		// dd($product_news);
        $count_star=$feedback_pro->count();
		foreach ($product_news as $key=> $item) {
			$details = isset($item->product_details)?$item->product_details:[];
			if (isset($details[0])){
				$item->setAttribute('price', $details[0]['price']);
				$item->setAttribute('discount', $details[0]['discount']);
				$item->setAttribute('id_detail', $details[0]['id']);
				$item->setAttribute('quantity', $details[0]['quantity']);
			}
			else{
				$item->setAttribute('price', '0');
				$item->setAttribute('discount', '0');
				$item->setAttribute('id_detail', '0');
				$item->setAttribute('quantity', '0');
			}
		}
		return view('clients.pages.product_detail',compact('product','product_news','product_detail','product_detail_id','img_pro','attr','feedback_pro','count_star'));
    }
}
