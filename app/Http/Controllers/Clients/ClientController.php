<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\attr;
use App\Models\order_detail;
use App\Models\product;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

class ClientController extends Controller
{
    public function index(){
        $client= session()->get('customer');
        if(isset($client)){
            $attr=attr::all();
            $products=product::where('status','=','1')->orderby('created_at','desc')->paginate(1);
            foreach ($products as $key=> $product) {
                $details = isset($product->product_details)?$product->product_details:[];
                if (isset($details[0])){
                    $product->setAttribute('price', $details[0]['price']);
                    $product->setAttribute('discount', $details[0]['discount']);
                    $product->setAttribute('id_detail', $details[0]['id']);
                    $product->setAttribute('quantity', $details[0]['quantity']);
                }
                else{
                    $product->setAttribute('price', '0');
                    $product->setAttribute('discount', '0');
                    $product->setAttribute('id_detail', '0');
                    $product->setAttribute('quantity', '0');
                }
            }
            $wishlist = Wishlist::where('id_user',$client->id)->get();
                foreach($wishlist as $val){

                }
            if(isset($val)){
                return view('HomeClient',compact('products','attr','wishlist','val'));
            }else{
                return view('HomeClient',compact('products','attr','wishlist'));
            }
    }else{
        $attr=attr::all();
        $products=product::where('status','=','1')->orderby('created_at','desc')->paginate(1);
        foreach ($products as $key=> $product) {
			$details = isset($product->product_details)?$product->product_details:[];
			if (isset($details[0])){
                $product->setAttribute('price', $details[0]['price']);
				$product->setAttribute('discount', $details[0]['discount']);
				$product->setAttribute('id_detail', $details[0]['id']);
				$product->setAttribute('quantity', $details[0]['quantity']);
			}
			else{
                $product->setAttribute('price', '0');
				$product->setAttribute('discount', '0');
				$product->setAttribute('id_detail', '0');
				$product->setAttribute('quantity', '0');
			}
        }
        return view('HomeClient',compact('products','attr'));
    }
}
    public function login(){
        return view('clients.pages.login');
    }
    public function signin(Request $request){
        $email = User::where('email',$request->email)->first();
        // dd(Hash::make('123'));
        if ($email) {
            if (Hash::check($request->password, $email->password)) {
                session()->put('customer', $email);
                // dd(session()->get('client'));
                if($request->flag == 'check'){
                    return redirect()->route('client.checkout');
                }else if($request->flag == 'get_wishlist'){
                    return redirect()->route('client.wishlist');
                }
                else{
                    return redirect()->route('client.index');
                }
            }else{
                return redirect()->back()->with('err_password', 'password error');
            }
        } else {
            return redirect()->back()->with('err_email', 'email không tồn tại');
        }
    }
    public function register(Request $request){
        $email = User::where('email',$request->email)->first();
        if ($email) {
            return redirect()->back()->with('err_email', 'email already exists');
        } else {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'phone' => $request->phone,
            ];
            if ($request->password === $request->confirm_password) {
                $data['password'] = Hash::make($request->password);
            } else {
                return redirect()->back()->with('err_password', 'password does not match ');
            }
            User::create($data);
            return redirect()->route('client.login');
        }
    }
    public function account(){
        $client = session()->get('customer');
        return view('clients.pages.account',compact('client'));
    }
    public function account_update($id,Request $request){
        $client = session()->get('customer');
        $user = User::find($id);
        User::find($id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'gender'=>$request->gender
        ]);
        $user = User::find($id);
        $client = session()->put('customer',$user);
        return redirect()->route('client.account')->with('success','');
    }
    public function password_update(Request $request){
        $client = session()->get('customer');
        $user = User::where('email',$client->email)->first();
        if(Hash::check($request->password, $user->password)){
            if($request->newPassword == $request->confirm){
                User::find($client->id)->update(['password'=>Hash::make($request->newPassword)]);
                $user = User::where('email',$client->email)->first();
                session()->put('customer',$user);
                return redirect()->route('client.account')->with('success','');
            }else{
                return redirect()->back()->with('err_password','Incorrect Confirm Password');
            }
        } else{
            return redirect()->back()->with('err_confirm','Incorrect Password');
        }

    }
    public function logout(){
        session()->pull('customer');
        return redirect()->back();
    }
    public function order_detail($id){
        $order = order_detail::get_order_detail($id);
        // dd($order);
        return view('clients.pages.order-details',compact('order'));
    }
}
