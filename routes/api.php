<?php

use App\Http\Controllers\API\RealestateController;
use App\Http\Controllers\API\RentController;
use App\Http\Controllers\API\SaleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/realestate', RealestateController::class);
Route::apiResource('/rent', RentController::class);
Route::apiResource('/sale', SaleController::class);
