<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $list_services = [
            [
                "nom_service"=>"Conseils et assistance Visa-voyage",
                "statut_service"=>"payant",
                "frais_inscription"=>1,
                "devise"=>"FCFA",
                "url_service"=>"#",
            ],
            [
                "nom_service"=>"Intermédiation de récrutement",
                "statut_service"=>"payant",
                "frais_inscription"=>1,
                "devise"=>"FCFA",
                "url_service"=>"#",
            ],
            [
                "nom_service"=>"Négoces",
                "statut_service"=>"payant",
                "frais_inscription"=>1,
                "devise"=>"FCFA",
                "url_service"=>"#",
            ],
            [
                "nom_service"=>"Bourses d'étude et de formation",
                "statut_service"=>"payant",
                "frais_inscription"=>1,
                "devise"=>"FCFA",
                "url_service"=>"#",
            ],
            [
                "nom_service"=>"Vente de billet d'avion",
                "statut_service"=>"payant",
                "frais_inscription"=>1,
                "devise"=>"FCFA",
                "url_service"=>"#",
            ],
            [
                "nom_service"=>"Assurance de voyage",
                "statut_service"=>"payant",
                "frais_inscription"=>1,
                "devise"=>"FCFA",
                "url_service"=>"#",
            ],
        ];

        foreach ($list_services as $key => $service) {
            
            $create_service = Service::create($service);
        }
    }
}
