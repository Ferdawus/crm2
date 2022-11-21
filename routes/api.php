<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\EmailController;
use App\Http\Controllers\Api\GeneralController;
use App\Http\Controllers\Api\HostingController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ReferrerController;
use App\Http\Controllers\Api\SalesController;
use App\Http\Controllers\Api\SMSController;
use App\Http\Controllers\Api\SupplierController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('customer',CustomerController::class);
Route::apiResource('supplier',SupplierController::class);
Route::apiResource('product',ProductController::class);
Route::apiResource('category',CategoryController::class);
Route::apiResource('sales',SalesController::class);
Route::apiResource('general',GeneralController::class);
Route::apiResource('sms',SMSController::class);
Route::apiResource('email',EmailController::class);
Route::apiResource('referrer',ReferrerController::class);
Route::apiResource('hosting',HostingController::class);