<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckAccessToBackend;
use App\Models\ClientService;
use App\Models\ContactMessage;
use App\Models\InscriptionClientService;
use App\Models\Pays;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    //

    function __construct()
    {
        $this->middleware(["auth", CheckAccessToBackend::class]);
    }

    function accueilAdminPage(Request $request)
    {

        try {

            $total_revenus = InscriptionClientService::sum("montant_paye");

            $revenus_par_service = InscriptionClientService::groupBy("service_souscrit")
                ->selectRaw("sum(montant_paye) as montant_paye, service_souscrit")
                ->get();


            $all_clients = ClientService::all();
            $all_clients_inscription = InscriptionClientService::with(["clientServiceConcerne"])
                ->orderBy("date_inscription", "desc")
                ->get();
            $all_services = Service::all();
            $all_users = User::all();

            return view("backend.accueil-admin", compact(
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


    public function afficherDetailInscriptionPage($inscription_code, Request $request)
    {

        try {

            $infos_souscription = InscriptionClientService::with(["clientServiceConcerne", "consentementSigne", "noteInformationLue"])->where("code_inscription", $inscription_code)->first();

            $infos_transaction = null;

            if ($infos_souscription) {

                $kkiapay = new \Kkiapay\Kkiapay(
                    "182ba73163b255f793b8153eade717bb90a587e6",
                    "pk_6dd6e3cba14c4d0a9895a0836c92fab3c3fc2a4a4040808ca21298307d0ceeb7",
                    "sk_df5be710d1b26da8b67450b06c109952a6096ef355e9a7f71242a6cca9a75c23"
                    // $sandbox = true
                );

                $infos_transaction =  $kkiapay->verifyTransaction($infos_souscription->kkiapay_transaction_id);
            }



            return view("backend.detail-inscription-admin", compact("infos_souscription", "infos_transaction"));
        } catch (\Throwable $th) {

            dd($th);
        }
    }


    /**
     * 
     */
    function afficherPageAllInscription(Request $request)
    {

        try {

            $all_clients_inscription = InscriptionClientService::with(["clientServiceConcerne"])
                ->orderBy("date_inscription", "desc")->get();
            return view("backend.list-all-inscriptions", compact("all_clients_inscription"));
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function updateStateOfDossier($inscription_code, Request $request)
    {

        try {

            $infos_souscription = InscriptionClientService::with(["clientServiceConcerne", "consentementSigne", "noteInformationLue"])->where("code_inscription", $inscription_code)->first();

            $list_services = Service::where("etat_service", 1)->get();
            $list_pays = Pays::orderBy("pays_name", "asc")->get();

            return view("backend.update-state-inscription", compact("infos_souscription", "list_services", "list_pays"));
        } catch (\Throwable $th) {

            dd($th);
        }
    }


    public function soumettreFormulaireModifierEtat($inscription_code, Request $request)
    {

        $rules = [
            "inscription_id" => "required|integer|exists:inscriptions_clients_services,id",
            "statut_dossier" => "required|string",
            "service_id" => "required|exists:services,id",
            "pays_destination" => "required|exists:pays,pays_name",
            "piece_identite" => "nullable|mimes:pdf",
            "attestation_diplome_plus_eleve" => "nullable|mimes:pdf",
            "releves_notes_diplome_plus_eleve" => "nullable|mimes:pdf",
        ];

        $this->validate($request, $rules);


        try {
            $inscription_to_update = InscriptionClientService::findOrFail($request->inscription_id);

            $donnees_service = $request->all();

            
            $donnees_service["piece_identite"] = $inscription_to_update->piece_identite;
            $donnees_service["attestation_diplome_plus_eleve"] = $inscription_to_update->attestation_diplome_plus_eleve;
            $donnees_service["releves_notes_diplome_plus_eleve"] = $inscription_to_update->releves_notes_diplome_plus_eleve;
            
            $piece_identite = $request->file("piece_identite");
            if (!empty($piece_identite)) {

                $file_name = "piece_identite_" . date("Y-m-d_H-i-s") . "_" . $piece_identite->getClientOriginalName();
                $return = $piece_identite->move(public_path("storage/pdfs_documents"), $file_name);
                $donnees_service["piece_identite"] = $file_name;

                @unlink(public_path("storage/pdfs_documents/") . $inscription_to_update->piece_identite);
            }

            $attestation_diplome_plus_eleve = $request->file("attestation_diplome_plus_eleve");
            if (!empty($attestation_diplome_plus_eleve)) {

                $file_name = "attestation_diplome_plus_eleve_" . date("Y-m-d_H-i-s") . "_" . $attestation_diplome_plus_eleve->getClientOriginalName();
                $return = $attestation_diplome_plus_eleve->move(public_path("storage/pdfs_documents"), $file_name);

                $donnees_service["attestation_diplome_plus_eleve"] = $file_name;
                @unlink(public_path("storage/pdfs_documents/") . $inscription_to_update->attestation_diplome_plus_eleve);
            }

            $releves_notes_diplome_plus_eleve = $request->file("releves_notes_diplome_plus_eleve");
            if (!empty($releves_notes_diplome_plus_eleve)) {

                $file_name = "releves_notes_diplome_plus_eleve_" . date("Y-m-d_H-i-s") . "_" . $releves_notes_diplome_plus_eleve->getClientOriginalName();
                $return = $releves_notes_diplome_plus_eleve->move(public_path("storage/pdfs_documents"), $file_name);

                $donnees_service["releves_notes_diplome_plus_eleve"] = $file_name;

                @unlink(public_path("storage/pdfs_documents/") . $inscription_to_update->releves_notes_diplome_plus_eleve);
            }


            $resultat_update = $inscription_to_update->update($donnees_service);

            $message = "";
            $code_message = "";
            if ($resultat_update) {
                $message = "Modification effectuée avec succès...";
                $code_message = "message";
            } else {

                $message = "Une erreur est intervenue lors de la modification. Veuillez reessayer...";
                $code_message = "error";
            }

            return redirect()->route("updateStateOfDossier", ["inscription_code" => $inscription_code])->with($code_message, $message);
        } catch (\Throwable $th) {

            $message = "Une erreur est intervenue lors de la modification. Veuillez reessayer... " . $th->getMessage();
            $code_message = "error";

            return redirect()->route("updateStateOfDossier", ["inscription_code" => $inscription_code])->with($code_message, $message);
        }
    }

    function afficherPageListeMessagesContact(Request $request){

        try {
            $all_messages_contact = ContactMessage::
            orderBy("created_at","desc")
            ->get();

            return view("backend.page-list-messages-contact-admin",compact("all_messages_contact"));
            
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
