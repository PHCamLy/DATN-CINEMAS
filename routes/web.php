<?php

use App\Http\Controllers\Web\AppController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [AppController::class, 'home_index']);