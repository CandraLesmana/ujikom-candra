<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryOrderController;
use App\Http\Controllers\JenisPembayaranController;
use App\Http\Controllers\JenisLayananController;
use App\Http\Controllers\KonsumenController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TransaksiOrderController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/{path?}', function () {
//     return view('welcome');
// })->where('path', '.*');

Route::get('/', [MainController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/petugas', [PetugasController::class, 'index']);
Route::get('/history-order', [HistoryOrderController::class, 'index']);
Route::get('/transaksi-order', [TransaksiOrderController::class, 'index']);
Route::get('/transaksi-order/casier', [TransaksiOrderController::class, 'casier']);
Route::get('/jenis-pembayaran', [JenisPembayaranController::class, 'index']);
Route::get('/jenis-layanan', [JenisLayananController::class, 'index']);
Route::get('/konsumen', [KonsumenController::class, 'index']);
Route::get('/petugas', [PetugasController::class, 'index']);

