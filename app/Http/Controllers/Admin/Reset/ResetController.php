<?php

namespace App\Http\Controllers\Admin\Reset;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResetController extends Controller
{
    public function forgetPassword()
    {
       return view('admin.pages.reset-password.forget');
    }
}
