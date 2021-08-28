<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});
 //Route::get('index', [UserController::class, 'show']);
 Route::get('products/create',[ProductController::class,'viewcreate']);

 Route::get('products/edit/{id}',[ProductController::class,'viewedit']);

Route::get('products/index',[ProductController::class,'viewindex']);
Route::get('products/show/{id}',[ProductController::class,'viewshow']);
Route::post('products/productdeleted', [ProductController::class,'deleteproduct']);
 Route::post('products/productcreated', [ProductController::class,'savenewproduct']);
 Route::post('products/show/{id}', [ProductController::class,'savenewproduct']);

 
// Route::resource('/','ProductController');



