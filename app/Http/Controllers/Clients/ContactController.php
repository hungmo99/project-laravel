<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Aws\Redshift\Exception\RedshiftException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    public function index(){
        return view('clients.pages.contact');
    }
    public function post_contact(Request $request){
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'content' => $request->content,
        ]);
        return redirect()->back()->with('message','Send Success');
    }
}
