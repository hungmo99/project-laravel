<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admins.pages.category.category');
    }
    public function add(){
        return view('admins.pages.category.add-category');
    }
}
