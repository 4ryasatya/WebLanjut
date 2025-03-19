<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PointController;
use App\Http\Controllers\TabelController;
use App\Http\Controllers\PolygonController;
use App\Http\Controllers\PolylineController;

Route::get('/', [PointController::class, 'index'])->name('map');

Route::get('/tabel', [TabelController::class, 'index']) ->name('tabel');
// Route::post('/store-point', [PointController::class, 'store']) ->name('store.point');
Route::resource('points', PointController::class);
Route::resource('polylines', PolylineController::class);
Route::resource('polygon', PolygonController::class);
