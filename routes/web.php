<?php

use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\CustomerLoginController;
use App\Http\Controllers\Auth\CustomerRegisterController;
use App\Http\Controllers\Auth\ProviderLoginController;
use App\Http\Controllers\Auth\ProviderRegisterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Welcome Page
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Customer Routes
Route::get('/customer/login', [CustomerLoginController::class, 'showLoginForm'])->name('customer.login');
Route::post('/customer/login', [CustomerLoginController::class, 'login'])->name('customer.login.submit');
Route::get('/customer/register', [CustomerRegisterController::class, 'showRegistrationForm'])->name('customer.register');
Route::post('/customer/register', [CustomerRegisterController::class, 'register'])->name('customer.register.submit');

// Service Provider Routes
Route::get('/provider/login', [ProviderLoginController::class, 'showLoginForm'])->name('serviceprovider.login');
Route::post('/provider/login', [ProviderLoginController::class, 'login'])->name('serviceprovider.login.submit');
Route::get('/provider/register', [ProviderRegisterController::class, 'showRegistrationForm'])->name('serviceprovider.register');
Route::post('/provider/register', [ProviderRegisterController::class, 'register'])->name('serviceprovider.register.submit');

// Admin Routes
Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');

// Dashboard Routes (adjust as needed)
Route::get('/customer/dashboard', [DashboardController::class, 'customerDashboard'])->name('customer.dashboard');
Route::get('/provider/dashboard', [DashboardController::class, 'providerDashboard'])->name('provider.dashboard');

// Logout Route (adjust as needed)
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

// Additional routes can be added as per your application's requirements

