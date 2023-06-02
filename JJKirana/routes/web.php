<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::resource('categorys',CategoryController::class);
Route::resource('brands',BrandController::class);
Route::resource('products',ProductController::class);
Auth::routes();
Route::fallback(function(){
    return redirect()->route('404');
});
Route::get("/not-found",function(){
    return view('error.404');
})->name('404');
Route::get("/coming-soon",function(){
    return view('error.coming-soon');
})->name('coming-soon');
