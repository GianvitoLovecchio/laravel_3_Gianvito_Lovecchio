<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;

Route::get('/', [PublicController::class, 'goToHomepage'])->name('homepage');

Route::get('articoli', [ArticleController::class, 'goToArticoli'])->name('articoli');

Route::get('articoli/dettaglio/{id}', [ArticleController::class, 'goToDettaglioArticolo'])->name('dettaglio_articoli');

Route::get('contatti',[ContactController::class,'goToContact'])->name('contatti');

Route::post('contatti/invio',[ContactController::class, 'contactSubmit'])->name('invio_contatto');
