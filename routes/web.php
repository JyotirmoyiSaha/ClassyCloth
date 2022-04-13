<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Route as RoutingRoute;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ClothController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\SellerController;
use App\Http\Controllers\admin\CategoriesController;
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


Route::group(['prefix'=>'admin'],function(){

    Route::get('/login',[LoginController::class,'login'])->name('admin.login');
    Route::post('/do-login',[LoginController::class,'doLogin'])->name('admin.doLogin');
    Route::get('auth/facebook', [LoginController::class, 'facebookRedirect'])->name('login.facebook');
    Route::get('auth/facebook/callback', [LoginController::class, 'loginWithFacebook']);
    
    Route::group(['middleware'=>'auth'],function(){

        Route::view('/dashboard', 'admin.master')->name('admin');
        
        //Role
     
        Route::get('role/list', [RoleController::class,'index'])->name('role.list');
        Route::get('role/create', [RoleController::class,'create'])->name('role.create');
        Route::post('role/store', [RoleController::class,'store'])->name('role.store');
        Route::get('edit/role/{role_id}', [RoleController::class,'edit'])->name('edit.role');
        Route::post('update/role/{role_id}', [RoleController::class,'update'])->name('update.role');        

        // categories
        Route::get('/category_list',[CategoriesController::class, 'list'])->name('category.list');
        Route::get('/category_create',[CategoriesController::class, 'create'])->name('category.create');
        Route::post('/category_store',[CategoriesController::class, 'store'])->name('category.store');
        Route::get('/category_edit/{category_id}',[CategoriesController::class, 'edit'])->name('category.edit');
        Route::post('/category_update/{category_id}',[CategoriesController::class, 'update'])->name('category.update');
        Route::get('/category_delete/{category_id}',[CategoriesController::class,'delete'])->name('category.delete');


        
        //for user
        Route::get('/user_list',[UserController::class,'userlist'])->name('user.list');
        Route::get('/add_user',[UserController::class,'adduser'])->name('add.user');
        Route::post('/user_store',[UserController::class,'storeuser'])->name('user.store');


        //for cloth
        Route::get('/add/cloth',[ClothController::class,'addCloth'])->name('add.cloth');
        Route::get('/cloth/list',[ClothController::class,'clothlist'])->name('cloth.list');
        Route::post('/cloth/create',[ClothController::class,'clothCreate'])->name('cloth.list.create');

        //cloth route end

        //for seller
        Route::get('/seller/list',[SellerController::class,'sellerlist'])->name('seller.list');
        Route::get('/seller/create',[SellerController::class,'sellercreate'])->name('seller.create');
        Route::post('/seller_store',[SellerController::class,'sellerstore'])->name('seller.store');
        // Route::get("softdelete", function(){
        //     SellerController::find(2)->delete();
        //  });

        Route::get('/cloth/view/{cloth_id}',[ClothController::class,'viewCloth'])->name('cloth.view');
        Route::get('/edit/cloth/{cloth_id}',[ClothController::class,'editCloth'])->name('cloth.edit');
        Route::put('/update/cloth/{cloth_id}',[ClothController::class,'updateCloth'])->name('cloth.update');
        Route::get('/delete/cloth/{cloth_id}',[ClothController::class,'deleteCloth'])->name('cloth.delete');


        //for order
        Route::get('/order',[OrderController::class,'vieworder'])->name('order.list');

    });
});

