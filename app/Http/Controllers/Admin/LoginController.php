<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class LoginController extends Controller
{

    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function loginWithFacebook()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            $isUser = User::where('facebook_id', $user->id)->first();

            if($isUser){
                Auth::login($isUser);
                return redirect()->route('admin');
            }else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    // 'role_id' => 1,
                    'facebook_id' => $user->id,
                    'password' => bcrypt('1234')
                ]);

                Auth::login($createUser);
                return redirect()->route('admin');
            }

        } catch (\Throwable $exception) {
            dd($exception->getMessage());
        }
    }


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

