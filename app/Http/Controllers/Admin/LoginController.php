<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(){
        return view('admin.pages.login');
    }
    public function doLogin(Request $request)
    {
        // dd($request->all());

        $userInfo=$request->except('_token');
//        $credentials['email']=$request->user_email;
//        $credentials['password']=$request->user_password;
        // dd(Auth::attempt($userInfo));

        if(Auth::attempt($userInfo)){
            return redirect()->route('admin')->with('message','Login successful.');
        }
        return redirect()->back()->with('error','Invalid user credentials');

    }
}

