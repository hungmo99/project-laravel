<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Traits\UploadFile;
use Illuminate\Support\Facades\File;

class BrandController extends Controller
{
    use UploadFile;
    public function index(){
        $brand = Brand::paginate(10);
        return view('admins.pages.brand.index',compact('brand'));
    }
    public function store(BrandRequest $request){
        $dataUpload = $this->uploadImage($request, 'brand','image');
        $dataInsert = [
            'name' => $request->name,
            'status' => $request->status,
            'slug' => Str::slug($request->name,'-')
        ];
        $dataInsert['image'] = $dataUpload;
        // dd($dataInsert);
        $brand = Brand::create($dataInsert);
       if($brand){
           return redirect()->route('brand.index')->with('success','Add Success');
       }
    }

    public function edits($id){
        $brand = Brand::find($id);
        return view('admins.pages.brand.edit',compact('brand'));
    }

    public function update(BrandRequest $request,$id){
        $dataUpload = $this->uploadImage($request, 'brand', 'image');
        $brand = Brand::find($id);
        $dataUpdate = [
            'name' => $request->name,
            'status' => $request->status,
            'slug' => Str::slug($request->name,'-')
        ];

        if ($request->file('image') == null) {
            $dataUpdate['image'] = $brand->image;
        } else {
            File::delete($brand->image);
            $dataUpdate['image'] = $dataUpload;
        }
        Brand::find($id)->update($dataUpdate);
        return redirect()->route('brand.index')->with('success', 'Edit Success');
    }

    public function delete($id){
        $brand = Brand::find($id)->delete();
        Brand::delete_image($id);
        return redirect()->route('brand.index')->with('success','Delete Success');
    }
}
