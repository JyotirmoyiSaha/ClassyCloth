<?php

use App\Http\Controllers\admin\CategoriesController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

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




// admin
//  Route::group(['prefix'=>'admin','as'=>'admin.'], function(){

    Route::get('/', function () {
        return view('admin.master');
     });
    

// categories
Route::get('/category_list',[CategoriesController::class, 'list'])->name('category.list');
Route::get('/category_create',[CategoriesController::class, 'create'])->name('category.create');
Route::post('/category_store',[CategoriesController::class, 'store'])->name('category.store');
Route::get('/category_edit/{category_id}',[CategoriesController::class, 'edit'])->name('category.edit');
Route::post('/category_update/{category_id}',[CategoriesController::class, 'update'])->name('category.update');
Route::get('/category_delete/{category_id}',[CategoriesController::class,'delete'])->name('category.delete');


 
// });