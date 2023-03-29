<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\PesertaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ClientController::class, 'index']);
Route::get('/galeri', [ClientController::class, 'galeri']);
Route::get('/detail/{id}', [ClientController::class, 'detail']);

//auth
Route::post('/login', [ClientController::class, 'auth']);
Route::get('/logout', [ClientController::class, 'logout']);
Route::get('/dash-admin', [ClientController::class, 'login']);

//admin
Route::prefix('/dash-admin')->middleware(['check'])->group(function () {
    Route::get('/dashboard', [ClientController::class, 'dashboard']);
    Route::get('/peserta/{id}/edit', [PesertaController::class, 'edit']);
    Route::post('/peserta/{id}/edit', [PesertaController::class, 'update']);
    Route::get('/peserta/tambah', [PesertaController::class, 'tambah']);
    Route::post('/peserta/tambah', [PesertaController::class, 'simpan']);
    Route::get('/peserta/{id}/hapus', [PesertaController::class, 'hapus']);
});
