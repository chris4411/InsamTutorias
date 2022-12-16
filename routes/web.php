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






Route::get('/', [PostController::class, 'index' ])->name('index');
Route::get('/courses', [PostController::class, 'courses' ])->name('courses');
Route::get('/about', [PostController::class, 'about' ])->name('about');
Route::get('/contact', [PostController::class, 'contact' ])->name('contact');

Route::post('send-email', [SendEmailController::class, 'index'])->name('send.email');

Route::get('/front', function () {
    return view('site.index');

});

Route::get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/admin/admin-routes.php';
require __DIR__.'/user/user-routes.php';