<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feedback_pro extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function products() {
        return $this->belongsTo(product::class, 'id_product', 'id');
    }
    public function users() {
    return $this->belongsTo(User::class, 'id_user', 'id');
  }
}
