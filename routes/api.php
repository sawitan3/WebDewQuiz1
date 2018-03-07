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

Route::get('/Category', 'CategoryController@index');
Route::post('/Category', 'CategoryController@store');
Route::get('/Category/{id}', 'CategoryController@show');
Route::put('/Category/{id}', 'CategoryController@update');
Route::delete('/Category/{id}', 'CategoryController@destroy');

Route::get('/Item', 'ItemController@index');
Route::post('/Item', 'ItemController@store');
Route::get('/Item/{id}', 'ItemController@show');
Route::put('/Item/{id}', 'ItemController@update');
Route::delete('/Item/{id}', 'ItemController@destroy');