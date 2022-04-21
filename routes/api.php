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

Route::apiResource('/question', 'QuestionController');
Route::apiResource('/category', 'CategoryController');
Route::apiResource('/question/{question}/replay', 'ReplayController');
Route::post('/like/{replay}','LikeController@likeIt');
Route::delete('/like/{replay}','LikeController@unLikeIt');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
