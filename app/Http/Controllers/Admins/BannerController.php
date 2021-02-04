<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use App\Traits\UploadFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    Use UploadFile;
    public function index(){
        $banner = Banner::paginate(10);
        return view('admins.pages.banner.index',compact('banner'));
    }

    public function create(){
        return view('admins.pages.banner.add');
    }

    public function store(BannerRequest $request){
        $dataUpload = $this->uploadImage($request, 'banner', 'image');
        $dataInsert = [
            'name' => $request->name,
            'title' => $request->title,
            'content' => $request->content,
            'slug' => Str::slug($request->name,'-'),
            'status' => $request->status
        ];
        $dataInsert['image']=$dataUpload;
        $banner = Banner::create($dataInsert);
        if($banner){
            return redirect()->route('banner.index')->with('success','Add Success');
        }
    }

    public function edits($id){
        $banner = Banner::find($id);
        return view('admins.pages.banner.edit',compact('banner'));
    }

    public function update(BannerRequest $request,$id){
        $banner = Banner::find($id);
        $dataUpload = $this->uploadImage($request, 'banner', 'image');
        $dataUpdate = [
            'name' => $request->name,
            'title' => $request->title,
            'content' => $request->content,
            'slug' => Str::slug($request->name,'-'),
            'status' => $request->status
        ];
        if ($request->file('image') == null) {
            $dataUpdate['image'] = $banner->image;
        } else {
            File::delete($banner->image);
            $dataUpdate['image'] = $dataUpload;
        }
        Banner::find($id)->update($dataUpdate);
        return redirect()->route('banner.index')->with('success', 'Edit Success');
    }

    public function delete($id){
        Banner::find($id)->delete();
        return redirect()->route('banner.index')->with('success', 'Delete Success');
    }
}
