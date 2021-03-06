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
Auth::routes();

Route::get('/', [App\Http\Controllers\FrontEndController::class, 'index'])->name('frontend.index');


    Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function() {

        Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::resource('/users',\App\Http\Controllers\UserController::class);

        Route::resource('/categories',\App\Http\Controllers\CategoriesController::class);
        Route::get('/categories/{id}/delete',[\App\Http\Controllers\CategoriesController::class,'destroy'])->name('categories.delete');

        Route::resource('/settings',\App\Http\Controllers\SettingsController::class);

        Route::resource('/products',\App\Http\Controllers\ProductsController::class);
        Route::get('/products/{id}/delete',[\App\Http\Controllers\ProductsController::class,'destroy'])->name('products.delete');

        Route::resource('/scripts',\App\Http\Controllers\ScriptsController::class);

        Route::post('/scripts/{id}/active', [\App\Http\Controllers\ScriptsController::class, 'updateToken'])->name('scripts.status');









    });






