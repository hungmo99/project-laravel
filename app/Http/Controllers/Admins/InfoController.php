<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\InfoRequest;
use App\Models\information;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index(){
        $info = information::paginate(10);
        return view('admins.pages.information.index',compact('info'));
    }

    public function store(InfoRequest $request){
        $info = information::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'status' => $request->status,
        ]);
        if($info){
            return redirect()->route('info.index')->with('success','Add Information Success');
        }
    }

    public function edits($id){
        $info = information::find($id);
        return view('admins.pages.information.edit',compact('info'));
    }

    public function update(InfoRequest $request,$id){
        $info = information::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'status' => $request->status,
        ]);
        if($info){
            return redirect()->route('info.index')->with('success','Edit Information Success');
        }
    }

    public function delete($id){
        $info = information::find($id)->delete();
        if($info){
            return redirect()->route('category.index')->with('Delete','Delete Success');
        }
    }
}
