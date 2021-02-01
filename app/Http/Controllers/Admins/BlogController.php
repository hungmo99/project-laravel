<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Traits\UploadFile;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    use UploadFile;
    public function index(Blog $blog){
        // $cate = DB::table('categories')->where('type',0)->get();
        $blogs = $blog->get_blog();
        // dd($blogs);
        return view('admins.pages.blog.index',compact('blogs'));
    }

    public function create(){
        $category=Category::where('type',0)->get();
        $admin = Session::get('admin');
        return view('admins.pages.blog.create',compact('admin','category'));
    }

    public function store(Request $request){
        $admin = Session::get('admin');
        $dataUpload = $this->uploadImage($request, 'blog', 'image');
        $blog_insert =[
            'name' => $request->name,
            'title' => $request->title,
            'content' => $request->content,
            'status' => $request->status,
            'slug' => Str::slug($request->name, '-'),
            'id_cate' => $request->id_cate,
            'id_admin' => $admin->id,
        ];
        $blog_insert['image'] = $dataUpload;
        // dd($blog_insert);
        $blog = Blog::create($blog_insert);
        if($blog){
            return redirect()->route('blog.index')->with('success','thêm mới thành công');
        }

    }

    public function edits($id){
        $blog = Blog::find($id);
        $category=Category::where('type',0)->get();
        return view('admins.pages.blog.edit',compact('blog','category'));
    }

    public function update(Request $request, $id){
        $dataUpload = $this->uploadImage($request, 'blog', 'image');
        $blog = Blog::find($id);
        $dataUpdate = [
            'name' => $request->name,
            'title' => $request->title,
            'content' => $request->content,
            'status' => $request->status,
            'slug' => Str::slug($request->name, '-'),
            'id_cate' => $request->id_cate,
        ];

        if ($request->file('image') == null) {
            $dataUpdate['image'] = $blog->image;
        } else {
            File::delete($blog->image);
            $dataUpdate['image'] = $dataUpload;
        }
        Blog::find($id)->update($dataUpdate);
        return redirect()->route('blog.index')->with('success', 'Edit Success');
    }

    public function delete($id){
        Blog::find($id)->delete();
        return redirect()->route('blog.index')->with('success', 'Delete Success');
    }
}
