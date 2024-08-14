<?php

namespace Database\Seeders;

use App\Models\GE_Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GE_TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $teams_members = [
            [
                "titre_member"=>"M.",
                "nom_member"=>"AVANON",
                "prenom_member"=>"Hospice",
                "poste_member"=>"Directeur Général",
                "telephone"=>"+2298989898",
                "email_member"=>"fopisso21@gmail.com",
                "adresse"=>"Calavi, A IBIS",
                "bio_member"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua.enim minim veniam, quis nostrud exer citation ullamco laboris nisi aliquip com modo consequat. Duis aute irure dolor in reprenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit volup tatem acusantium dolor emque laud antium.",
                "facebook"=>"",
                "youtube"=>"",
                "twitter"=>"",
                "linkedin"=>"",
                "photo_member"=>"team-1.jpg",
                "sexe"=>"M",
            ],
            [
                "titre_member"=>"M.",
                "nom_member"=>"ALODEHITO",
                "prenom_member"=>"Fidèle",
                "poste_member"=>"Ressources Humaines",
                "telephone"=>"+2298989898",
                "email_member"=>"fopisso21@gmail.com",
                "adresse"=>"Calavi, A IBIS",
                "bio_member"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua.enim minim veniam, quis nostrud exer citation ullamco laboris nisi aliquip com modo consequat. Duis aute irure dolor in reprenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit volup tatem acusantium dolor emque laud antium.",
                "facebook"=>"",
                "youtube"=>"",
                "twitter"=>"",
                "linkedin"=>"",
                "sexe"=>"M",
                "photo_member"=>"team-2.jpg",
            ],
            [
                "titre_member"=>"Mme.",
                "nom_member"=>"ALODEHITO",
                "prenom_member"=>"Saraï",
                "poste_member"=>"Directrice Administrative et Financière",
                "telephone"=>"+2298989898",
                "email_member"=>"fopisso21@gmail.com",
                "adresse"=>"Calavi, A IBIS",
                "bio_member"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua.enim minim veniam, quis nostrud exer citation ullamco laboris nisi aliquip com modo consequat. Duis aute irure dolor in reprenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit volup tatem acusantium dolor emque laud antium.",
                "facebook"=>"",
                "youtube"=>"",
                "twitter"=>"",
                "linkedin"=>"",
                "sexe"=>"M",
                "photo_member"=>"team-3.jpg",
            ],
            [
                "titre_member"=>"M.",
                "nom_member"=>"XXX",
                "prenom_member"=>"XXXX",
                "poste_member"=>"Agent",
                "telephone"=>"+2298989898",
                "email_member"=>"fopisso21@gmail.com",
                "adresse"=>"Calavi, A IBIS",
                "bio_member"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua.enim minim veniam, quis nostrud exer citation ullamco laboris nisi aliquip com modo consequat. Duis aute irure dolor in reprenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit volup tatem acusantium dolor emque laud antium.",
                "facebook"=>"",
                "youtube"=>"",
                "twitter"=>"",
                "linkedin"=>"",
                "sexe"=>"M",
                "photo_member"=>"team-4.jpg",
            ],
            [
                "titre_member"=>"M.",
                "nom_member"=>"XXX",
                "prenom_member"=>"XXXX",
                "poste_member"=>"Agent",
                "telephone"=>"+2298989898",
                "email_member"=>"fopisso21@gmail.com",
                "adresse"=>"Calavi, A IBIS",
                "bio_member"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua.enim minim veniam, quis nostrud exer citation ullamco laboris nisi aliquip com modo consequat. Duis aute irure dolor in reprenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit volup tatem acusantium dolor emque laud antium.",
                "facebook"=>"",
                "youtube"=>"",
                "twitter"=>"",
                "linkedin"=>"",
                "sexe"=>"M",
                "photo_member"=>"team-5.jpg",
            ],
            [
                "titre_member"=>"M.",
                "nom_member"=>"XXX",
                "prenom_member"=>"XXXX",
                "poste_member"=>"Agent",
                "telephone"=>"+2298989898",
                "email_member"=>"fopisso21@gmail.com",
                "adresse"=>"Calavi, A IBIS",
                "bio_member"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid idunt ut labore et dolore magna aliqua.enim minim veniam, quis nostrud exer citation ullamco laboris nisi aliquip com modo consequat. Duis aute irure dolor in reprenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit volup tatem acusantium dolor emque laud antium.",
                "facebook"=>"",
                "youtube"=>"",
                "twitter"=>"",
                "linkedin"=>"",
                "sexe"=>"M",
                "photo_member"=>"team-6.jpg",
            ],

        ];


        foreach ($teams_members as $key => $member) {
            
            $te = GE_Team::create($member);
        }
    }
}
