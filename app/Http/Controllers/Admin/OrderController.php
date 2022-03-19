<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
  public function vieworder(){
      return view('admin.pages.order.list');
  }
}
