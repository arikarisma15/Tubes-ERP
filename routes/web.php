<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\BahanController;
use GuzzleHttp\Promise\Create;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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



Route::get('/', [DashboardController::class, 'index']);
Route::get('/listproduk', [ProdukController::class, 'index'])->name('listproduk');
Route::get('/addproduk', [ProdukController::class, 'create'])->name('addproduk');
Route::get('/listbahan', [BahanController::class, 'index'])->name('listbahan');
Route::get('/addbahan', [BahanController::class, 'create'])->name('addbahan');

// //bagain beranda
// Route::get('/', [InventoryController::class, 'tampilData']);

// //tambah data bagian inventori
// Route::post('tambah-inventori', [InventoryController::class, 'store']);

// //update data inventori
// Route::get('mengubah-inventori/{id}', [InventoryController::class, 'mengubahData']);
// Route::put('ubah-inventori/{id}', [InventoryController::class, 'ubahData']);

// //hapus data inventori
// Route::get('hapus-inventory/{id}', [InventoryController::class, 'hapusData']);
