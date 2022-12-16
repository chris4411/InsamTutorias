<?php
use App\Http\Controllers\Auth\UserController;
use Illuminate\Support\Facades\Route;

/**
 *      Maestros
 *  =================
 *   Authentification
 */
Route::prefix('auth')->group(function () {

    Route::post('/login', [UserController::class,'login']);
    Route::post('/signup', [UserController::class,'signup']);

    Route::middleware(['auth:api'])->group(function() {
        Route::get('/logout', [UserController::class,'logout']);
        Route::get('/user', [UserController::class,'user']);
    });
});
