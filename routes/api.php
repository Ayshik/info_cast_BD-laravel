<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\info_cast_controller;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/login',[info_cast_controller::class,'login']);
Route::get('/kids_packages',[info_cast_controller::class,'kplist']);
Route::get('/Gamer_packages',[info_cast_controller::class,'gplist']);
Route::get('/Student_packages',[info_cast_controller::class,'splist']);
Route::get('/Special_offers',[info_cast_controller::class,'soplist']);
Route::post('/Requestpack',[info_cast_controller::class,'requestpack']);
Route::get('/Customer_request',[info_cast_controller::class,'crequest']);
Route::get('/Customer_paid',[info_cast_controller::class,'paid']);
Route::get('/Customer_unpaid',[info_cast_controller::class,'unpaid']);
Route::get('/Customer_connection',[info_cast_controller::class,'cconnection']);
Route::put('/Update-status/{id}', [info_cast_controller::class, 'updatestatus']);
Route::get('/Inactivecustomer_connection',[info_cast_controller::class,'inactive']);
Route::get('/unpaid_connection',[info_cast_controller::class,'unpaid']);
Route::put('/Update-status-payment/{id}', [info_cast_controller::class, 'updatepayment']);
Route::get('/All_connection',[info_cast_controller::class,'all']);
Route::get('/Customer_request',[info_cast_controller::class,'crequest']);
Route::put('/Update-request/{id}', [info_cast_controller::class, 'updatereq']);
Route::delete('/Delete_request/{id}', [info_cast_controller::class, 'deletereq']);