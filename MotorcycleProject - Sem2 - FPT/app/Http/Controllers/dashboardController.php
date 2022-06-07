<?php

namespace App\Http\Controllers;


use App\Models\Checkout;
use App\Models\Order;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class dashboardController extends Controller
{
    public function index(Order $order){
        $total=0;

        $countOrder=DB::table('checkouts')->count('id');
        $total=DB::table('checkouts')->sum('total');
        $countUser=DB::table('users')->count('id');
        $countAdmin=DB::table('users')->where('role',1)->count('id');

        $checkouts = DB::table('checkouts')
            ->join('orders', 'checkouts.id', '=', 'orders.checks_id')

            ->select('checkouts.*', 'orders.pro_name')
            ->latest()->get();


        return view('home',compact(['checkouts','countOrder','total','countUser','countAdmin']))->with('i',(request()->input('page',1)-1)*5);
    }

}
