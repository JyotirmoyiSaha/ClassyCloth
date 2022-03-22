<?php

namespace App\Http\Controllers\Admin;

use App\Models\Seller;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SellerController extends Controller
{
  public function sellerlist (){
    $sellers = Seller::all();
      return view('admin.pages.sellers.list',compact('sellers'));

  }
  public function sellercreate(){
    return view('admin.pages.sellers.form');
  }
  public function sellerstore(Request $request){
    $filename='';
    if($request->hasfile('image'))
    {
        $file=$request->file('image');
        $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
        $file->storeAs('/uploads',$filename);

    }
    Seller::create([
         
        'image'=>$filename,
        'name'=>$request->name,
        'email'=>$request->email,
        'address'=>$request->address,
        'contact'=>$request->contact,
   
    ]);
    return redirect()->route('seller.list');

  }
}
