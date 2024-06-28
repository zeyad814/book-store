<?php

namespace App\Http\Controllers\api\admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\categoryRequest;
use App\Http\Resources\categoryResource;

class categoryController extends Controller
{
    public function index(){
        $categories=Category::paginate(1);
        return response()->json(['categories' => categoryResource::collection($categories)]);
        // return view('admin.pages.categories.index',compact('categories'));
    }
    public function addCategory()
    {
        return view('admin.pages.categories.addCategory');
    }
    public function create(categoryRequest $request)
    {
    $data= $request->validated();
    $image=$data['image'];
    $ext=$image->getClientOriginalExtension();
    $name = time() .'.'. $ext;
    $img =$image->move(public_path('admin/category'), $name);
    $data['image'] = $name;
    $create = Category::create($data);
    return response()->json(new categoryResource($create));
    // toastr()->success('Data has been created successfully!');
    // return redirect()->route('admin_category');
    }
    public function destroy($id){
        $data = Category::findOrFail($id);
        $data->delete();
        return response()->json(['message'=> 'This data is deleted successfully']);
    }
}
