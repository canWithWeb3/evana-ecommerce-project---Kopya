<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix("/")->controller(PageController::class)->group(function(){
    Route::get("/", "home");
    Route::get("/shop", "shop");
    Route::get("/product-detail/{product}", "productDetail");
    Route::get("/cart", "cart");
    Route::get("/checkout", "checkout");
    Route::get("/login", "login");
});
