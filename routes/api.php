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

// Route::post('/register', 'Auth\AuthController@register');
// Route::post('/login', [API\AuthController::class, 'login']);
Route::middleware('auth:api')->get('v1/user', function (Request $request) {
    return $request->user();
});
