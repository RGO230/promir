<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApiCourseController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\StreamApiController;

Route::group(['middleware'=>'jwt.auth'],function(){

Route::post('/message', 'App\Http\Controllers\ChatController@index');
Route::get('/courses',[ApiCourseController::class,'index']);
});
Route::get('/some/2', function(){return 'wafwfewef';});
Route::post('initpay',[PayController::class,'init']);
Route::get('paysuccess',[PayController::class,'success']);
Route::get('payerror',[PayController::class,'error']);
Route::get('invite',[StreamApiController::class,'sendInvite']);