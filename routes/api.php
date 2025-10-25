<?php

use App\Http\Controllers\Api\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;
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

Route::get('testApi',[APIController::class,'testApi']);
Route::get('getDepartment/{id}',[APIController::class,'getDepartmentInfo']);
Route::post('addDepartment',[APIController::class,'addDepartmentInfo']);

//start  building api routes for passport package
Route::namespace('App\Http\Controllers\Api')->group(function () {
    Route::prefix('/passport')->group(function(){
        Route::post('/login','LoginController@login');


        // create route for testing the token
        Route::middleware('auth:api')->group(function(){
            Route::post('/users','UserController@index');
        });
    });
});



//ndilding api routes for passport package
