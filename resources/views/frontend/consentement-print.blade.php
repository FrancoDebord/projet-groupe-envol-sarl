
<link rel="stylesheet" href="{{ asset("storage/assets/bootstrap-5.3.3/css/bootstrap.min.css") }}">

<div class="row">
    <div class="col-12 col-md-10 offset-md-1" id="div_consentement">
        <h2 class="text-center mt-4">Formulaire de consentement pour l’immigration et le recrutement</h2>
        
        <div class="w-100 text-center">
            <img src="{{ asset("storage/assets/fpdf-docs/header.jpg") }}" class="w-100" alt=""/>
        </div>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>DECLARATION</th>
                    <th>Votre réponse</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>La note d’information a été claire et compréhensible et 
                        est écrite dans une langue que je maîtrise bien. J’ai eu la possibilité de réfléchir
                         aux informations, de poser des questions et d’obtenir une réponse complète.
                    </td>
                    <td class="text-center valign-center">
                        OUI
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td >
                        Je comprends que c’est moi-même qui ai décidé de me faire
                         représenter par le Groupe Envol SARL en sa qualité de Représentant en immigration et  recrutement.
                    </td>
                    <td class="text-center valign-center">
                       OUI
                    </td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>
                        Je comprends que la procédure d’immigration et de recrutement implique deux (2) frais que je dois complètement 
                        solder avant la collecte de mes données biométriques auprès des centres agréés.
                    </td>
                    <td class="text-center valign-center">
                       OUI
                    </td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>
                        Je comprends que si j’arrête moi-même la procédure d’immigration 
                        en cours pour une quelconque raison, je ne serai remboursé d’aucun frais.
                    </td>
                    <td class="text-center valign-center">
                      OUI
                    </td>
                </tr>

                <tr>
                    <td>5</td>
                    <td>
                        Je comprends que mes informations personnelles peuvent être transférées par 
                        <a href="mailto:info@groupeenvol.org">info@groupeenvol.org</a> ou en main propre à mon employeur ou mon école
                         après mon recrutement ou mon admission, à une ambassade ou un consulat pour l’obtention de visa.
                    </td>
                    <td class="text-center valign-center">
                        OUI
                    </td>
                </tr>

                <tr>
                    <td>6</td>
                    <td>
                        Je donne mon accord à <strong>TOUT</strong> ce qui est écrit dans la note d’information.
                    </td>
                    <td class="text-center valign-center">
                       OUI
                    </td>
                </tr>

                <tr>
                    <td>7</td>
                    <td>
                        Je consens que mes données personnelles soient collectées et conservées aux fins d’immigration et de recrutement.
                    </td>
                    <td class="text-center valign-center">
                       OUI
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>
                        Je donne mon accord pour les Cookies que Groupe Envol utilise à des fins d'expérience utilisateur.
                    </td>
                    <td class="text-center valign-center">
                       OUI
                    </td>
                </tr>

            </tbody>
            
        </table>

     

        <table class="table table-bordered mt-2">
          <thead>
            <tr>
                <th>Noms et Prénoms du requérant principal</th>
                <th>Date (jj/mm/aaaa)</th>
                <th>Signature</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td class="nom_complet_consentement_affichage">{{ $nom_consentement." ".$prenom_consentement }}</td>
                <td>{{ $date_consentement??date("d/m/Y") }}</td>
                <td class="nom_complet_consentement_affichage">{{ $nom_consentement." ".$prenom_consentement }}</td>
            </tr>
          </tbody>
        </table>

        <div class="w-100 text-center mt-1">
            <img src="{{ asset("storage/assets/fpdf-docs/footer.jpg") }}" class="w-100" alt=""/>
        </div>
    </div>
  
</div>

<script>
    window.print();
</script>