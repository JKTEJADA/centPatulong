<?php
// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;

// Default route to input.blade.php
Route::get('/', [RouteController::class, 'create'])->name('routes.create');

Route::get('/input', [RouteController::class, 'create'])->name('routes.create');
Route::post('/routes', [RouteController::class, 'store'])->name('routes.store');
Route::get('/results', [RouteController::class, 'index'])->name('routes.index');