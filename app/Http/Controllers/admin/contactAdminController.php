<?php

namespace App\Http\Controllers\admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class contactAdminController extends Controller
{
    public function index(){
        $contacts=Contact::all();
        return view('admin.pages.contacts.index',compact('contacts'));
    }
    public function deleteContact($id){
        $data=Contact::find($id);
        $data->delete();
        return back();
    }
}
