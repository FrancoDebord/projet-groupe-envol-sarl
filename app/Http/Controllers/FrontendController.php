<?php

namespace App\Http\Controllers;

use App\Models\Pays;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //

    function __construct()
    {
        
    }


    function accueil(){

        try {
            return view("frontend.accueil");
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    function inscription(){

        try {

            $list_pays = Pays::orderBy("pays_name")->get();
            return view("frontend.inscription",compact("list_pays"));
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
