<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\FrontendController;
use App\Http\Controllers\Admin\Auth\AdminLoginController;
use App\Http\Controllers\Admin\AdminDashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[FrontendController::class, 'index'])->name('#home');
Route::get('/#about',[FrontendController::class, 'about'])->name('#about');


Route::prefix('admin')->group(function () {
    Route::get('/login',[AdminLoginController::class, 'index'])->name('admin.login');
    Route::post('/login',[AdminLoginController::class, 'login'])->name('admin.login.submit');

});

// Protected Routes
Route::middleware('auth:admin')->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
});


