<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\icontroller;
use App\Http\Controllers\authcontroller;

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
Route::get('category/{id}',[icontroller::class,'category'])->name('category');
Route::get('addproduct/{id}',[icontroller::class,'addproduct'])->name('addproduct');
Route::get('/login',[icontroller::class,'login'])->name('login');
Route::get('/contact',[icontroller::class,'contact'])->name('contact');
Route::post('/contact1',[icontroller::class,'contact1'])->name('contact1');


Route::get('/display-all',[icontroller::class,'display_all'])->name('display-all');
Route::post('/signup',[authcontroller::class,'signup'])->name('signup');
Route::post('/login-data',[authcontroller::class,'login_post'])->name('login.data');
Route::get('/logout',[authcontroller::class,'logout'])->name('logout');
Route::post('/cart',[icontroller::class,'cart'])->name('cart');

