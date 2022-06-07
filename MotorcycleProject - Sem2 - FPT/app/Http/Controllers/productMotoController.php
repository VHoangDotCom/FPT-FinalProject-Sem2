<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;



class productMotoController extends Controller
{
    private $htmlSelect ;
    public function __constructor(){
        $this->htmlSelect;
    }

    public function index()
    {
        $products = product::latest()->where('productType', '2')->paginate(50);
        return view('product.productMoto.index', compact('products'))->with('i', (\request()->input('page', 1) - 1) * 5);
    }


    public function create()
    {

        $categories=category::all(['cate_id','categoryName']);
        foreach ($categories as $dt) {
            if ($dt['cate_id'] > 0) {
                $this->htmlSelect .= "<option value='{$dt["cate_id"]}'>" . $dt["categoryName"] . "</option>";
            }
        }


        $htmlOption=$this->htmlSelect;
        return view('product.productMoto.create',compact('htmlOption'));
    }


    public function store(Request $request)
    {

        $request->validate([
            'productName'=> 'required|unique:products',
            'title'=> 'required',
            'pro_new_price'=> 'required',
            'pro_sale'=> 'required',
            'quantity'=> 'required',
            'cate_id'=> 'required',
            'productType'=>'required',
            'status'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }


        product::create($input);
        return redirect()->route('productMoto.index')->with('success','Add Product Successfully');
    }


    public function show(product $product,$id)
    {

        $product = product::findOrFail($id);
        return view('product.productMoto.show',compact('product'));
    }


    public function edit(product $product,$pro_id)
    {
        $categories=category::all(['cate_id','categoryName']);
        foreach ($categories as $dt) {
            if ($dt['cate_id'] > 0) {
                $this->htmlSelect .= "<option value='{$dt["cate_id"]}'>" . $dt["categoryName"] . "</option>";
            }
        }


        $htmlOption=$this->htmlSelect;
        $product = product::findOrFail($pro_id);

        return view('product.productMoto.edit',compact('htmlOption','product'));

    }


    public function update(Request $request,$pro_id)
    {

        $request->validate([
            'productName'=> 'required|unique:products',
            'title'=> 'required',
            'pro_new_price'=> 'required',
            'pro_old_price'=> 'required',
            'pro_sale'=> 'required',

            'quantity'=> 'required',
            'cate_id'=> 'required',
            'status'=>'required',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        $product = product::findOrFail($pro_id);

        $product->update($input);
        return redirect()->route('productMoto.index')->with('success','Update Product successfully');

    }


    public function destroy(product $product,$pro_id)
    {

        $product = product::findOrFail($pro_id);
        $product->delete();
        return redirect()->route('productMoto.index')->with('success','Delete Item Successful');

    }
}
