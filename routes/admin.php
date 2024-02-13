<?php

use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\Brand\BrandController;
use App\Http\Controllers\Admin\Category\CatrgoryController;
use App\Http\Controllers\Admin\Color\ColorController;
use App\Http\Controllers\Admin\Coupon\CouponController;
use App\Http\Controllers\Admin\Product\ProductAttributeController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\Product\ProductImageController;
use App\Http\Controllers\Admin\Size\SizeController;
use App\Http\Controllers\Admin\Slider\HomeSliderController;
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

        Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
            Route::get('list', [CatrgoryController::class, 'list'])->name('list');
            Route::get('form/{id?}', [CatrgoryController::class, 'form'])->name('form');
            Route::post('submit', [CatrgoryController::class, 'submit'])->name('submit');
            Route::get('status/{id}', [CatrgoryController::class, 'status'])->name('status');
            Route::get('show_home/{id}', [CatrgoryController::class, 'showHome'])->name('showHome');
            Route::get('delete', [CatrgoryController::class, 'delete'])->name('delete');
        });


        Route::group(['prefix' => 'coupon', 'as' => 'coupon.'], function () {
            Route::get('list', [CouponController::class, 'list'])->name('list');
            Route::get('form/{id?}', [CouponController::class, 'form'])->name('form');
            Route::post('submit', [CouponController::class, 'submit'])->name('submit');
            Route::get('status/{id}', [CouponController::class, 'status'])->name('status');
            Route::get('delete', [CouponController::class, 'delete'])->name('delete');
        });



        Route::group(['prefix' => 'size', 'as' => 'size.'], function () {
            Route::get('list', [SizeController::class, 'list'])->name('list');
            Route::get('form/{id?}', [SizeController::class, 'form'])->name('form');
            Route::post('submit', [SizeController::class, 'submit'])->name('submit');
            Route::get('status/{id}', [SizeController::class, 'status'])->name('status');
            Route::get('delete', [SizeController::class, 'delete'])->name('delete');
        });


        Route::group(['prefix' => 'brand', 'as' => 'brand.'], function () {
            Route::get('list', [BrandController::class, 'list'])->name('list');
            Route::get('form/{id?}', [BrandController::class, 'form'])->name('form');
            Route::post('submit', [BrandController::class, 'submit'])->name('submit');
            Route::get('status/{id}', [BrandController::class, 'status'])->name('status');
            Route::get('show_home/{id}', [BrandController::class, 'showHome'])->name('showHome');
            Route::get('delete', [BrandController::class, 'delete'])->name('delete');
        });


        Route::group(['prefix' => 'homeslider', 'as' => 'homeslider.'], function () {
            Route::get('list', [HomeSliderController::class, 'list'])->name('list');
            Route::get('form/{id?}', [HomeSliderController::class, 'form'])->name('form');
            Route::post('submit', [HomeSliderController::class, 'submit'])->name('submit');
            Route::get('delete', [HomeSliderController::class, 'delete'])->name('delete');
        });


        Route::group(['prefix' => 'color', 'as' => 'color.'], function () {
            Route::get('list', [ColorController::class, 'list'])->name('list');
            Route::get('form/{id?}', [ColorController::class, 'form'])->name('form');
            Route::post('submit', [ColorController::class, 'submit'])->name('submit');
            Route::get('status/{id}', [ColorController::class, 'status'])->name('status');
            Route::get('delete', [ColorController::class, 'delete'])->name('delete');
        });


        Route::group(['prefix' => 'product', 'as' => 'product.'], function () {

            Route::get('list', [ProductController::class, 'list'])->name('list');
            Route::get('form/{id?}', [ProductController::class, 'form'])->name('form');
            Route::post('submit', [ProductController::class, 'submit'])->name('submit');
            Route::get('status/{id}', [ProductController::class, 'status'])->name('status');
            Route::get('delete', [ProductController::class, 'delete'])->name('delete');
            Route::get('attr/delete', [ProductController::class, 'attDelete'])->name('attr-delete');

            Route::group(['prefix' => 'attribute', 'as' => 'attribute.'], function () {
                Route::get('list/{id}', [ProductAttributeController::class, 'list'])->name('list');
                Route::get('form/{id?}/{product_id}', [ProductAttributeController::class, 'form'])->name('form');
                Route::post('submit', [ProductAttributeController::class, 'submit'])->name('submit');
                Route::get('status/{id}', [ProductAttributeController::class, 'status'])->name('status');
                Route::get('delete', [ProductAttributeController::class, 'delete'])->name('delete');
            });


            Route::group(['prefix' => 'images', 'as' => 'images.'], function () {
                Route::get('form/{id}', [ProductImageController::class, 'product_images'])->name('form');
                Route::post('submit', [ProductImageController::class, 'addMultipleImage'])->name('submit');
                Route::get('status/{id}', [ProductImageController::class, 'status'])->name('status');
                Route::get('delete/{id}', [ProductImageController::class, 'delete_image'])->name('delete');
            });
        });
    });
});
