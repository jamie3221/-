<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\CustomerLoginController;
use App\Http\Controllers\Auth\ServiceProviderLoginController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Customer Login Routes
Route::get('/customer/login', [CustomerLoginController::class, 'showLoginForm'])->name('customer.login');
Route::post('/customer/login', [CustomerLoginController::class, 'login'])->name('customer.login.submit');

// Service Provider Login Routes
Route::get('/serviceprovider/login', [ServiceProviderLoginController::class, 'showLoginForm'])->name('serviceprovider.login');
Route::post('/serviceprovider/login', [ServiceProviderLoginController::class, 'login'])->name('serviceprovider.login.submit');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/admin/login', [\App\Http\Controllers\Auth\AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [\App\Http\Controllers\Auth\AdminLoginController::class, 'login'])->name('admin.login.submit');
