<?php

use App\Http\Controllers\BackendController;
use Illuminate\Support\Facades\Route;


Route::prefix("admin")->group(function(){

    Route::get('/', [BackendController::class,"accueilAdminPage"])->name("accueilAdminPage");
    Route::get('/detail-inscription/{inscription_code}', [BackendController::class,"afficherDetailInscriptionPage"])->name("afficherDetailInscriptionPage");
});