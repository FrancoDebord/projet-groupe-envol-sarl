<?php

namespace Database\Seeders;

use App\Models\CorpsMetier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CorpsMetierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $list_metiers = [
            "Chercheur",
            "Enseignant",
            "Ingénieur",
            "Economiste",
            "Banquier",
            "Financier",
            "Gestionnaire",
            "Comptable",
            "Sociologue",
            "Juriste",
            "Agronome",
            "Secrétaire",
            "Psychologue",
            "Commercial",
            "Médecin",
            "Pharmacien",
            "Infirmier",
            "Sage-femme",
            "Aide-soignant",
            "Laborantin",
            "Kinésithérapeute",
            "Délégué médical",
            "Informaticien",
            "Vétérinaire",
            "Psychiatre",
            "Auditeur",
            "Commerçant",
            "Photographe",
            "Vitrier",
            "Coiffeur et coiffeuse",
            "Maçon",
            "Menuisier",
            "Carreleur",
            "Peintre",
            "Plombier",
            "Cuisinier",
            "Conducteur poids lourds",
            "Électricien tout genre",
            "Couturier",
            "Serveur et serveuse",
            "Réceptionniste",
            "Agent de sécurité",
            "Vulgarisateur",
            "Cordonniers",
            "Agent d'entretien",
            "Mécanicien auto",
            "Éleveur",
            "Ménagère",
            "Jardiner",
            "Soudeur"
        ];

        foreach ($list_metiers as $key => $nom_metier) {
           
            $metier = CorpsMetier::create([
                "intitule_metier"=>$nom_metier
            ]);
        }
    }


}
