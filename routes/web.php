<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function (){
    Route::get('register', 'register')->name('register');
    Route::post('register','registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login','loginAction')->name('login.action');
    
    // logout
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function() {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

        Route::controller(ProductController::class)->prefix('products')->group(function () {
        Route::get('', 'index')->name('products');
        Route::get('create', 'create')->name('products.create');
        Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('products.show');
        Route::get('edit/{id}', 'edit')->name('products.edit');
        Route::put('edit/{id}', 'update')->name('products.update');
        Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });

    Route::controller(AuthController::class)->prefix('users')->group(function () {
        Route::get('', 'index')->name('users');
        Route::get('create', 'create')->name('users.create');
        Route::post('store', 'store')->name('users.store');
        Route::get('show/{id}', 'show')->name('users.show');
        Route::get('edit/{id}', 'edit')->name('users.edit');
        Route::put('edit/{id}', 'update')->name('users.update');
        Route::delete('destroy/{id}', 'destroy')->name('users.destroy');
    });
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
    Route::get('/profile.update', [App\Http\Controllers\AuthController::class, 'profileUpdate'])->name('profile.update');
});
