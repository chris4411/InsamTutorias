<?php

use App\Http\Controllers\API\ProduitController;
use App\Http\Controllers\API\CompteController;
use App\Http\Controllers\API\ClientController;

use Illuminate\Support\Facades\Route;

/**
 *    Maestros
 * =============
 *   Produits
 *
*/
Route::prefix('produit')->group(function () {
    Route::get('/',[ProduitController::class,'index']);
    Route::get('/{id}',[ProduitController::class,'show']);
    Route::post('/',[ProduitController::class,'store']);
    Route::post('/{id}',[ProduitController::class,'update']);
    Route::delete('/{id}',[ProduitController::class,'destroy']);
});

/**
 *    Maestros
 * =============
 *   Clients
 *
*/
Route::prefix('client')->group(function () {
    Route::get('/',[ClientController::class,'index']);
    Route::get('/{id}',[ClientController::class,'show']);
    Route::post('/',[ClientController::class,'store']);
    Route::post('/{id}',[ClientController::class,'update']);
    Route::delete('/{id}',[ClientController::class,'destroy']);
});


/**
 *   Danick
 * ==========
 *   Compte
 */
Route::prefix('compte')->group(function () {
    Route::get('/',[CompteController::class,'index']);
    Route::get('/{id}',[CompteController::class,'show']);
    Route::post('/',[CompteController::class,'store']);
    Route::post('/{id}',[CompteController::class,'update']);
    Route::delete('/{id}',[CompteController::class,'destroy']);
    return response()->json(['valid'=> auth()->check()]);
});
