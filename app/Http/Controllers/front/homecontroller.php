<?php

namespace App\Http\Controllers\front;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class homecontroller extends Controller
{
    public function index(){
        $products=Product::all();
        return view('front.pages.home.index',compact('products'));
    }











    public function WE(){
        return view('front.pages.policies.we');
    }
    public function replacementPolicies(){
        return view('front.pages.policies.replacement');
    }
    public function privatetPolicies(){
        return view('front.pages.policies.private');
    }
}
