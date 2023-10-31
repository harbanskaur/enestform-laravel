<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Icontroller;
use App\Http\Controllers\Authcontroller;

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
Route::get('/',[Icontroller::class,'index'])->name('index-page');
Route::get('category/{id}',[Icontroller::class,'category'])->name('category');
Route::get('addproduct/{id}',[Icontroller::class,'addproduct'])->name('addproduct');
Route::get('/login',[Icontroller::class,'login'])->name('login');
Route::get('/contact',[Icontroller::class,'contact'])->name('contact');
Route::post('/contact1',[Icontroller::class,'contact1'])->name('contact1');


Route::get('/display-all',[Icontroller::class,'display_all'])->name('display-all');
Route::post('/signup',[Authcontroller::class,'signup'])->name('signup');
Route::post('/login-data',[Authcontroller::class,'login_post'])->name('login.data');
Route::get('/logout',[Authcontroller::class,'logout'])->name('logout');
Route::post('/cart',[Icontroller::class,'cart'])->name('cart');