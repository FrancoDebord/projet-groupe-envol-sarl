<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [FrontendController::class,"accueil"])->name("accueil");
Route::get('/inscription', [FrontendController::class,"inscription"])->name("inscription");

