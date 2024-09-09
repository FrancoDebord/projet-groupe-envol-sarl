<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequeteAjaxBackendController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware("auth");
    }

    function modifierEtatDossier(Request $request){

        try {
            $rules = [
                "inscription_id"=>"required|integer|exists:inscriptions_clients_services,id",
                "statut_dossier"=>"required|string",
                "service_id"=>"required|exists:services,id",
                "pays_destination"=>"required|exists:pays,id",
                "piece_identite"=>"nullabe|mimes:pdf",
                "attestation_diplome_plus_eleve"=>"nullabe|mimes:pdf",
                "releves_notes_diplome_plus_eleve"=>"nullabe|mimes:pdf",
            ];

            $this->validate($request,$rules);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
