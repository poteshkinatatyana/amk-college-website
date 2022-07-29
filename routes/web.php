<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryKZController;
use App\Http\Controllers\Admin\PostKzController;
use App\Http\Controllers\Admin\CategoryEnController;
use App\Http\Controllers\Admin\PostEnController;

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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/kz', [App\Http\Controllers\IndexController::class, 'kz'])->name('kz');
Route::get('/en', [App\Http\Controllers\IndexController::class, 'en'])->name('en');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('page', App\Http\Controllers\PageController::class);
Route::resource('pagekz', App\Http\Controllers\PageKzController::class);
Route::resource('pageen', App\Http\Controllers\PageEnController::class);


Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin'); // /admin

    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);

    Route::resource('categorykz', CategoryKzController::class);
    Route::resource('postkz', PostKzController::class);

    Route::resource('categoryen', CategoryEnController::class);
    Route::resource('posten', PostEnController::class);
});
