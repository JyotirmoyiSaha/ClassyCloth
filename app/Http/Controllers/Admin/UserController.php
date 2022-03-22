<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
   public function userlist(){
      $users = User::all();
    return view('admin.pages.Users.list',compact('users'));
   }

   public function adduser(){
    return view('admin.pages.Users.create');
   }
   public function storeuser(Request $request)
    {
        $userimage='';
        if ($request->hasfile('Imagefile')) {
            $file=$request->file('Imagefile');
            $userimage=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$userimage);
           // dd($userimage);
        }
        User::create([
            'image'=>$userimage,
            'role_id'=>$request->role,
            'name'=>$request->username,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            

        ]);
        return redirect()->back();

    }



}
