<?php

namespace App\Http\Controllers\front;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class productController extends Controller
{
    public function index(request $request,$id = null){
        $products=Product::paginate(15);
        if(!empty($id)){
            $products=Product::where('category_id',$id)->paginate(15);
        }
        return view('front.pages.products.index',compact('products'));
    }
    public function show($id){
        $product=Product::find($id);
        return view('front.pages.products.show',compact('product'));
    }
}
