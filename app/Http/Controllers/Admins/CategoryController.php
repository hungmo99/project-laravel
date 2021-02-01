<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(){
        $cate = Category::paginate(10);
        return view('admins.pages.category.index',compact('cate'));
    }
    public function create(){
        return view('admins.pages.category.add');
    }
    public function store(CategoryRequest $request){
        $cate = Category::create([
            'name' => $request->name,
            'desc' => $request->desc,
            'status' => $request->status,
            'type' => $request->type,
            'slug' => Str::slug($request->name,'-')
        ]);
       if($cate){
           return redirect()->route('category.index')->with('success','Add Success');
       }
    }
    public function edits($id){
        $cate = Category::find($id);
        return view('admins.pages.category.edit',compact('cate'));
    }
    public function update(Request $request,$id){
        $cate = Category::find($id)->update([
            'name' => $request->name,
            'desc' => $request->desc,
            'status' => $request->status,
            'type' => $request->type,
            'slug' => Str::slug($request->name)
        ]);
        if($cate){
            return redirect()->route('category.index')->with('success','Edit Success');
        }
    }
    public function delete($id){
        $cate = Category::find($id)->delete();
        if($cate){
            return redirect()->route('category.index')->with('success','Delete Success');
        }
    }
}
