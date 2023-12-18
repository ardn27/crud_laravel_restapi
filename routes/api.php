<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaApiController;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\BukuController;

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

//Buku
Route::post('/buku', [BukuController::class, 'store']);
Route::get('/buku', [BukuController::class, 'read']);
Route::delete('/buku/{id}', [BukuController::class, 'delete']);

//Pinjaman
Route::post('/pinjaman', [PinjamanController::class, 'create']);
Route::get('/pinjaman', [PinjamanController::class, 'show']);
Route::get('/pinjaman/{id}', [PinjamanController::class, 'showDetail']);
Route::put('/pinjaman/{id}', [PinjamanController::class, 'update']);
Route::delete('/pinjaman/{id}', [PinjamanController::class, 'delete']);
