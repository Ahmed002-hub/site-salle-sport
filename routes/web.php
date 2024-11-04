<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\TarifsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MentionsLegalesController;

Route::get('/', [AccueilController::class, 'index'])->name('accueil');
Route::get('/cours', [CoursController::class, 'index'])->name('cours');
Route::get('/tarifs', [TarifsController::class, 'index'])->name('tarif');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/mentions-legales', [MentionsLegalesController::class, 'index'])->name('mentions-legales');
