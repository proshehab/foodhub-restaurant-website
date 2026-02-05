<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\FrontendController;
use App\Http\Controllers\Admin\Auth\AdminLoginController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Website\Auth\UserLoginController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendController::class, 'index'])->name('#home');
Route::get('/#about', [FrontendController::class, 'about'])->name('#about');
Route::get('/register', [UserLoginController::class, 'userRegister'])->name('user.register');
Route::post('/register', [UserLoginController::class, 'userRegisterStore'])->name('user.register.store');

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'index'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');
});

// Protected Routes
Route::middleware('auth:admin')->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/adminHome', [HomeController::class, 'index'])->name('admin.home');
    Route::get('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
});