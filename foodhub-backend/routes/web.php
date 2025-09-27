<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\FrontendController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[FrontendController::class, 'index'])->name('home');
Route::get('/about',[FrontendController::class, 'about'])->name('about');