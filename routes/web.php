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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('admin.main.index');
    });
    Route::group(['namespace' => 'Book', 'prefix' => 'books'], function () {
        Route::get('/', 'IndexController')->name('admin.book.index');
        Route::get('/create', 'CreateController')->name('admin.book.create');
        Route::post('/', 'StoreController')->name('admin.book.store');
        Route::get('/{book}', 'ShowController')->name('admin.book.show');
        Route::get('/{book}/edit', 'EditController')->name('admin.book.edit');
        Route::patch('/{book}', 'UpdateController')->name('admin.book.update');
        Route::delete('/{book}', 'DeleteController')->name('admin.book.delete');
    });
    Route::group(['namespace' => 'Genre', 'prefix' => 'genres'], function () {
//        Route::get('/', 'IndexController')->name('admin.genre.index');
//        Route::get('/create', 'CreateController')->name('admin.genre.create');
//        Route::post('/', 'StoreController')->name('admin.genre.store');
//        Route::get('/{genre}', 'ShowController')->name('admin.genre.show');
//        Route::get('/{genre}/edit', 'EditController')->name('admin.genre.edit');
//        Route::patch('/{genre}', 'UpdateController')->name('admin.genre.update');
//        Route::delete('/{genre}', 'DeleteController')->name('admin.genre.delete');
    });
    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
//        Route::get('/', 'IndexController')->name('admin.user.index');
//        Route::get('/create', 'CreateController')->name('admin.user.create');
//        Route::post('/', 'StoreController')->name('admin.user.store');
//        Route::get('/{user}', 'ShowController')->name('admin.user.show');
//        Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
//        Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
//        Route::delete('/{user}', 'DeleteController')->name('admin.user.delete');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
