<?php
namespace App\Repository;
use Session;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
// use App\Repository\repoInterface;

class wishlistRepo implements repoInterface{

    public function index(){
        $wishlists= Wishlist::where('user_id',Auth::guard('web')->user()->id)->paginate(10);
        return view('front.pages.wishlist.index',compact('wishlists'));
    }
    public function store($id){
            if(Auth::check()==false){
                session(['url_previous'=>url()->previous()]);
                return redirect()->route('login')->with('error','you must login first!');
                }
                if(Wishlist::where(['product_id'=>$id,'user_id'=>Auth::guard('web')->user()->id])->exists()){
                    return redirect()->back()->with('error','product is already exists in wishlist');
                }
                if(session()->has('url_previous')){
                    session()->forget('url_previous');
                }
                Wishlist::create([
                    'product_id' => $id,
                    'user_id' => Auth::guard('web')->user()->id
                ]);
        return redirect()->back()->with('success','product is added to wishlist');
    }
    public function destroy($id){
        Wishlist::where(['user_id' => Auth::guard('web')->user()->id,'product_id' => $id])->delete();
        return redirect()->back()->with('success','product has been removed from wishlist');
    }
}
