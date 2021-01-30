<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    public function index(Blog $blog){
        $blog = $blog->get_admin();
        $cate = DB::table('categories')->where('type',0)->get();
        return view('admins.pages.blog.index',compact('blog','cate'));
    }

    public function create(){
        $admin = Session::get('admin');
        return view('admins.pages.blog.create',compact('admin'));
    }
}
