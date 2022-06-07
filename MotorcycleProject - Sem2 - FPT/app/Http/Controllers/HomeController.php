<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\category;
use App\Models\Checkout;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function index()
    {
        $products = DB::table('products')
            ->join('categories', 'products.cate_id', '=', 'categories.cate_id')

            ->select('products.*', 'categories.categoryName')
            ->where('productType',1)
            ->get();
        $accessories = DB::table('products')
            ->join('categories', 'products.cate_id', '=', 'categories.cate_id')

            ->select('products.*', 'categories.categoryName')
            ->where('productType',2)
            ->get();
        $blogs = Blog::latest()->get();
        $carts=session()->get('cart',[]);
        $quantityCart=$carts;
        $dem=count($quantityCart);
        return view('trang-chu.home',compact(['products','blogs','dem','carts','accessories']));
    }

    public function ProductPeople(){
        $products=product::all()->where('productType',0);
        $categories=category::all();
        $sortBy = request()->get('sort_by');
        $priceFrom = request()->get('priceFrom');
        $priceTo = request()->get('priceTo');
        $carts=session()->get('cart',[]);
        $quantityCart=$carts;
        $dem=count($quantityCart);
        $products=product::filterProduct($sortBy)->filterPrice($priceFrom, $priceTo)->paginate(6);
        return view('trang-chu.productlist',compact(['products','categories','dem','carts']))->with('i',(request()->input('page',1)-1)*5);
    }





    public function news(){
        $blogs = Blog::latest()->get();
        $carts=session()->get('cart',[]);
        $quantityCart=$carts;
        $dem=count($quantityCart);
        return view('trang-chu.blogs.blog_list',compact(['blogs','dem','carts']))->with('i',(request()->input('page',1)-1)*5);
    }


    public function detail(product $product,$id)
    {
        $product = product::findOrFail($id);
        $carts=session()->get('cart',[]);
        $quantityCart=$carts;
        $dem=count($quantityCart);
        return view('trang-chu.productpage',compact(['product','dem','carts']));
    }


    public function blog_detail(Blog  $blog,$id){
        $blogs = Blog::latest()->paginate(50);
        $blog = Blog::findOrFail($id);
        $carts=session()->get('cart',[]);
        $quantityCart=$carts;
        $dem=count($quantityCart);
        return view('trang-chu.blogs.blog_detail',compact(['blog','blogs','carts','quantityCart','dem']));
    }

    public function about_us(){
        $carts=session()->get('cart',[]);
        $quantityCart=$carts;
        $dem=count($quantityCart);
        return view('trang-chu.about_us',compact(['carts','quantityCart','dem']));
    }
}
