<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    // public function membership(){
    //     return view('admin.pages.Login.membership');
    // }
    // public function membershipGet($type)
    // {
    //     if($type=='free')
    //     {
    //         //make free membership
    //         $user=User::find(auth()->user()->id);
    //         $user->update([
    //             'membership_type'=>'free'
    //         ]);
    //         return redirect()->route('admin');
    //     }elseif($type=='premium')
    //     {
    //         //decide price
    //         $price=100;

    //         dd($price);
    //     }else
    //     {
    //         //decide price
    //         $price=150;
    //         dd($price);
    //     }

        //make payment via ssl commerz





    //     return view('login.membership');
    // }
}
