<?php

/**
 * Controllers
 */
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'index']);

Route::prefix('admin')->group(function () {


    Route::prefix('auth')->group(function () {
        Route::get('/login', [AuthController::class,'index'])->name('login_index');
        Route::get('/register', [RegisterController::class,'register'])->name('register_index');
        Route::post('/login', [AuthController::class,'customDispatcher'])->name('login_form');
        Route::get('/logout', [AuthController::class,'logout'])->name('admin_logout');

        // Route::post('/signup', [UserController::class,'signup']);

        // Route::middleware(['auth:api'])->group(function() {
        //     Route::get('/user', [UserController::class,'user']);
        // });
    });
});
