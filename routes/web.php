<?php

use App\Http\Controllers\SimpleCrudController;
use Illuminate\Support\Facades\Route;

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

//__All the Routes for a simple CRUD(Create, Read, Update, Delete) operation__//

//Product list page 
Route::get('/',[SimpleCrudController::class,'index'])->name('crud.index');

//Create new product
Route::get('/product/create',[SimpleCrudController::class,'create'])->name('product.create');

//Insert product into DataBase
Route::post('/product/store',[SimpleCrudController::class,'store'])->name('product.store');

//Edit Product Information 
Route::get('/product/edit/{id}',[SimpleCrudController::class,'edit'])->name('product.edit');

//Update Product Information
Route::put('/product/update/{id}',[SimpleCrudController::class,'update'])->name('product.update');

//Delete product Information
Route::get('/product/destroy/{id}',[SimpleCrudController::class,'destroy'])->name('product.destroy');
