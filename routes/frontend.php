<?php


use App\Http\Controllers\Web\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|-------------------------------------------------------------------------- */

Route::get('/',[IndexController::class,'index'])->name('web.index');


Route::get('/product/{product_slug}',[IndexController::class,'productDetails'])->name('web.productdetails');


?>