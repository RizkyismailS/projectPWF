<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('landingPage.main');
})->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'doLogin']);

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'doRegister']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/registerSupplier', function () {
    return view('auth.registerSupplier');
})->name('registerSupplier');

route::get('/userSetting', function () {
    return view('landingPage.userSetting');
})->name('userSetting');

Route::get('/setting/account/', function() {
    return view('landingPage.setting.account');
})->name('setting.account.partial');

Route::get('/supplier/showProduct/partial', [ProductController::class, 'showProductPartial'])->name('supplier.showProduct.partial');


Route::get('/product', function () {
    return view('landingPage.product');
})->name('product');

Route::get('/produk', [ProductController::class, 'showProductPartial'])->name('showProduct');
Route::get('/createProduct', [ProductController::class, 'createProduct'])->name('createProduct');
Route::post('/createProduct', [ProductController::class, 'store'])->name('produk.store');
Route::get('/detail', [ProductController::class, 'detail'])->name('produk.detail');
Route::put('/edit/{id}', [ProductController::class, 'update'])->name('produk.update');
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('produk.edit');
Route::get('/product', [ProductController::class, 'ProductPage'])->name('product');

