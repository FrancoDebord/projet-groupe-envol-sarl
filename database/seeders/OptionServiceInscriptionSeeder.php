<?php

namespace Database\Seeders;

use App\Models\OptionServiceInscription;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionServiceInscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $list_services = [
            [
                "nom_service"=>"Visa Etudiant",
                "statut_service"=>"payant",
                "frais_inscription"=>3,
                "devise"=>"FCFA",
                "url_service"=>"#",
            ],
            [
                "nom_service"=>"Visa Travailleur",
                "statut_service"=>"payant",
                "frais_inscription"=>2,
                "devise"=>"FCFA",
                "url_service"=>"#",
            ],
            [
                "nom_service"=>"Visa Visiteur",
                "statut_service"=>"payant",
                "frais_inscription"=>4,
                "devise"=>"FCFA",
                "url_service"=>"#",
            ]
        ];

        foreach ($list_services as $key => $service) {
            
            $create_service = Service::create($service);
        }
    }
}
