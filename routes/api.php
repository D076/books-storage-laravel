<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'App\Http\Controllers\Api'], function () {
    Route::get('/check_user', function (Request $request) {
        $name = $request->user()->tokens;
        return $name;
    })->middleware(['auth:sanctum']);

    Route::group(['namespace' => 'Book'], function () {
        Route::get('/book', 'BookController@books');
        Route::get('/book/{book}', 'BookController@show');
        Route::patch('/book/{book}', 'BookController@update')->middleware(['auth:sanctum']);
        Route::delete('/book/{book}', 'BookController@delete')->middleware(['auth:sanctum']);
    });
    Route::group(['namespace' => 'User'], function () {
        Route::post('/login', 'LoginController');
        Route::get('/user', 'UserController@users');
        Route::get('/user/{user}', 'UserController@show');
        Route::patch('/user/{user}', 'UserController@update')->middleware(['auth:sanctum']);
    });
});
