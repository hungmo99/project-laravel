<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blog = Blog::paginate(1);
        $blogs = Blog::get_blog();
        return view('clients.pages.blog',compact('blog','blogs'));
    }
    public function detail($id){
        $blog = Blog::find($id);
        return view('clients.pages.blog_detail',compact('blog'));
    }
}
