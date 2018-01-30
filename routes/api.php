<?php

use App\Http\Controllers\Api\SchoolsController;
use App\Http\Controllers\Api\StudentsController;
use App\Http\Controllers\Api\UsersController;
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

Route::middleware('auth:api')->get('/user', function(Request $request) {
    return $request->user();
});

Route::resource('users', UsersController::class);
Route::resource('schools', SchoolsController::class);
Route::resource('students', StudentsController::class);
