<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

Route::get('/dashboard', [LandingPageController::class, 'index']);


// Route::get('/', function () {
//     return view('welcome');
// });
