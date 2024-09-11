<?php

namespace App\Http\Controllers;

use App\Models\ClientService;
use App\Models\ContactMessage;
use App\Models\CorpsMetier;
use App\Models\CustomFPDF;
use App\Models\GE_Team;
use App\Models\InscriptionClientService;
use App\Models\Pays;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    //

    function __construct() {}


    function accueil()
    {

        try {

            $all_services = Service::all();
            return view("frontend.accueil", compact("all_services"));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    function inscription(Request $request)
    {

        try {

            $service_id = $request->service_id;

            $service = null;

            if ($service_id) {

                $service = Service::find($service_id);
            }
            $list_pays = Pays::orderBy("pays_name")->get();
            $all_services = Service::all();
            $all_corps_metiers = CorpsMetier::orderBy("intitule_metier", "asc")->get();

            $all_services_actifs = Service::where("etat_service", 1)->get();
            return view("frontend.inscription", compact("list_pays", "service", "service_id", "all_services", "all_services_actifs", "all_corps_metiers"));
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    function VisualiserPdfDocument($document, Request $request)
    {

        try {
            //code...
            $all_services = Service::all();
            return view("frontend.view-document-pdf", compact("all_services"));
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    function pageDetailServiceSouscrit($code_inscription, Request $request)
    {

        try {

            $all_services = Service::all();
            $infos_souscription = InscriptionClientService::with(["clientServiceConcerne", "consentementSigne", "noteInformationLue"])->where("code_inscription", $code_inscription)->first();
            return view("frontend.page-visualiser-service", compact("infos_souscription", "all_services"));
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    function testImprimerPDF(Request $request)
    {


        return view("frontend.mail_inscription");
    }


    function ImprimerConsentementHTML(Request $request)
    {

        try {

            if (!session()->has("consentement_signe")) {
                return redirect()->route("inscription")->with("message_error", "Vous devez d'abord signer le consentement avant de télécharger un exemplaire.");
            } else {

                $nom_consentement = session()->get("nom_consentement");
                $prenom_consentement = session()->get("prenom_consentement");
                $date_consentement = session()->get("date_consentement");

                return view("frontend.consentement-print", compact("nom_consentement", "prenom_consentement", "date_consentement"));
            }
        } catch (\Throwable $th) {

            dd($th);
        }
    }


    public function afficherPageAboutUs(Request $request)
    {


        try {
            return view("frontend.page-about-us");
        } catch (\Throwable $th) {
        }
    }

    public function afficherPageTeam(Request $request)
    {


        try {
            $all_teams_member = GE_Team::all();
            return view("frontend.page-team", compact("all_teams_member"));
        } catch (\Throwable $th) {
        }
    }


    public function afficherPageTeamMemberDetail($member_id, $slug, Request $request)
    {


        try {
            $all_teams_member = GE_Team::where("id", "<>", $member_id)->get();
            $team_member_detail = GE_Team::findOrFail($member_id);
            return view("frontend.detail-team", compact("all_teams_member", "team_member_detail"));
        } catch (\Throwable $th) {
        }
    }

    public function afficherPageService(Request $request)
    {


        try {
            return view("frontend.page-nos-services");
        } catch (\Throwable $th) {
        }
    }


    function afficherDetailServiceConseilAssistanceVoyage(Request $request)
    {


        try {
            return view("frontend.services.detail-conseil-assistance");
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    function afficherDetailServiceIntermediationRecrutement(Request $request)
    {


        try {
            return view("frontend.services.detail-intermediation-recrutement");
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    function afficherDetailServiceNegoces(Request $request)
    {


        try {
            return view("frontend.services.detail-negoces");
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    function afficherDetailServiceBourse(Request $request)
    {


        try {
            return view("frontend.services.detail-bourses-etudes-formation");
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    function afficherDetailServiceVenteBilletAvion(Request $request)
    {


        try {
            return view("frontend.services.detail-vente-billet-avion");
        } catch (\Throwable $th) {
            //throw $th;
        }
    }


    function afficherDetailServiceAssuranceVoyage(Request $request)
    {


        try {
            return view("frontend.services.detail-assurance-voyage");
        } catch (\Throwable $th) {
            //throw $th;
        }
    }


    function afficherDetailServiceVisaEtudiant(Request $request)
    {


        try {
            return view("frontend.services.detail-visa-etudiant");
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    function afficherDetailServiceVisaTravailleur(Request $request)
    {


        try {
            return view("frontend.services.detail-visa-travailleur");
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    function afficherDetailServiceVisaVisiteur(Request $request)
    {


        try {
            return view("frontend.services.detail-visa-visiteur");
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    function afficherListePaysDestination(Request $request)
    {


        try {
            return view("frontend.page-list-pays");
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    function afficherPageContact(Request $request)
    {


      

            return view("frontend.contact");
        
    }


    function enregistrerContactMessage(Request $request){

        $rules = [
            "contact_name" => "required|string",
            "contact_email" => "required|email",
            "contact_message" => "required|string",
        ];

        $this->validate($request,$rules);

        $contact_message = ContactMessage::create($request->except(["_token"]));

        $code_message = "";
        $message="";

        if($contact_message){
            $code_message = "message_contact";
            $message="Votre message de contact a été bien enregistré. Nous vous contacterons très vite par mail.";
        }
        else{
            $code_message = "error_contact";
            $message="Votre message de contact  n'a pas été bien enregistré. Veuillez reessayer";
        }

        return redirect()->route("afficherPageContact")->with($code_message,$message);
    }


    function afficherPageListeInscriptionsClient(Request $request){

        try {
            $user_id = Auth::user()->id;

            $client_concerne = ClientService::where("user_id",$user_id)->first();

            $list_inscriptions_clients = [];

            if($client_concerne){


                $list_inscriptions_clients = InscriptionClientService::with("clientServiceConcerne")
                ->where("client_id",$client_concerne->id)
                ->orderBy("date_inscription","desc")->get();
            }

            return view("frontend.page-list-inscriptions-clients",compact("list_inscriptions_clients"));
        } catch (\Throwable $th) {
            //throw $th;

            dd($th);
        }
    }
}
