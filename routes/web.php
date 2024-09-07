<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\CreatorsController;

// Rotte nominali
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/annunci', [PublicController::class, 'annunci'])->name('annunci');

Route::get('/chi-siamo', [CreatorsController::class, 'chiSiamo'])->name('chi.siamo');

// Rotta parametrica
Route::get('/chi-siamo/dettaglio/{name}', [CreatorsController::class, 'dettaglio'])->name('dettaglio');
