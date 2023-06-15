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

//Route untuk menampilkan form edit pasien
Route::get('/pasien/edit/{id}', [PasienController::class, 'edit']);

//Route  untuk memproses update pasien
Route::put('/pasien/{id}', [PasienController::class, 'update']);


//Route untuk menghapus pasien
Route::delete('/pasien', [PasienController::class, 'destroy']);


//Route untuk menampilkan form edit dokter
Route::get('/dokter/edit/{id}', [DokterController::class, 'edit']);

//Route  untuk memproses update dokter
Route::put('/dokter/{id}', [DokterController::class, 'update']);


//Route untuk menghapus dokter
Route::delete('/dokter', [DokterController::class, 'destroy']);