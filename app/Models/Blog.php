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

    public static function get_admin(){
        $admins = DB::table('blogs')
        ->join('admins', 'blogs.id_admin', '=', 'admins.id')
        ->join('categories', 'blogs.id', '=', 'categories.id')
        ->select('blogs.*',  'admins.name as AdminName','categories.name','categories.type')
        ->paginate(10);
        return $admins;
    }
}
