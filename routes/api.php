<?php

use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\UserController;
use App\Models\Restaurant;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/* name,controller,fn in controller */
Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']);
Route::post('/addRestaurant',[RestaurantController::class,'addRestaurant']);
Route::get('/user/{id}',[UserController::class,'userInfo']);
Route::get('/all',[UserController::class,'allUser']);