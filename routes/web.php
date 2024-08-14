<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ImpressionDocumentPDFController;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [FrontendController::class,"accueil"])->name("accueil");
Route::get('/inscription', [FrontendController::class,"inscription"])->name("inscription");
Route::get('/visualiser-document/{document}', [FrontendController::class,"VisualiserPdfDocument"])->name("VisualiserPdfDocument");
Route::get('/visualiser-inscription-service/{code_inscription}', [FrontendController::class,"pageDetailServiceSouscrit"])->name("pageDetailServiceSouscrit");
Route::get('/imprimer-consentement', [FrontendController::class,"ImprimerConsentementHTML"])->name("ImprimerConsentementHTML");
Route::get('/test-mail', [FrontendController::class,"testImprimerPDF"])->name("testImprimerPDF");
Route::get('/about-us', [FrontendController::class,"afficherPageAboutUs"])->name("afficherPageAboutUs");
Route::get('/our-team', [FrontendController::class,"afficherPageTeam"])->name("afficherPageTeam");
Route::get('/team-member/{id}-{slug}', [FrontendController::class,"afficherPageTeamMemberDetail"])->name("afficherPageTeamMemberDetail");
Route::get('/our-services', [FrontendController::class,"afficherPageService"])->name("afficherPageService");

require __DIR__.'/requete_ajax_frontend.php';