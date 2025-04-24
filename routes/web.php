<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckAdminLogin;
use App\Http\Middleware\CheckLogin;
use App\Http\Middleware\CheckUserLogin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('register');
})->name('register');

Route::get('/login/{user_role?}', [LoginController::class,'index'])->name('login');

Route::post('/register', [RegisterController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);

Route::middleware(CheckUserLogin::class)->prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user');
    Route::get('/profile', [UserController::class, 'profile'])->name('user_profile');
    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::post('/add-to-cart', [ProductController::class, 'addtocart'])->name('add-to-cart');
    Route::get('/cart/view', [ProductController::class, 'viewCart'])->name('cartview');
});

Route::middleware(CheckAdminLogin::class)->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('/productupload', function () {
        return view('admin/productupload');
    })->name('productupload');
    Route::post('/productupload', [AdminController::class, 'productupload']);
    Route::get('/productlist', [AdminController::class, 'productlist'])->name('productlist');
    Route::get('/editproduct/{id}', [AdminController::class, 'editproduct'])->name('editproduct');
    Route::put('/editproduct', [AdminController::class, 'editproduct']);
    Route::get('/deleteproduct/{id}', [AdminController::class, 'deleteproduct'])->name('deleteproduct');;
});



Route::get('/logout', function () {
    session()->flush();
    return redirect('/login');
})->name('logout');

Route::fallback(function () {
    return "The page you are looking for is not available.";
});
