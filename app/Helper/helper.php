<?php

use App\Models\Category;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

function getCategories(){
    return Category::get()->all();
}
function countWishlist(){
    $count=0;
    if(Auth::check()==true){
        $count = Wishlist::where('user_id',Auth::guard('web')->user()->id)->count();
    }
    return $count;
}
