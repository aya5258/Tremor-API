<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeasurementController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
//Route::get('/insecure', function (Request $request) {
//    // update user password
//    // show user orders
//    return $request->user();
//});
//Measurements
Route::get('/Measurements', [MeasurementController::class, 'index']);
Route::post('/Measurements/store', [MeasurementController::class, 'store']);
Route::get('/Measurements/{id}', [MeasurementController::class, 'show']);
Route::put('/Measurements/{id}/update', [MeasurementController::class, 'update']);
Route::delete('/Measurements/{id}/delete', [MeasurementController::class, 'destroy']);

// User Login & Register Routes
Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', RegisterController::class);
