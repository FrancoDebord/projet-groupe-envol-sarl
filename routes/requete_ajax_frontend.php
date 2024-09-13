<?php

use App\Http\Controllers\RequeteAjaxFrontendController;
use Illuminate\Support\Facades\Route;


Route::prefix("ajax")->group(function(){

    Route::post('/enregistrer-note-information-lue', [RequeteAjaxFrontendController::class,"enregistrer_lecture_note_information"])->name("enregistrer_lecture_note_information");
    Route::post('/signer-consentement', [RequeteAjaxFrontendController::class,"signerConsentement"])->name("signerConsentement");
    Route::post('/add-information-detaillee', [RequeteAjaxFrontendController::class,"ValiderInformationDetailleeClient"])->name("ValiderInformationDetailleeClient");
    Route::post('/add-information-service-et-finaliser-inscription', [RequeteAjaxFrontendController::class,"ajouterInformationServiceEtFinaliserInscription"])->name("ajouterInformationServiceEtFinaliserInscription");
    Route::get('/paiement-reussi', [RequeteAjaxFrontendController::class,"effectuerPaiementKKiaPay"])->name("effectuerPaiementKKiaPay");
    Route::get('/list-pays-service', [RequeteAjaxFrontendController::class,"getListPaysConcernesParService"])->name("getListPaysConcernesParService");
    Route::post('/annuler-inscription', [RequeteAjaxFrontendController::class,"annulerInscriptionEtEffacerDonnees"])->name("annulerInscriptionEtEffacerDonnees");
});


// {#295 ▼ // app\Http\Controllers\RequeteAjaxFrontendController.php:343
//     +"performed_at": "2024-07-07T21:20:42.257Z"
//     +"received_at": 1720387260898
//     +"type": "DEBIT"
//     +"status": "SUCCESS"
//     +"source": "MOBILE_MONEY"
//     +"source_common_name": "mtn-benin"
//     +"amount": 1
//     +"fees": 1
//     +"net": 0
//     +"externalTransactionId": "7618392484"
//     +"paymentlink": null
//     +"country": "BJ"
//     +"reason": "payment"
//     +"failureCode": ""
//     +"failureMessage": ""
//     +"state": null
//     +"partnerId": ""
//     +"before_balance": 0
//     +"after_balance": 1
//     +"is_payout": false
//     +"is_counted": true
//     +"hasChargeback": false
//     +"wallet": "payout-wallet"
//     +"sharedTransaction": null
//     +"initialTransactionReference": null
//     +"initialTransactionDate": null
//     +"feeSupportedBy": "customer"
//     +"accountPaymentSettings": {#291 ▶}
//     +"income": 1
//     +"client": {#298 ▼
//       +"createdAt": 1720387242218
//       +"updatedAt": 1720387242218
//       +"meta_data": ""
//       +"isNewGeneration": true
//       +"fullname": "HOUEHA FRANCIS"
//       +"country": "BJ"
//       +"phone": "22996045392"
//       +"email": "fhoueha@gmail.com"
//       +"person": null
//     }
//     +"payout": null
//     +"session": null
//     +"transactionId": "407615869648517"
//     +"performedAt": "07/07/2024"
//   }


//http://127.0.0.1:8000/ajax/paiement-reussi?transaction_id=5329829091947770
// http://127.0.0.1:8000/ajax/paiement-reussi?transaction_id=7296082605744427