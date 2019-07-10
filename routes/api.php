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

//api route
Route::post('/news', 'ApiNewsController@store');
Route::get('/news/{source}/last', 'ApiNewsController@last_news_by_source');
Route::get('/news/{source}/{date}', 'ApiNewsController@news_by_date_and_source');
Route::get('/news', 'ApiNewsController@all');
