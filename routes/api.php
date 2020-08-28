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
Route::post('auth/login', 'Api\\AuthController@login');

Route::apiResource('users','Api\\UserController');

Route::group(['middleware' => ['apiJwt']], function() {
    Route::apiResource('members','Api\\MemberController');
    Route::post('members/{id}/avatar', 'Api\\AvatarController@store');
});
Route::get('avatar/show/{file}', 'Api\\AvatarController@show');
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
