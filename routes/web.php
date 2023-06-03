<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DashboardController::class, 'index']);

//Route untuk menampilkan daftar pasien

Route::get ('/pasien',[PasienController::class,'index' ]);

Route::get('/pasien/create', [PasienController::class, 'create']);

Route::post('/pasien',[PasienController::class, 'store']);
//Route untuk menampilkan  daftar dokter
Route::get ('/dokter',[DokterController::class, 'index']);

Route::get('/dokter/create',[DokterController::class, 'create']);

Route::post('/dokter', [DokterController::class, 'store']);