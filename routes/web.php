<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingPage/main');
});
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');