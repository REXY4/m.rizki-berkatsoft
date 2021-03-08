<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\DashboardsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\WelcomsController;
use App\Http\Controllers\SalesController;

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
Route::get('/',[WelcomsController::class,'index'])->name('welcome');
Auth::routes();




Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home');


Route::get('admin/dashboard', [DashboardsController::class, 'index'])->name('admin.dashboard');


Route::get('/admin/product',[ProductsController::class,'index'])->name('admin.product');

Route::get('/post/create',[PostsController::class,'index'])->name('post.create');
Route::post('/post/store',[PostsController::class,'create'])->name('post.store');
Route::delete('/post/destroy/{id}',[PostsController::class,'destroy']);
Route::get('/post/edit/{id}',[PostsController::class,'edit']);

Route::post('post-update/{id}',[PostsController::class,'update'])->name('post-update');

Route::get('admin/sales',[SalesController::class,'index'])->name('admin.sales');


Route::get('/sale/sales/{id}',[SalesController::class,'sales'])->name('sale.sales');

Route::post('sale-store/{id}',[SalesController::class,'store'])->name('sale.store');
