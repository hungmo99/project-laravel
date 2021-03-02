<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class order_detail extends Model
{
    use HasFactory;
    protected $fillable = ['id_order','id_product_detail','price','quantity'];

    public static function get_order_detail($id){
        return DB::table('order_details')
        ->join('product_details', 'order_details.id_product_detail', '=', 'product_details.id')
        ->join('products', 'product_details.id_product', '=', 'products.id')
        ->join('attrs', 'product_details.id_attr', '=', 'attrs.id')
        ->join('orders', 'order_details.id_order', '=', 'orders.id')
        ->select('order_details.*', 'product_details.sku', 'orders.name','products.name as proName','attrs.value as sizeName')
        ->where('order_details.id_order',$id)
        ->get();
    }

    public static function get_order(){
        return DB::table('order_details')
        ->join('product_details', 'order_details.id_product_detail', '=', 'product_details.id')
        ->join('orders', 'order_details.id_order', '=', 'orders.id')
        ->select('order_details.*', 'product_details.sku', 'orders.name','orders.status','orders.total_price')
        // ->where('order_details.id_order',$id)
        ->get();
    }
}
