<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequeteAjaxFrontendController extends Controller
{
    //

    public function __construct()
    {
        
    }

    function addDataToSession(Request $request){

        try {
            
            $data = $request->except(["_token"]);

            if(session()->has("donnees_inscription")){

                $donnees_inscription = session()->get("donnees_inscription");

                $donnees_inscription = array_merge($donnees_inscription,$data);

                session()->put("donnees_inscription",$donnees_inscription);

                return response()->json([
                    "code_erreur"=>0,
                    "message"=>"Aller au suivant",
                ]);

            }
            else{

                session()->put("donnees_inscription",$data);
                return response()->json([
                    "code_erreur"=>0,
                    "message"=>"Aller au suivant",
                ]);
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
