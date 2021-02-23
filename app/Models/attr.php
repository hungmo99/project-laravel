<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attr extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function product_details(){
        // return $this->hasMany('App\Models\Product_detail');
          return $this->hasMany(product_detail::class, 'id_attr', 'id');

      }
}
