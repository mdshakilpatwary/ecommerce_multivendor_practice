<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Admin\AdminController;
use App\Http\Controllers\Backend\Vendor\VendorController;
use App\Http\Controllers\Backend\User\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Controller start 
Route::middleware('auth','role:Admin')->group(function () {
    Route::controller(AdminController::class)->group(function(){
        Route::get('/admin/dashboard', 'index')->name('admin.dashboard');
        Route::get('/admin/logout', 'adminlogout')->name('admin.logout');
        Route::get('/admin/profile', 'adminProfile')->name('admin.profile');
        Route::post('/admin/profile/update/{id}', 'adminProfileUpdate')->name('admin.profile.update');
    });
});

//Admin Controller End

// Vendor Controller start 
Route::middleware('auth','role:Vendor')->group(function () {
    Route::controller(VendorController::class)->group(function(){
        Route::get('/vendor/dashboard', 'index')->name('vendor.dashboard');
        Route::get('/vendor/logout', 'vendorlogout')->name('vendor.logout');

    });
});

//Vendor Controller End

// User Controller start 
Route::middleware('auth','role:User')->group(function () {
    Route::controller(UserController::class)->group(function(){
        Route::get('/user/dashboard', 'index')->name('User.dashboard');
    });
});

//User Controller End






require __DIR__.'/auth.php';
