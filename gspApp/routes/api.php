<?php

use App\Http\Controllers\LinijaController;
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

Route::get('linije', [LinijaController::class, 'index']);
Route::get('linije/{id}', [LinijaController::class, 'show']);
Route::delete('linije/{id}', [LinijaController::class, 'destroy']);

Route::post('linije/', [LinijaController::class, 'store']);
Route::put('linije/{id}', [LinijaController::class, 'update']);