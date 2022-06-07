<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Order;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profileController extends Controller
{
    public function index(){
        $carts=session()->get('cart',[]);
        $quantityCart=$carts;
        $dem=count($quantityCart);
        $user=User::findOrFail(Auth::user()->id);
        $checkouts=Checkout::all()->where('user_id',Auth::user()->id);
        return view('profile.index',compact(['user','checkouts','carts','quantityCart','dem',]));
    }
    public function edit($id){
          $user=User::findOrFail($id);
        $carts=session()->get('cart',[]);
        $quantityCart=$carts;
        $dem=count($quantityCart);
        return view('profile.updateUser',compact('user','carts','dem','quantityCart'));

    }

    public function update(Request $request,$id){

        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'email'=>'required',
        ]);
        $user=User::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('profile')->with('success','Update Profile Successfully');
    }

    public function showOrder($id){

        $checkout=Checkout::findOrFail($id);

        $orders=Order::all()->where('checks_id',$id);
        $carts=session()->get('cart',[]);
        $quantityCart=$carts;
        $dem=count($quantityCart);

      return view('profile.showOrder',compact(['checkout','orders','carts','dem','quantityCart',]));
   }
}
