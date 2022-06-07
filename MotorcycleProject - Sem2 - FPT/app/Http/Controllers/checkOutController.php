<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class checkOutController extends Controller
{
    public function index()
    {
        $carts=session()->get('cart',[]);
        $users=User::all()->where('id',Auth::user()->id)->first();

       return view('trang-chu.Cart.checkout',compact(['carts','users']));
    }

    public function checkout(Request $request,$pro_id)
    {
        $total=0;
        $sum=0;
        $users=User::all('id')->where('id',Auth::user()->id)->first();


        $carts=session()->get('cart',[]);
        foreach ($carts as $pro_id=>$cart){
            $total += $cart['price'] * $cart['quantity'] ;
            $sum +=$cart['quantity'];
        }
        $tong=$total +30;




        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'district'=>'required',
            'ward'=>'required',
            'city'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'card_name'=>'required',
            'card_number'=>'required',
            'expiration'=>'required',
            'secure_code'=>'required',

        ]);


        Checkout::create([
            'user_id'=>Auth::user()->id,
            'name'=>$request->name,
            'email'=>$request->email,
            'description'=>$request->description,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'ward'=>$request->ward,
            'district'=>$request->district,
            'city'=>$request->city,
            'quantity'=>$sum,
            'pay_method'=>1,
            'total'=>$tong,
            'status'=>0,
            'card_name'=>$request->card_name,
            'card_number'=>$request->card_number,
            'expiration'=>$request->expiration,
            'secure_code'=>$request->secure_code,
        ]);
        $orders=Checkout::latest()->first();
        $order=$orders->id;
        foreach ($carts as $pro_id=>$cart){
            $product=$cart['name'];
            $quantity=$cart['quantity'];
            $subtotal=$cart['price'] * $cart['quantity'];
            Order::create([
                'checks_id'=>$order,
                'pro_name'=>$product,
                'quantity'=>$quantity,
                'total_price'=>$subtotal,
            ]);


        }
        session()->forget('cart');


        return redirect()->route('checkout_success');
    }


}
