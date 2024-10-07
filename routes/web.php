<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;
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

Route::get('/', function () {
    return view('home', ['halaman' => 'home']);
})->name('home');

Route::get('/', [LayoutController::class, 'index'])->name('login')->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticating'])->name('authenticating');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');
// Menampilkan data
Route::get('/pemasukan', [PemasukanController::class, 'view'])->name('pemasukan')->middleware('auth');
// Menambah dan menyimpan data
Route::get('/pemasukan-add', [PemasukanController::class, 'create'])->name('pemasukan-add')->middleware(['auth', 'must-admin']);
Route::post('/pemasukan', [PemasukanController::class, 'add'])->middleware('auth');
// Edit data
Route::get('/pemasukan-edit/{id}', [PemasukanController::class, 'edit'])->name('pemasukan-edit')->middleware(['auth', 'must-admin']);
Route::put('/pemasukan/{id}', [PemasukanController::class, 'update'])->middleware('auth');
// Hapus Data
Route::get('/pemasukan-delete/{id}', [PemasukanController::class, 'delete'])->middleware(['auth', 'must-admin']);
Route::delete('/pemasukan-destroy/{id}', [PemasukanController::class, 'destroy'])->middleware('auth');

Route::get('/pengeluaran', [PengeluaranController::class, 'view'])->name('pengeluaran')->middleware('auth');

Route::get('/pengeluaran-add', [PengeluaranController::class, 'create'])->name('pengeluaran-add')->middleware('auth');
Route::post('/pengeluaran', [PengeluaranController::class, 'add'])->middleware('auth');

Route::get('/pengeluaran-edit/{id}', [PengeluaranController::class, 'edit'])->name('pengeluaran-edit')->middleware(['auth', 'must-admin']);
Route::put('/pengeluaran/{id}', [PengeluaranController::class, 'update'])->middleware('auth');

Route::get('/pengeluaran-delete/{id}', [PengeluaranController::class, 'delete'])->middleware(['auth', 'must-admin']);
Route::delete('/pengeluaran-destroy/{id}', [PengeluaranController::class, 'destroy'])->middleware('auth');

