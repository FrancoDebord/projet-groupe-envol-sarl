<?php

namespace App\Http\Controllers;

use App\Models\ClientService;
use App\Models\InscriptionClientService;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    //

    function __construct()
    {
        // $this->middleware(["auth"]);
    }

    function accueilAdminPage(Request $request){

        try {

            $total_revenus = InscriptionClientService::sum("montant_paye");

            $revenus_par_service = InscriptionClientService::groupBy("service_souscrit")
            ->selectRaw("sum(montant_paye) as montant_paye, service_souscrit")
            ->get();

            
            $all_clients = ClientService::all();
            $all_clients_inscription = InscriptionClientService::with(["clientServiceConcerne"])->get();
            $all_services = Service::all();
            $all_users = User::all();

            return view("backend.accueil-admin",compact(
                "total_revenus",
                "revenus_par_service",
                "all_clients",
                'all_clients_inscription',
                "all_services",
                "all_users",
            ));

        } catch (\Throwable $th) {
            //throw $th;

            dd($th);
        }
    }


    public function afficherDetailInscriptionPage($inscription_code, Request $request){

        try {
            
            $infos_souscription = InscriptionClientService::with(["clientServiceConcerne","consentementSigne","noteInformationLue"])->where("code_inscription",$inscription_code)->first();

            $infos_transaction = null;

            if($infos_souscription){

                $kkiapay = new \Kkiapay\Kkiapay(
                    "182ba73163b255f793b8153eade717bb90a587e6",
                    "pk_6dd6e3cba14c4d0a9895a0836c92fab3c3fc2a4a4040808ca21298307d0ceeb7",
                    "sk_df5be710d1b26da8b67450b06c109952a6096ef355e9a7f71242a6cca9a75c23"
                    // $sandbox = true
                );

                $infos_transaction =  $kkiapay->verifyTransaction($infos_souscription->kkiapay_transaction_id);

            }
         


            return view("backend.detail-inscription-admin",compact("infos_souscription","infos_transaction"));
        } catch (\Throwable $th) {
            
            dd($th);
        }
    }
}
