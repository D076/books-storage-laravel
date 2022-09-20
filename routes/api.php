<?php

use App\Http\Resources\Book\BookResource;
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
    Route::group(['namespace' => 'Book'], function () {
        Route::get('/book', 'BookController@books');
        Route::get('/book/{book}', 'BookController@show');
        Route::patch('/book/{book}', 'BookController@update');
        Route::delete('/book/{book}', 'BookController@delete');
    });
    Route::group(['namespace' => 'User'], function () {
        Route::get('/user', 'UserController@users');
        Route::get('/user/{user}', 'UserController@show');
        Route::patch('/user/{user}', 'UserController@update');
    });
});
