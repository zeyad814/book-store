<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class admin_home_controller extends Controller
{
    public function index(){
        $doctors= 0;
        $majors=0;
        $booking=0;
        return view('admin.pages.home.index',compact('doctors','majors','booking'));
    }
}
