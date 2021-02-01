<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function categories(){
        return $this->belongsTo(Category::class,'id_cate');
    }

    public static function get_blog(){
        return DB::table('blogs')
        ->join('admins', 'blogs.id_admin', '=', 'admins.id')
        ->join('categories', 'blogs.id_cate', '=', 'categories.id')
        ->select('blogs.*', 'admins.name as adminName','categories.name as cateName')
        ->get();
    }
}
