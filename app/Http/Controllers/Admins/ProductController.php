<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\attr;
use App\Models\Brand;
use App\Models\Category;
use App\Models\img_pro;
use App\Models\product;
use App\Traits\UploadFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    use UploadFile;
    public function index(){
        $products = product::paginate(10);
        $category = Category::all();
        $brand = Brand::all();
        return view('admins.pages.product.index',compact('products','category','brand'));
    }
    public function create(){
        $category = Category::all();
        $brand = Brand::all();
		$attr = attr::all();
        return view('admins.pages.product.create',compact('category','attr','brand'));
    }
    public function store(Request $request){
        $dataUpload = $this->uploadImage($request, 'product', 'avatar');
        $dataInsert = [
            'name' => $request->name,
            'sku'=> $request->sku,
            'id_cate' => $request->id_cate,
            'id_brand' => $request->id_brand,
            'description' => $request->description,
            'slug' => Str::slug($request->name, '-'),
            'status'=>$request->status,
            'meta_title'=>$request->meta_title,
            'meta_keyword'=>$request->meta_keyword,
            'meta_desc'=>$request->meta_desc,
        ];
        $dataInsert['avatar'] = $dataUpload;
        $product = Product::create($dataInsert);
        if ($request->hasFile('image')) {
            foreach ($request->image as $value) {
                $UploadMuiple = $this->uploadImageMutiple($value, 'product');
                img_pro::create([
                    'image' => $UploadMuiple,
                    'id_product' => $product->id
                ]);
            }
        }
        return redirect()->route('products.index')->with('success', 'Add Success');
    }
    public function edits($id){
        $product = product::find($id);
        $category = Category::all();
        $brand = Brand::all();
        $img_pro = img_pro::where('id_product',$id)->get();
        return view('admins.pages.product.edit',compact('product','category','brand','img_pro'));
    }
    public function update(Request $request,$id){
        $dataUpload = $this->uploadImage($request, 'product', 'avatar');
        $product = product::find($id);
        // dd($pro->id);
        $dataUpdate = [
            'name' => $request->name,
            'sku' => $request->sku,
            'id_cate' => $request->id_cate,
            'id_brand' => $request->id_brand,
            'description' => $request->description,
            'slug' => Str::slug($request->name, '-'),
            'meta_title' => $request->meta_title,
			'meta_keyword' => $request->meta_keyword,
			'meta_desc' => $request->meta_desc,
            'status'=>$request->status
        ];

        if ($request->file('avatar') == null) {
            $dataUpdate['avatar'] = $product->avatar;
        } else {
            File::delete($product->avatar);
            $dataUpdate['avatar'] = $dataUpload;
        }
        product::find($id)->update($dataUpdate);


        //insert to img_pro


        if ($request->hasFile('image')) {
            img_pro::where('id_pro',$id)->delete();
            foreach ($request->image as $value) {
                $UploadMuiple = $this->uploadImageMutiple($value, 'product');
                img_pro::create([
                    'image' => $UploadMuiple,
                    'id_product' => $product->id
                ]);
            }
        }
        return redirect()->route('products.index')->with('success', 'Update Success');
    }
    public function delete($id){
        img_pro::where('id_product',$id)->delete();
        $product = product::find($id)->delete();
		return redirect()->route('products.index')->with('success', 'Delete Success');
    }
}
