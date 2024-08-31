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
            $all_clients_inscription = InscriptionClientService::all();
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
}
