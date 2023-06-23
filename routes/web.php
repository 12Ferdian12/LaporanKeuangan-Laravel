<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TransaksiController;
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


Route::get('/login', function () {
    return view('Authentification.login');
})->name('login');

Route::post('/login', [AuthController::class, 'auth'])->name('auth');


Route::get('/', function () {
    return redirect()->route('kategori.index');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::prefix('kategori')->name('kategori.')->group(function() {
        Route::get('/', [KategoriController::class, 'index'])->name('index');
        Route::group(['middleware' => ['adminAccess']], function () {
            Route::get('/create', [KategoriController::class, 'create'])->name('create');
            Route::post('/create', [KategoriController::class, 'store'])->name('store');
            Route::get('/{id}/edit', [KategoriController::class, 'edit'])->name('edit');
            Route::post('/{id}/edit', [KategoriController::class, 'update'])->name('update');
            Route::delete('/{id}/delete', [KategoriController::class, 'destroy'])->name('delete');
        });
    });
    
    Route::prefix('transaksi')->name('transaksi.')->group( function() {
        Route::get('/history', [TransaksiController::class, 'index'])->name('index');
        Route::get('/', [TransaksiController::class, 'create'])->name('create');
        Route::post('/create', [TransaksiController::class, 'store'])->name('store');
        Route::get('/report', [TransaksiController::class, 'report'])->name('report');
        Route::group(['middleware' => ['adminAccess']], function () {
            Route::get('/{id}/edit', [TransaksiController::class, 'edit'])->name('edit');
            Route::post('/{id}/edit', [TransaksiController::class, 'update'])->name('update');
            Route::delete('/{id}/delete', [TransaksiController::class, 'destroy'])->name('delete');
        });

    });
});