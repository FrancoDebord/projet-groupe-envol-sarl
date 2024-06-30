<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //

    function __construct()
    {
        
    }


    function accueil(){

        try {
            return view("accueil");
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
