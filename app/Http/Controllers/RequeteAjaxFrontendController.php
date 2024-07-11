<?php

namespace App\Http\Controllers;

use App\Mail\EnvoiMailInscription;
use App\Models\ClientService;
use App\Models\ConsentementSigne;
use App\Models\InscriptionClientService;
use App\Models\NoteInformationLue;
use App\Models\Pays;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RequeteAjaxFrontendController extends Controller
{
    //

    public function __construct()
    {
    }

    function enregistrer_lecture_note_information(Request $request)
    {

        try {

            if (session()->has("note_information_lue")) {

                session()->put("tab_en_cours", "consentement-tab");

                return response()->json([
                    "code_erreur" => 0,
                    "note_information_lue_id" => session()->get("note_information_lue_id"),
                    "message" => "Vous avez déjà lu la note d'information. Veuillez passer aux étapes suivantes...",
                    "note_information" => asset("storage/assets/note_infos/Note_information.pdf"),
                ]);
            } else {

                $note_information_lue = $request->get("note_information_lue");


                if ($note_information_lue == "true") {



                    $create_note_information_lue = NoteInformationLue::create([
                        "date_lecture" => date("Y-m-d"),
                        "heure_lecture" => date("H:i:s"),
                        "note_lue" => 1,
                        "note_information_telechargee" => 1,
                        "adresse_ip_ordinateur" => $request->ip(),
                    ]);


                    if ($create_note_information_lue) {

                        session()->put("note_information_lue", 1);
                        session()->put("note_information_lue_id", $create_note_information_lue->id);

                        session()->put("tab_en_cours", "consentement-tab");

                        return response()->json([
                            "code_erreur" => 0,
                            "note_information_lue_id" => $create_note_information_lue->id,
                            "message" => "Lecture de la note d'information enregistrée. Veuillez passer à la signature du consentement...",
                            "note_information" => asset("storage/assets/note_infos/Note_information.pdf"),
                        ]);
                    } else {

                        session()->put("tab_en_cours", "note-information-tab");
                        return response()->json([
                            "code_erreur" => 1,
                            "message" => "Une erreur s'est produite lors de l'enregistrement de votre lecture de la note d'information. Veuillez reessayer...",
                        ]);
                    }
                } else {

                    session()->put("tab_en_cours", "note-information-tab");
                    return response()->json([
                        "code_erreur" => 1,
                        "message" => "Veuillez cocher le bouton pour certifier que vous avez lu le contenu de la note d'information...",
                    ]);
                }
            }
        } catch (\Throwable $th) {
            dd($th);
        }
    }


    /**
     * Signer consentement
     */

    function signerConsentement(Request $request)
    {

        try {

            $rules = [
                "consentement_1" => ["required", "in:true"],
                "consentement_2" => ["required", "in:true"],
                "consentement_3" => ["required", "in:true"],
                "consentement_4" => ["required", "in:true"],
                "consentement_5" => ["required", "in:true"],
                "consentement_6" => ["required", "in:true"],
                "consentement_7" => ["required", "in:true"],
                "consentement_8" => ["required", "in:true"],
                "nom_consentement" => ["required", "string"],
                "prenom_consentement" => ["required", "string"],
                "note_information_lue_id" => ["required", "integer"],
            ];

            $messages = [
                "consentement_1.in" => "Vous devez répondre OUI à la question N°1",
                "consentement_2.in" => "Vous devez répondre OUI à la question N°2",
                "consentement_3.in" => "Vous devez répondre OUI à la question N°3",
                "consentement_4.in" => "Vous devez répondre OUI à la question N°4",
                "consentement_5.in" => "Vous devez répondre OUI à la question N°5",
                "consentement_6.in" => "Vous devez répondre OUI à la question N°6",
                "consentement_7.in" => "Vous devez répondre OUI à la question N°7",
                "consentement_8.in" => "Vous devez répondre OUI à la question N°8",

                "nom_consentement.required" => "Vous devez donner votre nom",
                "prenom_consentement.required" => "Vous devez donner votre prénom",
                "note_information_lue_id.required" => "Vous devez d'abord lire la note d'information.",
            ];
            $validator = Validator::make($request->all(), $rules, $messages);


            if ($validator->fails()) {

                return response()->json([
                    "code_erreur" => 2,
                    "errors" => $validator->errors(),
                ]);
            } else {

                if (session()->has("consentement_signe")) {

                    // $consentement_id = session()->has("consentement_id");
                    // $ancien_consentement_signe = ConsentementSigne::find($consentement_id);

                    session()->put("tab_en_cours", "information-detaillee-tab");
                    return response()->json([
                        "code_erreur" => 0,
                        "consentement_id" => session()->get("consentement_id"),
                        "message" => "Vous avez déjà signé le consentement. Veuillez passer à l'étude des informations détaillées sur vous...",
                    ]);
                } else {

                    $consentement = ConsentementSigne::create([
                        "date_consentement" => date("Y-m-d"),
                        "heure_consentement" => date("H:i:s"),
                        "consentement_signe" => 1,
                        "note_information_id" => $request->note_information_lue_id,
                        "adresse_ip_ordinateur" => $request->ip(),
                        "nom_consentement" => $request->nom_consentement,
                        "prenom_consentement" => $request->prenom_consentement,
                    ]);

                    if ($consentement) {

                        session()->put("consentement_signe", 1);

                        session()->put("nom_consentement", $request->nom_consentement);
                        session()->put("prenom_consentement", $request->prenom_consentement);
                        session()->put("date_consentement", date("d/m/Y"));

                        session()->put("consentement_id", $consentement->id);
                        session()->put("tab_en_cours", "information-detaillee-tab");

                        return response()->json([
                            "code_erreur" => 0,
                            "consentement_id" =>  $consentement->id,
                            "message" => "Consentement signé. Veuillez passer à l'étape suivante...",
                        ]);
                    } else {
                        session()->put("tab_en_cours", "consentement-tab");
                        return response()->json([
                            "code_erreur" => 1,
                            "message" => "Une erreur s'est produite lors de l'enregistrement du consentement. Veuillez reessayer...",
                        ]);
                    }
                }
            }
        } catch (\Throwable $th) {

            dd($th);
        }
    }


    public function setCookie(Request $request)
    {
        $minutes = 60;
        $response = new Response('Set Cookie');
        $response->withCookie(cookie('name', 'MyValue', $minutes));
        return $response;
    }

    public function getCookie(Request $request)
    {
        $value = $request->cookie('name');
        echo $value;
    }


    /**
     * Valider les informations détaillées. Ce n'est pas encore l'enregistrement
     */

    function ValiderInformationDetailleeClient(Request $request)
    {

        // try {
        $rules = [
            "consentement_id" => ["required", "integer"],
            "email_client" => ["required", "email"],
            "adresse_mail" => ["required", "email"],
            "nom_client" => ["required", "string"],
            "prenom_client" => ["required", "string"],
            "votre_nom" => ["required", "string"],
            "votre_prenom" => ["required", "string"],
            "password_client" => ["required"],
            "confirm_password_client" => ["required", "same:password_client"],
            "avez_vous_un_passeport_valide" => ["required"],
            "pays_nationalite" => ["required"],
            "date_naissance" => ["required", "date"],
            "ville_naissance" => ["required", "string"],
            "pays_naissance" => ["required"],
            "sexe" => ["required"],
            "pays_residence" => ["required"],
            "ville_residence" => ["required", "string"],
            "quartier_residence" => ["required", "string"],
            "telephone_client" => ["required"],
            "situation_matrimoniale" => ["required"],
            "nombre_personnes_voyage" => ["required"],
            "niveau_francais" => ["required"],
            "niveau_anglais" => ["required"],
            "diplome_plus_eleve" => ["required"],
            "profession" => ["required"],
            "autre_profession" => ["required_if:profession,autre"],
            "annees_experience" => ["required"],
        ];

        $messages = [
            "consentement_id.required" => "Vous devez d'abord signer le consentement avant de chercher à vous inscrire...",
            "email_client.required" => "Veuillez fournir votre adresse Mail...",
            "email_client.email" => "Veuillez donner une adresse mail valide. Ex : xxxx@email.com...",
            "adresse_mail.required" => "Veuillez fournir votre adresse Mail...",
            "adresse_mail.email" => "Veuillez donner une adresse mail valide. Ex : xxxx@email.com...",
            "nom_client.required" => "Veuillez fournir votre nom de famille...",
            "prenom_client.required" => "Veuillez fournir votre prénom...",
            "sexe.required" => "Veuillez fournir votre civilité (Masculin ou Féminin)...",
            "nom_client.string" => "Veuillez fournir un nom valide. Pas un chiffre ou un nombre...",
            "prenom_client.string" => "Veuillez fournir un prenom valide. Pas un chiffre ou un nombre...",
            "password_client.required" => "Veuillez fournir un mot de passe pour votre compte...",
            "confirm_password_client.required" => "Veuillez confirmer votre mot de passe...",
            "confirm_password_client.same" => "Les deux mots de passe doivent correspondre. Ils doivent être les mêmes.",
            "avez_vous_un_passeport_valide.required" => "Veuillez nous indiquer si vous avez un passeport valide.",
            "pays_nationalite.required" => "Veuillez nous indiquer votre nationalité.",
            "date_naissance.required" => "Veuillez nous indiquer votre date de naissance.",
            "date_naissance.date" => "Veuillez nous indiquer une date de naissance valide.",
            "ville_naissance.required" => "Veuillez nous indiquer votre ville de naissance (lieu de naissance).",
            "ville_naissance.string" => "Veuillez nous indiquer une ville de naissance (lieu de naissance) valide. Pas un chiffre ou un nombre.",
            "pays_naissance.required" => "Veuillez nous indiquer votre pays de naissance.",
            "pays_residence.required" => "Veuillez nous indiquer votre pays de résidence.",
            "ville_residence.required" => "Veuillez nous indiquer votre ville de résidence.",
            "ville_residence.string" => "Veuillez nous indiquer une ville de résidence valide. Pas un chiffre ou un nombre.",
            "quartier_residence.required" => "Veuillez nous indiquer votre quartier de résidence.",
            "quartier_residence.string" => "Veuillez nous indiquer un quartier de résidence valide. Pas un chiffre ou un nombre.",
            "telephone_client.required" => "Veuillez nous fournir votre numéro de téléphone.",
            "situation_matrimoniale.required" => "Veuillez nous indiquer votre situation matrimoniale.",
            "nombre_personnes_voyage.required" => "Veuillez nous indiquer le nombre de personnes qui voyagent y compris vous-même.",
            "niveau_francais.required" => "Veuillez nous indiquer votre niveau en français.",
            "niveau_anglais.required" => "Veuillez nous indiquer votre niveau en anglais.",
            "diplome_plus_eleve.required" => "Veuillez nous indiquer votre diplôme le plus utilisé.",
            "profession.required" => "Veuillez nous indiquer votre profession.",
            "autre_profession.required_if" => "Veuillez spécifier votre profession si elle ne se trouve pas dans la liste donnée.",
            "annees_experience.required" => "Veuillez nous indiquer votre nombre d'années d'expérience.",
        ];

        session()->put("donnees_informations_detaillees", $request->all());
        session()->put("tab_en_cours", "information-detaillee-tab");
        $this->validate($request, $rules, $messages);

        try {
           
            session()->flash("message_succes", "Vos données ont été bien sauvegardées. Veuillez passer à l'étape suivante en choisissant le service.");

            session()->put("tab_en_cours", "information-service-tab");
            return redirect()->route("inscription", ["tab" => "information-service-tab"]);
        } catch (\Throwable $th) {

            dd($th);
        }
    }

    /**
     * Ajouter les informations de service et finaliser l'inscription
     */

    function ajouterInformationServiceEtFinaliserInscription(Request $request)
    {

        $rules = [
            "information_detaillee_fournie" => ["required", "integer"],
            "piece_identite" => ["required", "mimes:pdf"],
            "attestation_diplome_plus_eleve" => ["required", "mimes:pdf"],
            "service_inscription" => ["required", "string"],
            "releves_notes_diplome_plus_eleve" => ["mimes:pdf", "nullable"],
        ];

        $messages = [
            "information_detaillee_fournie.required" => "Veuillez d'abord remplir le formulaire précédent; les informations détaillées",
            "piece_identite.required" => "Votre pièce d'identité est obligatoire",
            "piece_identite.mimes" => "Votre pièce d'identité doit être en PDF",
            "attestation_diplome_plus_eleve.required" => "Votre diplôme le plus élevé est une pièce obligatoire",
            "attestation_diplome_plus_eleve.mimes" => "Votre diplôme le plus élevé doit être en PDF",
            "service_inscription.required" => "Veuillez choisir le service pour lequel vous voulez vous inscrire",
            // "releves_notes_diplome_plus_eleve.required_if" => "Votre relevé de notes est une pièce obligatoire si vous choisissez le service d'Intermédiation de recrutement",
            "releves_notes_diplome_plus_eleve.mimes" => "Votre relevé de notes doit être en PDF",
        ];

        $this->validate($request, $rules, $messages);

        try {

            $donnees_service = $request->all();

            $piece_identite = $request->file("piece_identite");
            if (!empty($piece_identite)) {

                $file_name = "piece_identite_" . date("Y-m-d_H-i-s") . "_" . $piece_identite->getClientOriginalName();
                $return = $piece_identite->move(public_path("storage/pdfs_documents"), $file_name);

                $donnees_service["piece_identite"] = $file_name;
            }

            $attestation_diplome_plus_eleve = $request->file("attestation_diplome_plus_eleve");
            if (!empty($attestation_diplome_plus_eleve)) {

                $file_name = "attestation_diplome_plus_eleve_" . date("Y-m-d_H-i-s") . "_" . $attestation_diplome_plus_eleve->getClientOriginalName();
                $return = $attestation_diplome_plus_eleve->move(public_path("storage/pdfs_documents"), $file_name);

                $donnees_service["attestation_diplome_plus_eleve"] = $file_name;
            }

            $releves_notes_diplome_plus_eleve = $request->file("releves_notes_diplome_plus_eleve");
            if (!empty($releves_notes_diplome_plus_eleve)) {

                $file_name = "releves_notes_diplome_plus_eleve_" . date("Y-m-d_H-i-s") . "_" . $releves_notes_diplome_plus_eleve->getClientOriginalName();
                $return = $releves_notes_diplome_plus_eleve->move(public_path("storage/pdfs_documents"), $file_name);

                $donnees_service["releves_notes_diplome_plus_eleve"] = $file_name;
            }

            $infos_service_selectionne = Service::find($donnees_service["service_inscription"]);

            session()->put("tab_en_cours", "paiement-tab");
            session()->put("donnees_informations_service", $donnees_service);
            session()->put("infos_service_selectionne", $infos_service_selectionne);
            session()->put("donnees_informations_service_fourni", 1);

            session()->flash("message_succes", "Vos données sur le service ont été bien sauvegardées. Veuillez passer à l'étape suivante en procédant au paiement.");

            return redirect()->route("inscription", ["tab" => "paiement-tab"]);
        } catch (\Throwable $th) {
            dd($th);
        }
    }


    /**
     * Paiement par KKIA PAY
     */


    function effectuerPaiementKKiaPay(Request $request)
    {

        try {

            $kkiapay = new \Kkiapay\Kkiapay(
                "182ba73163b255f793b8153eade717bb90a587e6",
                "pk_6dd6e3cba14c4d0a9895a0836c92fab3c3fc2a4a4040808ca21298307d0ceeb7",
                "sk_df5be710d1b26da8b67450b06c109952a6096ef355e9a7f71242a6cca9a75c23"
                // $sandbox = true
            );

            $transaction_id = $request->transaction_id;

            $check_inscription_existing = InscriptionClientService::where("kkiapay_transaction_id", $transaction_id)->first();

            if ($check_inscription_existing) {
                //Cette inscription a déjà été prise en compte

                session()->forget("note_information_lue_id");
                session()->forget("note_information_lue");
                session()->forget("consentement_id");
                session()->forget("consentement_signe");
                session()->forget("donnees_informations_service");
                session()->forget("donnees_informations_service_fourni");
                session()->forget("donnees_informations_detaillees");
                session()->forget("infos_service_selectionne");
                session()->forget("nom_consentement");
                session()->forget("prenom_consentement");
                session()->forget("date_consentement");
                session()->forget("tab_en_cours");
                session()->forget("list_pays_service");

                $email_send = Mail::to(
                    $check_inscription_existing->clientServiceConcerne->email_client,
                    
                )
                ->cc(["fhoueha@gmail.com","fopisso21@gmail.com","info@groupeenvol.org"])
                ->send(new EnvoiMailInscription($check_inscription_existing));

                // dd($email_send);


                return redirect()->route("pageDetailServiceSouscrit", ["code_inscription" => $check_inscription_existing->code_inscription])->with("message_error", "Cette inscription a déjà été enregistrée. ...");
                // return redirect()->back()->with("message_error","Cette inscription a déjà été enregistrée. ...");

            } else {
                $return_check =  $kkiapay->verifyTransaction($transaction_id);


                if ($return_check->status != "SUCCESS") {

                    return redirect()->back()->with("message_error", "Le Paiement des frais d'inscription ne s'est pas bien passé. Veuillez reessayer...");
                } else {

                    $donnees_inscription = session()->get("donnees_informations_detaillees");

                    $donnees_inscription["note_information_id"] = session()->get("note_information_lue_id");

                    $donnees_inscription["consentement_signe_id"] = session()->get("consentement_id");

                    $donnees_informations_service = session()->get("donnees_informations_service");
                    $infos_service_selectionne = session()->get("infos_service_selectionne");


                    $create_user = User::where("email", $donnees_inscription["email_client"])->first();

                    if ($create_user) {

                        // on verra quoi faire
                    } else {

                        $create_user = User::create([
                            "name" => $donnees_inscription["nom_client"] . " " . $donnees_inscription["prenom_client"],
                            "email" => $donnees_inscription["email_client"],
                            "password" => $donnees_inscription["password_client"],
                        ]);
                    }

                    $client_service = ClientService::where("email_client", $donnees_inscription["email_client"])->first();

                    if ($client_service) {
                    } else {

                        $client_service = ClientService::create([
                            "avez_vous_un_passeport" => $donnees_inscription["avez_vous_un_passeport_valide"],
                            "nom" => $donnees_inscription["nom_client"],
                            "prenom" => $donnees_inscription["prenom_client"],
                            "sexe" => $donnees_inscription["sexe"],
                            "date_naissance" => $donnees_inscription["date_naissance"],
                            "pays_naissance" => $donnees_inscription["pays_naissance"],
                            "ville_naissance" => $donnees_inscription["ville_naissance"],
                            "pays_residence" => $donnees_inscription["pays_residence"],
                            "ville_residence" => $donnees_inscription["ville_residence"],
                            "quartier_residence" => $donnees_inscription["quartier_residence"],
                            "pays_nationalite" => $donnees_inscription["pays_nationalite"],
                            "telephone_client" => $donnees_inscription["telephone_client"],
                            "email_client" => $donnees_inscription["email_client"],
                            "situation_matrimoniale" => $donnees_inscription["situation_matrimoniale"],
                            "niveau_francais" => $donnees_inscription["niveau_francais"],
                            "niveau_anglais" => $donnees_inscription["niveau_anglais"],
                            "diplome_plus_eleve" => $donnees_inscription["diplome_plus_eleve"],
                            "profession" => $donnees_inscription["profession"],
                            "autre_profession" => array_key_exists("autre_profession",$donnees_inscription)?$donnees_inscription["autre_profession"]:"",
                            "nb_annees_experience" => $donnees_inscription["annees_experience"],
                            "nb_personnes_voyage" => $donnees_inscription["nombre_personnes_voyage"],
                            "note_information_id" => $donnees_inscription["note_information_id"],
                            "consentement_signe_id" => $donnees_inscription["consentement_signe_id"],
                            "user_id" => $create_user->id,
                            "piece_identite" => $donnees_informations_service["piece_identite"],
                            "attestation_diplome_plus_eleve" => $donnees_informations_service["attestation_diplome_plus_eleve"],
                            "releves_notes_diplome_plus_eleve" => array_key_exists("releves_notes_diplome_plus_eleve",$donnees_informations_service)?$donnees_informations_service["releves_notes_diplome_plus_eleve"]:"",
                        ]);
                    }

                    //Inscription
                    $inscription = InscriptionClientService::create([
                        "date_inscription" => date("Y-m-d"),
                        "heure_inscription" => date("H:i:s"),
                        "nb_personnes_voyage" => $donnees_inscription["nombre_personnes_voyage"],
                        "note_information_id" => $donnees_inscription["note_information_id"],
                        "consentement_signe_id" => $donnees_inscription["consentement_signe_id"],
                        "client_id" => $client_service->id,
                        "piece_identite" => $donnees_informations_service["piece_identite"],
                        "attestation_diplome_plus_eleve" => $donnees_informations_service["attestation_diplome_plus_eleve"],
                        "releves_notes_diplome_plus_eleve" => array_key_exists("releves_notes_diplome_plus_eleve",$donnees_informations_service)?$donnees_informations_service["releves_notes_diplome_plus_eleve"]:"",
                        "pays_destination" => $donnees_informations_service["service_inscription"] == "intermediation de recrutement" ? "ROUMANIE" : "CANADA",
                        "service_id" => $donnees_informations_service["service_inscription"],
                        "service_souscrit" => $infos_service_selectionne->nom_service,
                        "statut_paiement" => "payé",
                        "kkiapay_transaction_id" => $transaction_id,
                        "kkiapay_external_transaction_id" => $return_check->externalTransactionId,
                        "statut_dossier" => "en cours d'étude",
                    ]);

                    $inscription_id = $inscription->id;
                    $num_positions = strlen($inscription_id);
                    $repeat_0 = str_repeat("0", 5 - $num_positions); //On répète 0 un certain nombre de fois. Le but est d'avoir des codes sur 5 positions

                    $code_inscription = "GE-" . $repeat_0 . $inscription_id;

                    $inscription->code_inscription = $code_inscription;
                    $inscription->save(); //on enregistre la mise à jour

                    if ($create_user && $client_service && $inscription) {

                        Mail::to(
                            $donnees_inscription["email_client"],
                            
                        )
                        ->cc(["fhoueha@gmail.com","fopisso21@gmail.com","info@groupeenvol.org"])
                        ->send(new EnvoiMailInscription($inscription));

                        session()->forget("note_information_lue_id");
                        session()->forget("note_information_lue");
                        session()->forget("consentement_id");
                        session()->forget("consentement_signe");
                        session()->forget("donnees_informations_service");
                        session()->forget("donnees_informations_service_fourni");
                        session()->forget("donnees_informations_detaillees");
                        session()->forget("tab_en_cours");
                        session()->forget("nom_consentement");
                        session()->forget("prenom_consentement");
                        session()->forget("date_consentement");
                        session()->forget("list_pays_service");

                        return redirect()->route("pageDetailServiceSouscrit", ["code_inscription" => $code_inscription])->with("message_succes", "Votre inscription a été bien enregistrée. Veuillez suivre votre dossier sur la plateforme...");
                        // return redirect()->back()->with("message_succes","Votre inscription a été bien enregistrée. Veuillez suivre votre dossier sur la plateforme...");
                    } else {

                        return redirect()->back()->with("message_error", "Le paiement est effectué mais l'inscription a eu un problème. Veuillez contacter notre entreprise pour faire les autres formalités...");
                    }
                }
            }
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Selectionner les pays concernés par chaque service
     */

     function getListPaysConcernesParService(Request $request){

        try {
            
            $service_id = $request->service_id;

            $service_info = Service::findOrFail($service_id);

            $list_pays = Pays::all();

            if($service_info->nom_service == "Visa Travailleur"){

                $list_pays = Pays::whereIn("pays_name",["Canada","Roumanie"])->get();
            }

            session()->put("list_pays_service",$list_pays);
            return response()->json([
                "code_erreur"=>0,
                "list_pays"=>$list_pays,
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "code_erreur"=>1,
                "message"=>$th->getMessage(),
            ]);
        }
     }
}
