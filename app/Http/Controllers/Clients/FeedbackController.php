<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\feedback_pro;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(Request $request,$id){
        $client = session()->get('client');
        $demo = 'feedback';
        if($client){
            feedback_pro::create([
                'id_product'=>$id,
                'id_user'=>$client->id,
                'content'=>$request->content
            ]);
            return redirect()->back()->with('message','ok');
        }else{
            return view('client.content.login',compact('demo'));
        }
    }
}
