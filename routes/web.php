<?php

use App\Http\Controllers\PointController;
use App\Http\Controllers\TabelController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PointController::class, 'index'])->name('map');

Route::get('/tabel', [TabelController::class, 'index']) ->name('tabel');
// Route::post('/store-point', [PointController::class, 'store']) ->name('store.point');
Route::resource('points', PointController::class);
