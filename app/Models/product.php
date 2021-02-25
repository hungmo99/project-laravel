<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function categories()
	{
		return $this->belongsTo(Category::class, 'id_cate','id');
	}
    public function brands()
	{
		return $this->belongsTo(Brand::class, 'id_brand','id');
	}
    public function img_pros()
	{
		return $this->hasMany(img_pro::class, 'id_product', 'id');
	}
    public function product_details()
	{
		return $this->hasMany(product_detail::class, 'id_product', 'id');
	}
    public static function get_cate($product){
		foreach ($product as $value) {
			$details = isset($value->product_details)?$value->product_details:[];
			if (isset($details[0])){
				$value->setAttribute('price', $details[0]['price']);
				$value->setAttribute('discount', $details[0]['discount']);
				$value->setAttribute('id_detail', $details[0]['id']);
				$value->setAttribute('quantity', $details[0]['quantity']);
			}
			else{
				$value->setAttribute('price', '0');
				$value->setAttribute('discount', '0');
				$value->setAttribute('id_detail', '0');
				$value->setAttribute('quantity', '0');
			}
		}
        return $product;
    }
}
