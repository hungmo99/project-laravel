<?php

namespace App\Models;

use App\Helper\CartHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class order extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function add($request){
        // dd($request->all());
        $cartHelper = new CartHelper;
        $client = session()->get('customer');
        $cart = session()->get('cart');
        $order = order::create([
            'id_user'=>$client->id,
            'name'=>$request->name,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'total_price'=>$cartHelper->into_money,
            'note'=>$request->note
        ]);

        foreach($cartHelper->items as $value){
            order_detail::create([
                'id_order'=> $order->id,
                'id_product_detail'=>$value['id'],
                'price'=>$value['price'],
                'quantity'=>$value['quantity']
            ]);

            $product_detail = product_detail::find($value['id']);
            $product_detail->update(['quantity'=>($product_detail->quantity - $value['quantity'])]);
        }
        session()->pull('cart');
    }

    public function get_username(){
        return $this->BelongsTo(User::class,'id_user','id');
    }

    public static function get_order($id){
        return DB::table('orders')->where('id',$id)->first();
    }
}
