<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\FrontendController;
use App\Http\Controllers\Admin\Auth\AdminLoginController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[FrontendController::class, 'index'])->name('#home');
Route::get('/#about',[FrontendController::class, 'about'])->name('#about');


Route::prefix('admin')->group(function () {
    Route::get('/login',[AdminLoginController::class, 'index'])->name('admin.login');
});