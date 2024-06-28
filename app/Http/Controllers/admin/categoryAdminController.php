<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\categoryRequest;

class categoryAdminController extends Controller
{
    public function index(){
        $categories=Category::all();
        return view('admin.pages.categories.index',compact('categories'));
    }
    public function addCategory(){
        return view('admin.pages.categories.addCategory');
    }
    public function submit_category(categoryRequest $request){

    $data= $request->validated();
    $image=$data['image'];
    $ext=$image->getClientOriginalExtension();
    $name = time() .'.'. $ext;
    $img =$image->move(public_path('admin/category'), $name);
    $data['image'] = $name;
    Category::create($data);
    toastr()->success('Data has been created successfully!');
    return redirect()->route('admin_category');
    }
    public function deleteCategory($id){
        $data = Category::find($id);
        $data->delete();
        return redirect()->route('admin_category');
    }
}
