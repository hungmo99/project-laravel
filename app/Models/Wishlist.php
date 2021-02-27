<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Wishlist extends Model
{
    use HasFactory;
    protected $guarded = [];
    public static function get_wishlists(){
        return DB::table('wishlists')
        ->join('product_details', 'wishlists.id_product_detail', '=', 'product_details.id')
        ->join('products', 'product_details.id_product', '=', 'products.id')
        ->select('wishlists.*', 'product_details.price','products.name','products.avatar','product_details.discount')
        ->get();
    }
    public function product_details()
    {
        return $this->belongsTo(product_detail::class, 'id_product_detail', 'id');
    }
    public static function get_wishlist($id){
        return DB::table('wishlists')->where('id_pro',$id)->first();
    }
}
