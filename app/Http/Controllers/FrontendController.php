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
            return view("frontend.accueil");
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    function inscription(){

        try {
            return view("frontend.inscription");
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
