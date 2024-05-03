<?php

use App\Http\Controllers\Web\AppController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\UserController;
use Illuminate\Support\Facades\Route;

// router web
Route::get('/', [HomeController::class, 'home_index']);
Route::get('/login', [UserController::class, 'login']);
// Route::post('/login', [UserController::class, 'login']);
// Route::get('/ajax/ajax_login', [UserController::class, 'ajax_login']);
// ajax web
// Route::prefix('ajax')->group(function () {
//     Route::post('/ajax_login', [UserController::class, 'ajax_login']);
// });