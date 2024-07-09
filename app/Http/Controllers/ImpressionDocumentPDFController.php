<?php

namespace App\Http\Controllers;

use App\Models\CustomFPDF;
use Illuminate\Http\Request;

class ImpressionDocumentPDFController extends Controller
{
    //

    function imprimerNoteInformation(Request $request){

        try {
            
            $fpdf = new CustomFPDF("P");

            $fpdf->AddPage();
            $fpdf->SetFont("Arial","B",15);
            
            // $fpdf->SetXY(80,20);
            
            $fpdf->Cell(0,10,$fpdf->utf8_to_iso8859_1("Formulaire d'information pour l'immigration et le recrutement"),0,1,"C");
            
            $fpdf->SetFont("Arial","",11);
            
            $fpdf->SetY(30);
            $fpdf->MultiCell(0,7,$fpdf->utf8_to_iso8859_1("Le Groupe Envol SARL est une société à responsabilité limitée, au capital social : 500.000F CFA, Ecobank-Bénin N°111761891001. Le siège social est à Abomey-calavi, Tchinagbégbo, 27897, A bis. RCCM : RB/ABC/24B8319 et IFU : 3202479941626."),0,1,0);
            $fpdf->MultiCell(0,7,$fpdf->utf8_to_iso8859_1("La société a pour objet, au Bénin et à l'étranger suivant les statuts ce qui suit :  conseils et assistance visa-voyage, intermédiation de recrutement, négoces et plus généralement toutes opérations licites de quelque nature qu'elles soient se rattachant directement ou indirectement à l'objet énoncé ou à tous objets similaires ou connexes et susceptibles d'en favoriser son développement."),0,1,0);
            $fpdf->Ln();
            
            $fpdf->MultiCell(0,7,$fpdf->utf8_to_iso8859_1("Le présent formulaire d'information est établi à l'intention des candidats qui désirent immigrer pour étudier, visiter ou travailler partout dans le monde. Le Groupe Envol SARL est un Représentant en immigration qui vous aide dans vos procédures d'obtention de visa. NOUS NE DELIVRONS PAS DE VISA, NI AUCUN DOCUMENT ADMINISTRATIF QUI FAVORISE SON ABOUTISSEMENT. La société est une facilitatrice qui vous évite les pertes de temps et d'argent et vous oriente pour l'obtention des documents requis et à bonne date."),0,1,0);
            $fpdf->Ln();

            $fpdf->MultiCell(0,7,$fpdf->utf8_to_iso8859_1("En qualité de Représentant en immigration et recrutement, le Groupe Envol SARL prélève quatre (4) frais pour couvrir les différents services jusqu'à la délivrance du visa. Il s'agit des frais d'inscription, d'étude de dossier, de procédures et les honoraires."),0,1,0);
            $fpdf->Ln();
            $fpdf->MultiCell(0,7,$fpdf->utf8_to_iso8859_1("En qualité de Représentant en immigration et recrutement, le Groupe Envol SARL prélève quatre (4) frais pour couvrir les différents services jusqu'à la délivrance du visa. Il s'agit des frais d'inscription, d'étude de dossier, de procédures et les honoraires."),0,1,0);
            $fpdf->Ln();
            $fpdf->Output();
            exit;

        } catch (\Throwable $th) {
        dd($th);
        }
    }


    function ImprimerConsentementSigne(Request $request){

        $headers = ["N°","Déclaration","Votre réponse"];

        $donnees = [
            [
                "numero"=>1,
                "declaration"=>"La note d'information a été claire et compréhensible et \n
                est écrite dans une langue que je maîtrise bien. J'ai eu la possibilité de réfléchir\n
                aux informations, de poser des questions et d'obtenir une réponse complète.",
                "reponse"=>"Oui",
            ],
            [
                "numero"=>2,
                "declaration"=>" Je comprends que c'est moi-même qui ai décidé de me faire\n
                                représenter par le Groupe Envol SARL en sa qualité de Représentant en immigration et  recrutement.",
                "reponse"=>"Oui",
            ],
            [
                "numero"=>3,
                "declaration"=>" Je comprends que la procédure d'immigration et de recrutement implique quatre (4) frais que \n je dois complètement 
                                solder avant la collecte de mes données biométriques auprès des centres agréés.",
                "reponse"=>"Oui",
            ],
            [
                "numero"=>4,
                "declaration"=>" Je comprends que si j'arrête moi-même la procédure d'immigration \n
                                    en cours pour une quelconque raison, je ne serai remboursé d'aucun frais.",
                "reponse"=>"Oui",
            ],
            [
                "numero"=>5,
                "declaration"=>"  Je comprends que mes informations personnelles peuvent être transférées par \n
                                    info@groupeenvol.org ou en main propre à mon employeur \n
                                     après mon recrutement, à une ambassade ou un consulat pour l'obtention de visa.",
                "reponse"=>"Oui",
            ],
            [
                "numero"=>6,
                "declaration"=>"  Je donne mon accord à TOUT ce qui est écrit dans la note d'information.",
                "reponse"=>"Oui",
            ],
            [
                "numero"=>7,
                "declaration"=>" Je consens que mes données personnelles soient collectées et conservées aux \n fins d'immigration et de recrutement.",
                "reponse"=>"Oui",
            ],
            [
                "numero"=>8,
                "declaration"=>" Je donne mon accord pour les Cookies que Groupe Envol utilise à des fins d'expérience utilisateur..",
                "reponse"=>"Oui",
            ],

        ];


        try {
            
            $fpdf = new CustomFPDF("P");

            $fpdf->AddPage();
            $fpdf->SetFont("Arial","B",15);
            
            // $fpdf->SetXY(80,20);
            
            $fpdf->Cell(0,10,$fpdf->utf8_to_iso8859_1("Formulaire d'information pour l'immigration et le recrutement"),0,1,"C");
            
            $fpdf->SetFont("Arial","",11);
            
            $fpdf->SetY(30);
            $fpdf->ImprovedTable($headers,$donnees);

            $fpdf->Output();
            exit;
        } catch (\Throwable $th) {
            
            dd($th);
        }
    }
}
