<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\attr;
use Illuminate\Http\Request;

class AttrController extends Controller
{
    public function index(){
        $attr = attr::all();
        return view('admins.pages.attr.index',compact('attr'));
    }
    public function store(Request $request){
        attr::create([
            'name' => $request->name,
            'value' => $request->value,
        ]);
        return redirect()->route('attr.index')->with('success','Add Success');
    }
    public function edits($id){
        $attr = attr::find($id);
        $attrs = attr::all();
        return view('admins.pages.attr.edit',compact('attr','attrs'));
    }
    public function update(Request $request,$id){
        attr::find($id)->update([
            'name' => $request->name,
            'value' => $request->value,
            ]);
            return redirect()->route('attr.index')->with('success','Edit Success');
    }
    public function delete($id){
        attr::find($id)->delete();
        return redirect()->route('attr.index')->with('success','Delete Success');
    }
}
