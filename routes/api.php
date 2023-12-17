<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaApiController;

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

Route::get('/user/login', function () {
})->middleware(AuthenticateOnceWithBasicAuth::class);

Route::get('/mahasiswa', [MahasiswaApiController::class, 'showData']);
Route::get('/mahasiswa/{id}', [MahasiswaApiController::class, 'show']);
Route::post('/mahasiswa', [MahasiswaApiController::class, 'store']);
Route::put('/mahasiswa/{id}', [MahasiswaApiController::class, 'edit']);
Route::delete('/mahasiswa/{id}', [MahasiswaApiController::class, 'destroy']);
