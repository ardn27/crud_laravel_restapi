<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/show', [MahasiswaController::class, 'showData']);
Route::get('/edit/{id}', [MahasiswaController::class, 'editData']);
Route::post('/add', [MahasiswaController::class, 'store']);
Route::get('/edit-action', [MahasiswaController::class, 'edit']);
Route::get('/delete/{id}', [MahasiswaController::class, 'destroy']);

