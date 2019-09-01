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

Route::get('/v0/get-all-brands', 'API\GetBrandsController@getAllBrrands');

Route::post('/v0/get-model-spec', 'API\GetBrandsController@getAllModelSpec');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
