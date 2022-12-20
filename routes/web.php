<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\Admin\SendEmailController;
use App\Http\Controllers\User\PostController;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'index']);


Route::get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');


Route::post('/search', 'PostController@search')->name('post.search');

require __DIR__.'/auth.php';
require __DIR__.'/admin/admin-routes.php';
require __DIR__.'/user/user-routes.php';
