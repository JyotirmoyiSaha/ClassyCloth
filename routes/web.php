<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ClothController;
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

Route::get('/add/cloth',[ClothController::class,'addCloth'])->name('add.cloth');
Route::get('/cloth/list',[ClothController::class,'clothlist'])->name('cloth.list');
Route::post('/cloth/create',[ClothController::class,'clothCreate'])->name('cloth.list.create');
Route::get('/cloth/view/{cloth_id}',[ClothController::class,'viewCloth'])->name('cloth.view');
Route::get('/edit/cloth/{cloth_id}',[ClothController::class,'editCloth'])->name('cloth.edit');
Route::put('/update/cloth/{cloth_id}',[ClothController::class,'updateCloth'])->name('cloth.update');
Route::get('/delete/cloth/{cloth_id}',[ClothController::class,'deleteCloth'])->name('cloth.delete');


Route::get('/add/cloth/rype',[ClothController::class,'addClothType'])->name('add.cloth.type');
Route::get('/cloth/type/list',[ClothController::class,'clothTypelist'])->name('cloth.type.list');
Route::post('/cloth/type/create',[ClothController::class,'clothTypeCreate'])->name('cloth.type.list.create');
Route::get('/delete/cloth/type/{clothtype_id}',[ClothController::class,'deleteClothType'])->name('cloth.type.delete');


