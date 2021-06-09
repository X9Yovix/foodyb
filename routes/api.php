<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RestaurantController;

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
Route::post('/addres',[RestaurantController::class,'addRestaurant']);
Route::put('/updaterole/{key}',[UserController::class,'updateRoleUser']);

Route::post('/updateres/{key}',[RestaurantController::class,'updateRestaurant']);
Route::post('/contact',[ContactController::class,'submitContact']);
Route::post('/reservation',[ReservationController::class,'reservationUser']);

/*
Route::post('sendrequest', 'App\Http\Controllers\AxiosReceiverController@ReceiveIt');
*/
Route::get('/search/{key}', [RestaurantController::class,'searchRestaurant']);
Route::get('/getrestid/{key}', [RestaurantController::class,'getRestaurant']);
Route::get('/getrestidcard/{key}', [RestaurantController::class,'getRestaurantIdCard']);
Route::get('/getuserinfo/{key}', [RestaurantController::class,'userInfo']);
Route::delete('/delete/{key}', [RestaurantController::class,'deleteRestaurant']);

