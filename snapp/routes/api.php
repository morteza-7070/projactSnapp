<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BuyyerController;
use App\Http\Controllers\AuthController;

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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('api')->group(function () {
   Route::get('/user',[BuyyerController::class , 'index']);
});
//middleware('auth:sanctum')->
//Route::get('login',[AuthController::class , 'login']);
Route::prefix('buyer')->group(function () {
    Route::get('/items', [BuyyerController::class, 'index'])->name('api.buyer.items');
    Route::get('/items/{id}', [BuyyerController::class, 'show']);
    Route::post('/items', [BuyyerController::class, 'store']);

    Route::put('/items/{id}', [BuyyerController::class, 'update']);
    Route::delete('/items/{id}', [BuyyerController::class, 'destroy']);
});
