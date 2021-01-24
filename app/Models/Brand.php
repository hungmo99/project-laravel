<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Brand extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function delete_image($id){
        return DB::table('brands')->where('id',$id)->delete();
    }
}
