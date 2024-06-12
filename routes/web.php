<?php

// use App\Http\Controllers\Admin\AdminAppController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FilmController;
use App\Http\Controllers\Admin\NewController;
use App\Http\Controllers\Admin\OptionController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ShowtimeController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\Web\AppController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\UserController;
use App\Http\Middleware\CheckLoginAdmin;
use App\Http\Middleware\ValidLoginAdmin;
use App\Http\Middleware\WebCheckLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// router web
Route::get('/', [HomeController::class, 'home_index']);
Route::post('/', [HomeController::class, 'home_index']);
Route::get('/login', [UserController::class, 'login'])->middleware(WebCheckLogin::class);

Route::post('/uploads', [UploadController::class, 'fileUpload']);
Route::get('/uploads', [UploadController::class, 'fileUpload']);

// ajax
Route::get('/ajax/{action}', [HomeController::class, 'ajax']);
Route::post('/ajax/{action}', [HomeController::class, 'ajax']);

// order
Route::get('/order/add/{id}', [HomeController::class, 'order_add']);

Route::get('/{slug}', [HomeController::class, 'handle_slug']);

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
            Route::post('/banner_delete/{id}',[BannerController::class, 'banner_delete']);
        });

        // branch    
        Route::prefix('branch')->group(function () {
            Route::get('/branch_list',[BranchController::class, 'branch_list']);
            Route::get('/branch_add',[BranchController::class, 'branch_add']);
            Route::post('/branch_add',[BranchController::class, 'branch_add']);
            Route::get('/branch_edit/{id}',[BranchController::class, 'branch_edit']);
            Route::post('/branch_edit/{id}',[BranchController::class, 'branch_edit']);
            Route::post('/branch_delete/{id}',[BranchController::class, 'branch_delete']);
        });

        // room    
        Route::prefix('room')->group(function () {
            Route::get('/room_list',[RoomController::class, 'room_list']);
            Route::get('/room_add',[RoomController::class, 'room_add']);
            Route::post('/room_add',[RoomController::class, 'room_add']);
            Route::get('/room_edit/{id}',[RoomController::class, 'room_edit']);
            Route::post('/room_edit/{id}',[RoomController::class, 'room_edit']);
            Route::post('/room_delete/{id}',[RoomController::class, 'room_delete']);
        });

        // coupon    
        Route::prefix('coupon')->group(function () {
            Route::get('/coupon_list',[CouponController::class, 'coupon_list']);
            Route::get('/coupon_add',[CouponController::class, 'coupon_add']);
            Route::post('/coupon_add',[CouponController::class, 'coupon_add']);
            Route::get('/coupon_edit/{id}',[CouponController::class, 'coupon_edit']);
            Route::post('/coupon_edit/{id}',[CouponController::class, 'coupon_edit']);
            Route::post('/coupon_delete/{id}',[CouponController::class, 'coupon_delete']);
        });

        // contact    
        Route::prefix('contact')->group(function () {
            Route::get('/contact_list',[ContactController::class, 'contact_list']);
            Route::get('/contact_add',[ContactController::class, 'contact_add']);
            Route::post('/contact_add',[ContactController::class, 'contact_add']);
            Route::get('/contact_edit/{id}',[ContactController::class, 'contact_edit']);
            Route::post('/contact_edit/{id}',[ContactController::class, 'contact_edit']);
            Route::post('/contact_delete/{id}',[ContactController::class, 'contact_delete']);
            Route::post('/contact_update/{id}/{key}/{val}',[ContactController::class, 'upadte_field']);
        });
        // user    
        Route::prefix('user')->group(function () {
            Route::get('/user_list',[AdminUserController::class, 'user_list']);
            Route::get('/user_add',[AdminUserController::class, 'user_add']);
            Route::post('/user_add',[AdminUserController::class, 'user_add']);
            Route::get('/user_edit/{id}',[AdminUserController::class, 'user_edit']);
            Route::post('/user_edit/{id}',[AdminUserController::class, 'user_edit']);
            Route::post('/user_delete/{id}',[AdminUserController::class, 'user_delete']);
            Route::post('/user_update/{id}/{key}/{val}',[AdminUserController::class, 'upadte_field']);
        });
        // option    
        Route::prefix('option')->group(function () {
            Route::get('/option_list',[OptionController::class, 'option_list']);
            Route::get('/option_add',[OptionController::class, 'option_add']);
            Route::post('/option_add',[OptionController::class, 'option_add']);
            Route::get('/option_edit/{id}',[OptionController::class, 'option_edit']);
            Route::post('/option_edit/{id}',[OptionController::class, 'option_edit']);
            Route::post('/option_delete/{id}',[OptionController::class, 'option_delete']);
            Route::post('/option_update/{id}/{key}/{val}',[OptionController::class, 'upadte_field']);
        });
        // comment    
        Route::prefix('comment')->group(function () {
            Route::get('/comment_list',[CommentController::class, 'comment_list']);
            Route::get('/comment_add',[CommentController::class, 'comment_add']);
            Route::post('/comment_add',[CommentController::class, 'comment_add']);
            Route::get('/comment_edit/{id}',[CommentController::class, 'comment_edit']);
            Route::post('/comment_edit/{id}',[CommentController::class, 'comment_edit']);
            Route::post('/comment_delete/{id}',[CommentController::class, 'comment_delete']);
            Route::post('/comment_update/{id}/{key}/{val}',[CommentController::class, 'upadte_field']);
        });
        // category    
        Route::prefix('category')->group(function () {
            Route::get('/category_list',[CategoryController::class, 'category_list']);
            Route::get('/category_add',[CategoryController::class, 'category_add']);
            Route::post('/category_add',[CategoryController::class, 'category_add']);
            Route::get('/category_edit/{id}',[CategoryController::class, 'category_edit']);
            Route::post('/category_edit/{id}',[CategoryController::class, 'category_edit']);
            Route::post('/category_delete/{id}',[CategoryController::class, 'category_delete']);
            Route::post('/category_update/{id}/{key}/{val}',[CategoryController::class, 'upadte_field']);
        });
        // new    
        Route::prefix('new')->group(function () {
            Route::get('/new_list',[NewController::class, 'new_list']);
            Route::get('/new_add',[NewController::class, 'new_add']);
            Route::post('/new_add',[NewController::class, 'new_add']);
            Route::get('/new_edit/{id}',[NewController::class, 'new_edit']);
            Route::post('/new_edit/{id}',[NewController::class, 'new_edit']);
            Route::post('/new_delete/{id}',[NewController::class, 'new_delete']);
            Route::post('/new_update/{id}/{key}/{val}',[NewController::class, 'upadte_field']);
        });
        // film    
        Route::prefix('film')->group(function () {
            Route::get('/film_list',[FilmController::class, 'film_list']);
            Route::get('/film_add',[FilmController::class, 'film_add']);
            Route::post('/film_add',[FilmController::class, 'film_add']);
            Route::get('/film_edit/{id}',[FilmController::class, 'film_edit']);
            Route::post('/film_edit/{id}',[FilmController::class, 'film_edit']);
            Route::post('/film_delete/{id}',[FilmController::class, 'film_delete']);
            Route::post('/film_update/{id}/{key}/{val}',[FilmController::class, 'upadte_field']);
        });

        // showtime    
        Route::prefix('showtime')->group(function () {
            Route::get('/showtime_list',[ShowtimeController::class, 'showtime_list']);
            Route::get('/showtime_add',[ShowtimeController::class, 'showtime_add']);
            Route::post('/showtime_add',[ShowtimeController::class, 'showtime_add']);
            Route::get('/showtime_edit/{id}',[ShowtimeController::class, 'showtime_edit']);
            Route::post('/showtime_edit/{id}',[ShowtimeController::class, 'showtime_edit']);
            Route::post('/showtime_delete/{id}',[ShowtimeController::class, 'showtime_delete']);
            Route::post('/showtime_update/{id}/{key}/{val}',[ShowtimeController::class, 'upadte_field']);
            Route::post('/get_room/{branch_id}',[ShowtimeController::class, 'get_room']);
        });

        // order    
        Route::prefix('order')->group(function () {
            Route::get('/order_list',[OrderController::class, 'order_list']);
            Route::get('/order_add',[OrderController::class, 'order_add']);
            Route::post('/order_add',[OrderController::class, 'order_add']);
            Route::get('/order_edit/{id}',[OrderController::class, 'order_edit']);
            Route::post('/order_edit/{id}',[OrderController::class, 'order_edit']);
            Route::post('/order_delete/{id}',[OrderController::class, 'order_delete']);
            Route::post('/order_update/{id}/{key}/{val}',[OrderController::class, 'upadte_field']);
        });

        // setting    
        Route::prefix('setting')->group(function () {
            Route::get('/setting_edit',[SettingController::class, 'setting_edit']);
            Route::post('/setting_edit',[SettingController::class, 'setting_edit']);
            
        });
    });

});