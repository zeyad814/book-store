<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Product;
class cartController extends Controller
{
    public function store(request $request,$id){
        $data = $request->all();
        $product = Product::find($id);
        if(Auth::check()==true){
            $user_id=Auth::guard('web')->user()->id;
        }else{
            $user_id=1;
        }
        $cart_id=rand(1,1000);
        $cartCollection = \Cart::getContent();
            \Cart::session($user_id)->add($cart_id,$product->name,$product->price,$data['product_qty'],$product);
        // dd(\Cart::getContent());
        return redirect()->back()->with('success','تمت اضافة المنتج بنجاح');
        // }
    }



}
