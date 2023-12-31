<?php

use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\Category\CatrgoryController;
use App\Http\Controllers\Admin\Color\ColorController;
use App\Http\Controllers\Admin\Coupon\CouponController;
use App\Http\Controllers\Admin\Size\SizeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|-------------------------------------------------------------------------- */


Route::get('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login');
Route::post('/admin/login-submit', [AdminLoginController::class, 'loginSubmit'])->name('admin.loginSubmit');

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/dashboard', [AdminLoginController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

        Route::group(['prefix'=>'category','as'=>'category.'],function(){
            Route::get('list',[CatrgoryController::class,'list'])->name('list');
            Route::get('form/{id?}',[CatrgoryController::class,'form'])->name('form');
            Route::post('submit',[CatrgoryController::class,'submit'])->name('submit');
            Route::get('status/{id}',[CatrgoryController::class,'status'])->name('status');
            Route::get('delete',[CatrgoryController::class,'delete'])->name('delete');
        });


        Route::group(['prefix'=>'coupon','as'=>'coupon.'],function(){
            Route::get('list',[CouponController::class,'list'])->name('list');
            Route::get('form/{id?}',[CouponController::class,'form'])->name('form');
            Route::post('submit',[CouponController::class,'submit'])->name('submit');
            Route::get('status/{id}',[CouponController::class,'status'])->name('status');
            Route::get('delete',[CouponController::class,'delete'])->name('delete');
        });



        Route::group(['prefix'=>'size','as'=>'size.'],function(){
            Route::get('list',[SizeController::class,'list'])->name('list');
            Route::get('form/{id?}',[SizeController::class,'form'])->name('form');
            Route::post('submit',[SizeController::class,'submit'])->name('submit');
            Route::get('status/{id}',[SizeController::class,'status'])->name('status');
            Route::get('delete',[SizeController::class,'delete'])->name('delete');
        });


        Route::group(['prefix'=>'color','as'=>'color.'],function(){
            Route::get('list',[ColorController::class,'list'])->name('list');
            Route::get('form/{id?}',[ColorController::class,'form'])->name('form');
            Route::post('submit',[ColorController::class,'submit'])->name('submit');
            Route::get('status/{id}',[ColorController::class,'status'])->name('status');
            Route::get('delete',[ColorController::class,'delete'])->name('delete');
        });

    });
});
