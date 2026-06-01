<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

use App\Http\Controllers\AnnoncesController;

Route::get('/annonces', [AnnoncesController::class, 'index']);

use App\Http\Controllers\NewsController;

Route::get('/news', [NewsController::class, 'index']);

use App\Http\Controllers\RecrutementController;

Route::get('/recrutement', [RecrutementController::class, 'index']);

use App\Http\Controllers\TssController;

Route::get('/tss', [TssController::class, 'index']);

use App\Http\Controllers\SqbController;

Route::get('/sqb', [SqbController::class, 'index'])->name('sqb');
Route::get('/telechargement/{fichier}', [SqbController::class, 'download'])->name('sqb.download');


