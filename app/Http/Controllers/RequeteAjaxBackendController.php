<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class RequeteAjaxBackendController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware("auth");
    }


    function mettreAjourEtatMessageContact(Request $request)
    {

        try {
            $contact_id = $request->contact_id;

            $contact = ContactMessage::findOrFail($contact_id);

            $update = $contact->update(["lu" => 1]);

            if ($update) {

                return response()->json([
                    "code_erreur" => 0,
                    "message" => "Mise à jour effectuée... "
                ]);
            } else {

                return response()->json([
                    "code_erreur" => 1,
                    "message" => "Une erreur est survenue lors de la mise à jour "
                ]);
            }
        } catch (\Throwable $th) {

            return response()->json([
                "code_erreur" => 1,
                "message" => "Une erreur est survenue lors de la mise à jour : " . $th->getMessage(),
            ]);
        }
    }
}
