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


Route::post('bus', 'BusController@store');
Route::post('bus/position', 'BusController@update');

Route::get('subject', 'TypeController@index');
Route::get('track', 'TrackController@index');
Route::get('track/{id}', 'TrackController@show');