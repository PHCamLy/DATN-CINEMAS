<?php

// use App\Http\Controllers\Admin\AdminAppController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\Web\AppController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\UserController;
use App\Http\Middleware\CheckLoginAdmin;
use App\Http\Middleware\ValidLoginAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// router web
Route::get('/', [HomeController::class, 'home_index']);
Route::post('/', [HomeController::class, 'home_index']);
Route::post('/uploads', [UploadController::class, 'fileUpload']);
Route::get('/uploads', [UploadController::class, 'fileUpload']);

// admin
Route::prefix('admin')->group(function () {
    Route::get('/',[AdminController::class, 'login'])->middleware(ValidLoginAdmin::class);
    Route::get('/login',[AdminController::class, 'login'])->middleware(ValidLoginAdmin::class);
    Route::post('/login',[AdminController::class, 'login']);

    Route::middleware([CheckLoginAdmin::class])->group(function () {
        Route::get('/dashboard',[DashboardController::class, 'dashboard']);

        // media    
        Route::prefix('banner')->group(function () {
            Route::get('/banner_list',[BannerController::class, 'banner_list']);
            Route::get('/banner_add',[BannerController::class, 'banner_add']);
            Route::post('/banner_add',[BannerController::class, 'banner_add']);
            Route::get('/banner_edit/{id}',[BannerController::class, 'banner_edit']);
            Route::post('/banner_edit/{id}',[BannerController::class, 'banner_edit']);
            Route::post('/delete',[BannerController::class, 'banner_delete']);
        });

        
    });

});