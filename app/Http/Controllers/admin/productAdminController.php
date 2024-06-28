<?php

namespace App\Http\Controllers\admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\productRequest;

class productAdminController extends Controller
{
    public function index(){
        $products=Product::all();
        return view('admin.pages.products.index',compact('products'));
    }
    public function addProduct(){
        $categores=Category::all();
        return view('admin.pages.products.addproduct',compact('categores'));
    }
    public function updateProduct($id){
        $categores=Category::all();
        $products=Product::find($id);
        return view('admin.pages.products.editproduct',compact('categores','products'));
    }

    public function submitProduct(productRequest $request)
    {
        $data = $request->validated();
        $data['price_after_discount'] = $data['price'] - ($data['price'] * $data['discount'] / 100);
        $data['code'] = Str::random();
        $image =$data['image'];
        $ext=$image->getClientOriginalExtension();
        $name = time() .'.'. $ext;
        $img =$image->move(public_path('admin/products'), $name);
         $data['image'] = $name;
        Product::create($data);
        toastr()->success('Data has been saved successfully!');
        return back();
    }
    public function moveImage($image)
    {
        $ext=$image->getClientOriginalExtension();
        $name = time() .'.'. $ext;
        $img =$image->move(public_path('admin/category'), $ext);
           return $data['image'] = $name;
    }

    public function submitUpdateProduct(productRequest $request, $id)
    {
        $data = $request->validated();
        $product = Product::findOrFail($id);
        $data['price_after_discount'] = $data['price'] - ($data['price'] * $data['discount'] / 100);
        $data['code'] = Str::random();
        if (isset($data['image'])) {
            if (file_exists(public_path('products/' . $product->image))) {
                unlink(public_path('products/' . $product->image));
            }
            $ext = request()->file('image')->getClientOriginalExtension();
            $data['image'] = time() . rand(10000, 2000) . ".$ext";
            request()->file('image')->move(public_path('products'), $data['image']);
        }
        $product->update($data);
        toastr()->success('Data has been updated successfully!');
        return redirect()->route('admin_product');
    }
    public function deleteProduct($id){
        $data = Product::find($id);
        $data->delete();
        return back();
    }


}
