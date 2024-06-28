<?php

namespace App\Http\Controllers\auth;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\registerRequest;

class auth_controller extends Controller
{
    public function login(){
        return view('account.login');
    }
    public function register(){
        return view('account.register');
    }


    public function submitRegister(registerRequest $request)
    {
        $data=$request->validated();
        $image=$request->file('image');
        $ext=$image->getClientOriginalExtension();
        $img=time().rand(100,200).'.'. $ext ;
        $file=$image->move(public_path('upload/users'),$img);
        $data['image']=$img;
        User::create($data);
        toastr()->success('Data has been created successfully!');
        return redirect()->route('login');

    }

    public function submitLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required','string'],
        ]);
            if(auth::guard('web')->attempt($credentials))
                {
                    if(session('url_previous') != null){
                        return redirect(session()->get('url_previous'));
                    }
                 return redirect()->route('front.pages.home.index');
                }
                elseif(auth::guard('admin')->attempt($credentials))
                {
                 return redirect()->route('admin_home');
                }
            return back()->withErrors([
            'password' => 'The email or password is incorrect',
        ]);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('front.pages.home.index');
    }
}

