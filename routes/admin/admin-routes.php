<?php
/**
 * Controllers
 */
use Illuminate\Support\Facades\Route;


// Controllers

use App\Http\Controllers\Admin\ClientAdminController;
use App\Http\Controllers\Admin\ProduitController;
use App\Http\Controllers\Admin\StripeController;

/**
 * Routes
 */


Route::get('stripe', [StripeController::class, 'stripe']);
Route::post('stripe', [StripeController::class, 'stripePost'])->name('stripe.post');


Route::prefix('dashbord')->group(function () {



     // ===================   Client ==========================

     Route::prefix('/client')->group(function () {
        Route::get('/', [ClientAdminController::class,'index'])->name('client_index');
        Route::get('/show/{id}',[ClientAdminController::class,'show'])->name('client_show');
        Route::get('/edite/{id}',[ClientAdminController::class,'edit'])->name('client_edite');
        Route::get('/create',[ClientAdminController::class,'create'])->name('client_create');
        Route::post('/store',[ClientAdminController::class,'store'])->name('client_store');
        Route::post('/update',[ClientAdminController::class,'update'])->name('client_update');
        Route::get('/delete/{id}',[ClientAdminController::class,'destroy'])->name('client_delete');
    });

    // ===================   Produits  ==========================

    Route::prefix('/produit')->group(function () {
        Route::get('/lazyload',[ProduitController::class,'lazyload'])->name('employee_lazy');
        Route::get('/', [ProduitController::class,'index'])->name('produit_index');
        Route::get('/show/{id}',[ProduitController::class,'show'])->name('produit_show');
        Route::get('/edite/{id}',[ProduitController::class,'edit'])->name('produit_edite');
        Route::get('/create',[ProduitController::class,'create'])->name('produit_create');
        Route::post('/store',[ProduitController::class,'store'])->name('produit_store');
        Route::post('/update',[ProduitController::class,'update'])->name('produit_update');
        Route::get('/delete/{id}',[ProduitController::class,'destroy'])->name('produit_delete');
    });

});

