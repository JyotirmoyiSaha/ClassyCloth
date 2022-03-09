<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ClothController;
use App\Http\Controllers\Admin\SellerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.master');
});

//for cloth
Route::get('/add/cloth',[ClothController::class,'addCloth'])->name('add.cloth');
Route::get('/cloth/list',[ClothController::class,'clothlist'])->name('cloth.list');
Route::post('/cloth/create',[ClothController::class,'clothCreate'])->name('cloth.list.create');

//cloth route end

//for seller
Route::get('/seller/list',[SellerController::class,'sellerlist'])->name('seller.list');
Route::get('/seller/create',[SellerController::class,'sellercreate'])->name('seller.create');
Route::post('/seller.store',[SellerController::class,'sellerstore'])->name('seller.store');

