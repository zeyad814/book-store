<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class orderAdminController extends Controller
{
    public function index(){
        $orders=Order::all();
        return view('admin.pages.orders.index',compact('orders'));
    }
}
