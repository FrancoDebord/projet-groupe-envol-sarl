<?php

use App\Http\Controllers\RequeteAjaxFrontendController;
use Illuminate\Support\Facades\Route;


Route::prefix("ajax")->group(function(){

    Route::post('/add-data-inscription', [RequeteAjaxFrontendController::class,"addDataToSession"])->name("addDataToSession");
});
