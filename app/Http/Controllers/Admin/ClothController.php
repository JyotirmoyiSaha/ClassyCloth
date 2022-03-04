<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cloth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClothController extends Controller
{
    public function clothlist()
    {
        $clothlists=Cloth::all();
        return view('admin.pages.Cloth.cloth-list',compact('clothlists'));
    }
    public function addCloth()
    {
        return view('admin.pages.Cloth.cloth-form');
    }
    public function clothCreate(Request $request)
    {
        $filename='';
      if($request->hasfile('cloth_image'))
      {
          $file=$request->file('cloth_image');
          $filename=date('hs').'.'.$file->getclientOriginalExtension();
          $file->storeAs('/uploads',$filename);

      }

      Cloth::create([
            
        'cloth_image'=>$filename,
        'cloth_name'=>$request->cloth_name,
        'cloth_code'=>$request->cloth_code,
        'cloth_type'=>$request->cloth_type,
        'cloth_color'=>$request->cloth_color,
        'cloth_size'=>$request->cloth_size,
        'details'=>$request->details,
        'cloth_price'=>$request->cloth_price,
     ]);
     return redirect()->route('cloth.list');
}
}