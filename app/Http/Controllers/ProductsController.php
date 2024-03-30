<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index(Request $req){
        $product_obj = Product::all();
        return  $product_obj;
    }
    public function create(Request $req){
        $product_obj = new Product;
        $product_obj->product_name = $req->product_name;
        $product_obj->product_category = $req->product_category;
        $product_obj->product_price = $req->product_price;
        $product_obj->save();
        return $product_obj;
    }
    public function delete(Request $req){
        $product_obj = Product::find($req->id);
        $product_obj->delete();
        return redirect()->back();
    }
    public function show(Request $req){
        $product_obj = Product::find($req->id);
        return $product_obj;
    }
    public function update(Request $req){
        $product_obj = Product::find($req->id);
        $product_obj->update([
            'product_name' => $req->product_name,
            'product_category' => $req->product_category,
            'product_price' => $req->product_price,
        ]);
        return $product_obj;
    }
}
