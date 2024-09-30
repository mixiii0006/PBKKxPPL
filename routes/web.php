<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\DosenController;

Route::get('/dashboard', [LandingPageController::class, 'index']);
Route::get('/index', [DosenController::class, 'index'])->name('index');
Route::get('/create', [DosenController::class, 'create'])->name('create');
Route::post('/Dosen/store', [DosenController::class, 'store'])->name('store');

// Route::get('/', function () {
//     return view('welcome');
// });
