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
    public function product_details()
	{
		return $this->hasMany(product_detail::class, 'id_product', 'id');
	}
}
