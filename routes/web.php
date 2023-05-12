<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KategoriController;
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

Route::get('/', function () {
    return redirect()->route('kategori.index');
});

Route::prefix('kategori')->name('kategori.')->group( function() {
    Route::get('/', [KategoriController::class, 'index'])->name('index');
    Route::get('/create', [KategoriController::class, 'create'])->name('create');
    Route::post('/create', [KategoriController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [KategoriController::class, 'edit'])->name('edit');
    Route::post('/{id}/edit', [KategoriController::class, 'update'])->name('update');
    Route::delete('/{id}/delete', [KategoriController::class, 'destroy'])->name('delete');
});
