<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('reviews', 'ReviewController@index');

Route::get('review/{id}', 'ReviewController@show');

Route::post('review', 'ReviewController@store');

// Route::put('review', 'ReviewController@store');

Route::put('review/{id}', 'ReviewController@update');

Route::delete('review/{id}', 'ReviewController@destroy');