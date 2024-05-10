<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BuyyerController;

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
Route::prefix('buyer')->group(function () {
    Route::get('/items', [BuyyerController::class, 'index'])->name('buyer.items');
    Route::get('/items/{id}', [BuyyerController::class, 'show']);
    Route::post('/items', [BuyyerController::class, 'store']);
    Route::put('/items/{id}', [BuyyerController::class, 'update']);
    Route::delete('/items/{buyyer}', [BuyyerController::class, 'destroy']);
});
