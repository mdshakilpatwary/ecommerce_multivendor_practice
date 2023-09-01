<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        
        return view('backend.product.add');
    }
  
//    data insert in databsae code 
    public function save(Request $rqst)
    {
        $rqst->validate([
            'product_code' => 'required',
            'product_name' => 'required',
            'cost_price' => 'required',
            'sale_price' => 'required',
            'qnt' => 'required'
        ],[
            'product_code.required' => 'This product code is required',
            'product_name.required' => 'This product name is required',
            'sale_price.required' => 'This product Sale price is required',
        ]);

        $product = new Product;

        $product->product_code =$rqst->product_code;
        $product->product_name =$rqst->product_name;
        $product->product_desc =$rqst->product_desc;
        $product->cost_price =$rqst->cost_price;
        $product->sale_price =$rqst->sale_price;
        $product->qnt =$rqst->qnt;
        $product->status ='1';
        $product->save();
        return back()->with('message'," successfully data submited");
      
    }
    // data show code 
    public function manage(){
        $products = Product::all();

        return view('backend.product.manage', compact('products'));

    }
    public function delete($id){
        $product = Product::find($id);

        $product->delete();
        return back()->with('message'," successfully Delete done");

    }
    public function edit($id){
        $product = Product::find($id);
        return view('backend.product.edit', compact('product'));
    }
    function update(Request $rqst, $id){
        $product = Product::find($id);
        $product->product_code =$rqst->product_code;
        $product->product_name =$rqst->product_name;
        $product->product_desc =$rqst->product_desc;
        $product->cost_price =$rqst->cost_price;
        $product->sale_price =$rqst->sale_price;
        $product->qnt =$rqst->qnt;
        $product->update();
        return redirect()->route('product.manage')->with('message'," successfully Updated ");

    }
}
