<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});





Route::get('/admin',function(){

return view('admin.body');
});


Route::get('/admin/body',function(){

return view('admin.body');
});

Route::prefix('admin')->group( function() {

  Route::get('/category/view',[CategoryController::class,'CategoryView'])->name('category-view');

  Route::get('/category/create',[CategoryController::class,'CategoryCreate'])->name('category-create');

Route::post('/category/store',[CategoryController::class,'CategoryStore'])->name('category-store');

Route::get('/category/delete/{id}',[CategoryController::class,'CategoryDelete'])->name('delete.category');

Route::get('/category/edit/{id}',[CategoryController::class,'CategoryEdit'])->name('edit.category');

Route::post('/category/update',[CategoryController::class,'CategoryUpdate'])->name('category-update');

  Route::get('/product/view',[ProductController::class,'ProductView'])->name('product-view');
  Route::get('/product/create',[ProductController::class,'ProductCreate'])->name('product-create');

Route::post('/product/store',[ProductController::class,'ProductStore'])->name('product-store');

Route::get('/product/edit/{id}',[ProductController::class,'ProductEdit'])
->name('edit.product');


Route::post('/product/update',[ProductController::class,'ProducUpdate'])->name('product-update');

Route::get('/product/delete/{id}',[ProductController::class,'ProducDelete'])->name('delete.product');


Route::get('/user',[UserController::class,'UserView'])->name('user-view');

Route::get('/user/create',[UserController::class,'UserCreate'])->name('user-create');


Route::post('user/store',[UserController::class,'UserStore'])->name('user.store');


Route::get('/user/edit/{id}',[UserController::class,'UserEdit'])
->name('edit.user');


Route::post('/user/update',[UserController::class,'UserUpdate'])->name('user.update');


Route::get('/user/delete/{id}',[UserController::class,'UserDelete'])->name('delete.user');


Route::get('/sales',[SalesController::class,'SalesView'])->name('sales-view');


Route::get('/sales/create',[SalesController::class,'SalesCreate'])->name('sales-create');



Route::post('sales/store',[SalesController::class,'SalesStore'])->name('sales-store');


Route::get('/sales/edit/{id}',[SalesController::class,'SalesEdit'])
->name('edit.sales');


Route::post('/sales/update',[SalesController::class,'SalesUpdate'])->name('sales-update');

Route::get('/sales/delete/{id}',[SalesController::class,'SalesDelete'])->name('delete.sales');


});

