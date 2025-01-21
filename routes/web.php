<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PublicController::class, 'goToHomepage'])->name('homepage');

Route::get('articoli', [ArticleController::class, 'goToArticoli'])->name('articoli');

Route::get('articoli/dettaglio/{id}', [ArticleController::class, 'goToDettaglioArticolo'])->name('dettaglio_articoli');
