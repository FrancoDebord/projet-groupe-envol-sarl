<?php

use App\Http\Controllers\BackendController;
use Illuminate\Support\Facades\Route;


Route::prefix("admin")->group(function(){

    Route::get('/', [BackendController::class,"accueilAdminPage"])->name("accueilAdminPage");
    Route::get('/all-inscriptions', [BackendController::class,"afficherPageAllInscription"])->name("afficherPageAllInscription");
    Route::get('/detail-inscription/{inscription_code}', [BackendController::class,"afficherDetailInscriptionPage"])->name("afficherDetailInscriptionPage");
    Route::get('/update-state-dossier/{inscription_code}', [BackendController::class,"updateStateOfDossier"])->name("updateStateOfDossier");
    Route::post('/soumettre-update-state-dossier/{inscription_code}', [BackendController::class,"soumettreFormulaireModifierEtat"])->name("soumettreFormulaireModifierEtat");
});
