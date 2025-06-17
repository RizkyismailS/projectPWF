<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

// Home Route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Authentication Routes
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'doLogin']);
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'doRegister']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Route untuk menangani data registrasi supplier
Route::get('/register-supplier', function () {
    return view('auth.registerSupplier');
})->name('supplier');

Route::post('/registerSupplier', [AuthController::class, 'SupplierRegister'])->name('registerSupplier');
// User Settings Route
Route::get('/userSetting', function () {
    return view('landingPage.userSetting');
})->name('userSetting');

// Account Settings Route
Route::get('/setting/account', function() {
    return view('landingPage.setting.account');
})->name('setting.account.partial');

// Product Routes
Route::get('/supplier/showProduct/partial', [ProductController::class, 'showProductPartial'])->name('supplier.showProduct.partial');
Route::get('/produk', [ProductController::class, 'showProductPartial'])->name('produk'); // List products
Route::get('/createProduct', [ProductController::class, 'createProduct'])->name('produk.create'); // Show create form
Route::post('/createProduct', [ProductController::class, 'store'])->name('produk.store'); // Store product
Route::get('/produk/{id}', [ProductController::class, 'detail'])->name('produk.detail'); // Show product detail
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('produk.edit'); // Show edit form
Route::put('/edit/{id}', [ProductController::class, 'update'])->name('produk.update'); // Update product
Route::delete('/produk/{id}', [ProductController::class, 'destroy'])->name('produk.destroy'); // Delete product
Route::get('/produk/{id}', [ProductController::class, 'show'])->name('produk.detail'); // Show product detail for landing page

// client product routes
Route::get('/cart', [ProductController::class, 'cart'])->name('cart'); // Show cart
// Landing Page Product Route
Route::get('/product', [ProductController::class, 'ProductPage'])->name('product'); // Show products on landing page
