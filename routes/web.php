<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

Route::get('/',[HomeController::class,'index'])->name('/');
Route::get('/category-page',[HomeController::class,'categoryPage'])->name('category-page');
Route::get('/product-details/{id}',[HomeController::class,'productDetails'])->name('product-details');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//    Product Routes
    Route::get('/add-product', [ProductController::class, 'addProduct'])->name('add-product');
    Route::get('/manage-product', [ProductController::class, 'manageProduct'])->name('manage-product');
    Route::get('/edit-product/{id}', [ProductController::class, 'editProduct'])->name('edit-product');
    Route::get('/delete-product/{id}', [ProductController::class, 'deleteProduct'])->name('delete-product');
    Route::post('/new-product', [ProductController::class, 'newProduct'])->name('new-product');
    Route::post('/update-product/{id}', [ProductController::class, 'updateProduct'])->name('update-product');

    //    User Routes
    Route::get('/add-user', [UserController::class, 'addUser'])->name('add-user');
    Route::get('/manage-user', [UserController::class, 'manageUser'])->name('manage-user');
    Route::get('/edit-user/{id}', [UserController::class, 'editUser'])->name('edit-user');
    Route::get('/delete-user/{id}', [UserController::class, 'deleteUser'])->name('delete-user');
    Route::post('/new-user', [UserController::class, 'newUser'])->name('new-user');
    Route::post('/update-user/{id}', [UserController::class, 'updateUser'])->name('update-user');
});
