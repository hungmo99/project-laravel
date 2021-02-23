<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\attr;
use App\Models\product;
use App\Models\product_detail;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function index($id){
        $product = product::find($id);
		$attr = attr::all();
		$product_detail = product_detail::where('id_product',$id)->get();
		return view('admins.pages.product-detail.index', compact('attr', 'product', 'product_detail'));
    }
    public function store(Request $request,$id){
        $discount = $request->discount;
        if($discount<=0){
            $discount = 0;
        }else if($discount>=100){
            $discount = 100;
        }else{
            $discount = $request->discount;
        }
		$product_detail = product_detail::create([
			'id_product' => $id,
			'sku' => $request->sku,
			'id_attr' => $request->id_attr,
			'price' => $request->price,
			'discount' => $request->discount,
			'quantity' => $request->quantity,
			'status' => $request->status,
		]);
		return redirect()->back()->with('success', 'Add Success');
    }
    public function edits($id, $id_detail) {
		$product = product::find($id);
		$product_detail = product_detail::find($id_detail);
		$attr = attr::all();
		return view('admins.pages.product-detail.edit', compact('attr', 'product', 'product_detail'));
	}
    public function update(Request $request,$id,$id_detail){
        $product_detail = product_detail::find($id_detail);
		$product_detail->update([
			'id_product' => $id,
			'sku' => $request->sku,
			'id_attr' => $request->id_attr,
			'price' => $request->price,
			'discount' => $request->discount,
			'quantity' => $request->quantity,
			'status' => $request->status,
		]);
		return redirect()->route('product-detail.index', $id)->with('success', 'Cập nhật thành công');
    }
    public function delete($id,$id_detail){
        $product_detail = product_detail::find($id_detail);
		// if ($product_detail->order_details->count() > 0) {
		// 	return redirect()->back()->with('error', 'Không thể xóa');
		// } else {
			$product_detail->delete();
			return redirect()->back()->with('success', 'Xóa thành công');
		// }
	}
}
