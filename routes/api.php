<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\TokenController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/get-menu',[MenuController::class,'getMenu']);
Route::get('/get-student',[StudentController::class,'getStudent']);
Route::post('/send-otp',[OtpController::class,'sendOtp']);
Route::post('/verify-otp',[OtpController::class,'verifyOtp']);
Route::post('/verify-token',[TokenController::class,'verifyToken']);
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
