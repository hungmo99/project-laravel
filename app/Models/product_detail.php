<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_detail extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function attrs()
	{
		return $this->belongsTo(attr::class, 'id_attr');
	}
    public function products()
	{
		return $this->belongsTo(product::class, 'id_product','id');
	}
	// public function wishlists()
	// {
	// 	return $this->hasMany(Wishlist::class, 'id_product_detail', 'id');
	// }
	// public function order_details()
	// {
	// 	return $this->hasMany(Order_detail::class, 'id_pro_detail', 'id');
	// }
}
