<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\InfoDesaController;
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

Route::get('/hello', function () {
    return response()->json(['message' => 'Hello Proyek 434']);
});


Route::get('/', [TestController::class, 'index']);

Route::get('/info-desa/populasi', [InfoDesaController::class, 'ReadPopulasi']);

Route::get('/info-desa/kebutuhan-rw', [InfoDesaController::class, 'ReadKebutuhanRW']);
