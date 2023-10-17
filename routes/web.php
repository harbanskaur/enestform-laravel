<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\icontroller;

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
Route::get('/',[icontroller::class,'index'])->name('index-page');
Route::get('/category',[icontroller::class,'category'])->name('category');
Route::get('/addproduct',[icontroller::class,'addproduct'])->name('addproduct');
Route::get('/login',[icontroller::class,'login'])->name('login');
Route::get('/contact',[icontroller::class,'contact'])->name('contact');

Route::get('/display-all',[icontroller::class,'display_all'])->name('display-all');
Route::get('productshow/{id}',[icontroller::class, 'showproducts'])->name('showproducts');
