<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('categorys', CategoryController::class);
Route::resource('brands', BrandController::class);
Route::resource('products', ProductController::class);
Auth::routes();
Route::get("about-us", function () {
    return view("about");
})->name("aboutus");
Route::get("contact-us", [SettingController::class, 'contactus'])->name("contactus");

Route::get("order-list", function () {
    return view("order-list");
})->name("orderlist");

Route::fallback(function () {
    return redirect()->route('404');
});
Route::get("/not-found", function () {
    return view('error.404');
})->name('404');
Route::get("/coming-soon", function () {
    return view('error.coming-soon');
})->name('coming-soon');
