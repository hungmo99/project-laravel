<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginAdminRequest;
use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        if(session()->get('admin')){
            return view('HomeAdmin');
        }else{
            return view('admins.pages.login.login');
        }
    }

    public function login(){
        return view('admins.pages.login.login');
    }

    public function signin(LoginAdminRequest $request){
        $check_email = admin::get_email($request->email);
        if($check_email){
            if(Hash::check($request->password, $check_email->password)){
                session()->put('admin',$check_email);
                // dd(session()->get('admin'));
                return redirect()->route('admins.index');
            }else{
                return redirect()->back()->with('password_err','mật khẩu không chính xác');
            }
        }else{
            return redirect()->back()->with('email_err','email không tồn tại');
        }
    }

    public function logout(){
        session()->pull('admin');
        return redirect()->route('admins.login');
    }
}
