<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ImpressionDocumentPDFController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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

Route::get('/our-services/conseil-assistance-voyage', [FrontendController::class,"afficherDetailServiceConseilAssistanceVoyage"])->name("afficherDetailServiceConseilAssistanceVoyage");
Route::get('/our-services/intermediation-recrutement', [FrontendController::class,"afficherDetailServiceIntermediationRecrutement"])->name("afficherDetailServiceIntermediationRecrutement");
Route::get('/our-services/negoces', [FrontendController::class,"afficherDetailServiceNegoces"])->name("afficherDetailServiceNegoces");
Route::get('/our-services/bourses-etudes-formation', [FrontendController::class,"afficherDetailServiceBourse"])->name("afficherDetailServiceBourse");
Route::get('/our-services/vente-billet-avion', [FrontendController::class,"afficherDetailServiceVenteBilletAvion"])->name("afficherDetailServiceVenteBilletAvion");
Route::get('/our-services/assurance-voyage', [FrontendController::class,"afficherDetailServiceAssuranceVoyage"])->name("afficherDetailServiceAssuranceVoyage");
Route::get('/our-services/visa-etudiant', [FrontendController::class,"afficherDetailServiceVisaEtudiant"])->name("afficherDetailServiceVisaEtudiant");
Route::get('/our-services/visa-travailleur', [FrontendController::class,"afficherDetailServiceVisaTravailleur"])->name("afficherDetailServiceVisaTravailleur");
Route::get('/our-services/visa-visiteur', [FrontendController::class,"afficherDetailServiceVisaVisiteur"])->name("afficherDetailServiceVisaVisiteur");

Route::get('/list-pays-destination', [FrontendController::class,"afficherListePaysDestination"])->name("afficherListePaysDestination");
Route::get('/pays-destination/{id}-{slug}', [FrontendController::class,"pageDetailPaysDestination"])->name("pageDetailPaysDestination");

Route::get('/contactez-nous', [FrontendController::class,"afficherPageContact"])->name("afficherPageContact");
Route::post('/soumettre-message-contact', [FrontendController::class,"enregistrerContactMessage"])->name("enregistrerContactMessage");


Route::get('/list-inscriptions-client', [FrontendController::class,"afficherPageListeInscriptionsClient"])
->middleware("auth")
->name("afficherPageListeInscriptionsClient");


Route::get('/our-services/{service_id}-{slug}', [FrontendController::class,"afficherDetailService"])->name("afficherDetailService");

require __DIR__.'/requete_ajax_frontend.php';
require __DIR__.'/route_admin.php';