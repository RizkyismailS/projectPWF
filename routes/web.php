<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\OrderController;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

// Home Route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Authentication Routes
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'doLogin']);
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'doRegister']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/account', [AuthController::class, 'accountSettings'])->name('account.settings');
    Route::post('/account/update-password', [AuthController::class, 'updatePassword'])->name('account.updatePassword');
    Route::post('/account/update-profile', [AuthController::class, 'updateProfile'])->name('account.updateProfile');
    Route::post('/update-account', [AuthController::class, 'updateAccount'])->name('update.account');
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/supplierList', [AdminDashboardController::class, 'supplierList'])->name('supplier.list');
    Route::get('/admin/costumerList', [AdminDashboardController::class, 'customerList'])->name('customer.list');
});

// Route untuk menangani data registrasi supplier
Route::get('/register-supplier', function () {
    return view('auth.registerSupplier');
})->name('supplier');

Route::post('/registerSupplier', [AuthController::class, 'supplierRegister'])->name('registerSupplier');
// User Settings Route
Route::get('/userSetting', function () {
    $order = \App\Models\Order::where('user_id', \Illuminate\Support\Facades\Auth::id())->latest()->first();
    $orderId = $order ? $order->id : null;
    return view('landingPage.userSetting', compact('orderId'));
})->middleware('auth')->name('userSetting');

// Account Settings Route
Route::get('/setting/account', function() {
    return view('landingPage.setting.account');
})->name('setting.account.partial');

// Product Routes
Route::get('/supplier/showProduct/partial', [ProductController::class, 'showProductPartial'])->name('supplier.showProduct.partial');
Route::get('/supplier/daftar-pesanan/partial', [ProductController::class, 'daftarPesananPartial'])->name('supplier.daftarPesanan.partial');
Route::get('/produk', [ProductController::class, 'showProductPartial'])->name('produk'); // List products
Route::get('/createProduct', [ProductController::class, 'createProduct'])->name('produk.create'); // Show create form
Route::post('/createProduct', [ProductController::class, 'store'])->name('produk.store'); // Store product
Route::get('/produk/{id}', [ProductController::class, 'detail'])->name('produk.detail'); // Show product detail
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('produk.edit'); // Show edit form
Route::put('/edit/{id}', [ProductController::class, 'update'])->name('produk.update'); // Update product
Route::delete('/produk/{id}', [ProductController::class, 'destroy'])->name('produk.destroy'); // Delete product
Route::get('/produk/{id}', [ProductController::class, 'show'])->name('produk.detail'); // Show product detail for landing page
Route::post('/produk/{id}/toggle-status', [ProductController::class, 'toggleStatus'])->name('produk.toggleStatus');
Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::delete('/cart/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');
Route::get('/orders', [OrderController::class, 'index'])->name('order.index');
Route::post('/orders/{order}/validate', [OrderController::class, 'validateOrder']);
Route::post('/orders/{id}/cancel', [OrderController::class, 'cancel'])->name('orders.cancel');
Route::get('/landingPage/orderDetail/partial/{id}', [OrderController::class, 'showOrderPartial'])->name('landingPage.orderDetail.partial');

   




// Landing Page Product Route
Route::get('/product', [ProductController::class, 'ProductPage'])->name('product'); // Show products on landing page
