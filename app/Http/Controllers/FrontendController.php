<?php

namespace App\Http\Controllers;

use App\Models\ClientService;
use App\Models\CorpsMetier;
use App\Models\CustomFPDF;
use App\Models\GE_Team;
use App\Models\InscriptionClientService;
use App\Models\Pays;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //

    function __construct()
    {
        
    }


    function accueil(){

        try {

            $all_services = Service::all();
            return view("frontend.accueil",compact("all_services"));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    function inscription(Request $request){

        try {

            $service_id = $request->service_id;

            $service = null;

            if($service_id){

                $service = Service::find($service_id);
            }
            $list_pays = Pays::orderBy("pays_name")->get();
            $all_services = Service::all();
            $all_corps_metiers = CorpsMetier::orderBy("intitule_metier","asc")->get();

            $all_services_actifs = Service::where("etat_service",1)->get();
            return view("frontend.inscription",compact("list_pays","service","service_id","all_services","all_services_actifs","all_corps_metiers"));
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    function VisualiserPdfDocument($document, Request $request){

        try {
            //code...
            $all_services = Service::all();
            return view("frontend.view-document-pdf",compact("all_services"));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    function pageDetailServiceSouscrit($code_inscription,Request $request){

        try {
           
            $all_services = Service::all();
            $infos_souscription = InscriptionClientService::with(["clientServiceConcerne","consentementSigne","noteInformationLue"])->where("code_inscription",$code_inscription)->first();
            return view("frontend.page-visualiser-service",compact("infos_souscription","all_services"));
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    function testImprimerPDF(Request $request){


      return view("frontend.mail_inscription");
    
    }


    function ImprimerConsentementHTML(Request $request){

        try {
            
            if(!session()->has("consentement_signe")){
                return redirect()->route("inscription")->with("message_error","Vous devez d'abord signer le consentement avant de télécharger un exemplaire.");
            }
            else{

                $nom_consentement = session()->get("nom_consentement");
                $prenom_consentement = session()->get("prenom_consentement");
                $date_consentement = session()->get("date_consentement");

                return view("frontend.consentement-print",compact("nom_consentement","prenom_consentement","date_consentement"));
            }
        } catch (\Throwable $th) {
            
            dd($th);
        }
    }


    public function afficherPageAboutUs(Request $request){


        try {
            return view("frontend.page-about-us");
        } catch (\Throwable $th) {
        }
    }

    public function afficherPageTeam(Request $request){


        try {
            $all_teams_member = GE_Team::all();
            return view("frontend.page-team",compact("all_teams_member"));
        } catch (\Throwable $th) {
        }
    }


    public function afficherPageTeamMemberDetail($member_id, $slug, Request $request){


        try {
            $all_teams_member = GE_Team::where("id","<>",$member_id)->get();
            $team_member_detail = GE_Team::findOrFail($member_id);
            return view("frontend.detail-team",compact("all_teams_member","team_member_detail"));
        } catch (\Throwable $th) {
        }
    }

    public function afficherPageService(Request $request){


        try {
            return view("frontend.page-nos-services");
        } catch (\Throwable $th) {
        }
    }
}
