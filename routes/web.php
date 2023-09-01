<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShakilCon; 
use App\Http\Controllers\Backend\ProductController; 
use App\Http\Controllers\Backend\CategoryController; 
use App\Http\Controllers\Backend\SubCatController;

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

Route::get('/',[ShakilCon::class, 'index'])->name('home');

Route::get('/about',[ShakilCon::class, 'about'])->name('about');
Route::get('/service', [ShakilCon::class, 'service'])->name('service');

// product add,delete,edit route start--------- 

Route::get('/add/product', [ProductController::class, 'index'])->name('product.add');
Route::post('/save/product', [ProductController::class, 'save'])->name('product.save');

Route::get('/edit/product/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/update/product/{id}', [ProductController::class, 'update'])->name('product.update');

Route::get('/manage/product', [ProductController::class, 'manage'])->name('product.manage');
Route::get('/manage/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');

// product add,delete,edit route end -----------
// Category add,delete,edit route start -----------

Route::get('/category/add', [CategoryController::class, 'index'])->name('category.add');
Route::post('/category/save', [CategoryController::class, 'save'])->name('category.save');
Route::get('/category/manage', [CategoryController::class, 'manage'])->name('category.manage');
// edit delete update route 
Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');

// Category add,delete,edit route end------------ 

// sub category route start ---------------

Route::get('/subcategory/add',[SubCatController::class, 'index']);
Route::get('/subcategory/manage',[SubCatController::class, 'manage']);
Route::post('/subcategory/save',[SubCatController::class, 'save'])->name('subCategory.save');
Route::get('/subcategory/edit/{id}',[SubCatController::class, 'edit'])->name('subCategory.edit');
Route::get('/subcategory/delete/{id}',[SubCatController::class, 'delete'])->name('subCategory.delete');
Route::post('/subcategory/update/{id}',[SubCatController::class, 'update'])->name('subCategory.update');

// sub category route end ---------------